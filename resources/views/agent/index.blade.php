@extends('layouts.layout') {{-- usa o teu layout principal; ou remove e coloca head/foot aqui --}}

@section('content')
<div class="min-h-screen bg-gray-100 p-6">
  <div class="max-w-6xl mx-auto bg-white rounded-lg shadow-lg overflow-hidden">
    <div class="flex h-[600px]">
      <!-- Sidebar: sessões -->
      <aside class="w-80 border-r overflow-y-auto bg-gray-50">
        <div class="p-4 border-b">
          <h2 class="font-bold text-lg">Painel de Agente</h2>
          <p class="text-sm text-gray-600">Sessões ativas</p>
          <!-- no header do painel -->
            <button id="agentToggleOnline" class="px-3 py-1 bg-gray-200 rounded">Entrar/SAIR</button>
            <span id="onlineStatus" class="ml-2 text-sm text-gray-600"></span>
        </div>
        <div id="sessionsList" class="p-2 space-y-2"></div>
      </aside>

      <!-- Chat area -->
      <main class="flex-1 flex flex-col">
        <div class="p-4 border-b flex items-center justify-between">
          <div>
            <div id="sessionTitle" class="font-semibold text-lg">Selecione uma sessão</div>
            <div id="sessionSubtitle" class="text-sm text-gray-500">Última mensagem</div>
          </div>
          <div>
            <button id="refreshSessions" class="px-3 py-1 bg-blue-600 text-white rounded">Atualizar</button>
            <button id="clearSession" class="px-3 py-1 bg-red-500 text-white rounded hidden">Limpar sessão</button>
          </div>
        </div>

        <!-- messages list -->
        <div id="agentMessages" class="flex-1 p-4 overflow-y-auto bg-gradient-to-b from-white to-gray-50">
          <div id="messagesContainer" class="flex flex-col gap-3"></div>
        </div>

        <!-- input -->
        <div class="p-4 border-t bg-white flex gap-2 items-center">
          <input id="agentMessageInput" type="text" class="flex-1 border rounded px-3 py-2" placeholder="Escreva a resposta..." />
          <button id="agentSendBtn" class="px-4 py-2 bg-green-600 text-white rounded">Enviar</button>
        </div>
      </main>
    </div>
  </div>
</div>

<!-- CSRF token -->
<meta name="csrf-token" content="{{ csrf_token() }}">

<script>
document.addEventListener('DOMContentLoaded', function () {
  const sessionsList = document.getElementById('sessionsList');
  const messagesContainer = document.getElementById('messagesContainer');
  const sessionTitle = document.getElementById('sessionTitle');
  const sessionSubtitle = document.getElementById('sessionSubtitle');
  const refreshSessions = document.getElementById('refreshSessions');
  const agentMessageInput = document.getElementById('agentMessageInput');
  const agentSendBtn = document.getElementById('agentSendBtn');
  const clearSessionBtn = document.getElementById('clearSession');

  const csrf = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

    const agentToggleOnline = document.getElementById('agentToggleOnline');
    const onlineStatus = document.getElementById('onlineStatus');

    async function loadAgentStatus() {
    // podes expor a rota /user/me ou usar a info do blade
    const res = await fetch('/agent/status'); // cria rota que retorna user.is_online
    const data = await res.json();
    onlineStatus.textContent = data.is_online ? 'Online' : 'Offline';
    }

    agentToggleOnline.addEventListener('click', async () => {
    const res = await fetch("{{ route('agent.toggleOnline') }}", {
        method: 'POST',
        headers: {'X-CSRF-TOKEN': document.querySelector('meta[name=csrf-token]').content}
    });
    const data = await res.json();
    onlineStatus.textContent = data.is_online ? 'Online' : 'Offline';
    });


  let selectedSession = null;
  let polling = null;

  // Lista sessões
  async function loadSessions() {
    try {
      const res = await fetch("{{ route('agent.sessions') }}");
      const data = await res.json();
      sessionsList.innerHTML = '';
      if (Array.isArray(data.sessions) && data.sessions.length) {
        data.sessions.forEach(s => {
          const item = document.createElement('div');
          item.className = 'p-3 bg-white rounded shadow-sm hover:bg-gray-50 cursor-pointer flex justify-between items-start';
          item.dataset.sessionId = s.session_id;

          const left = document.createElement('div');
          left.innerHTML = `<div class="font-medium truncate">${s.session_id}</div>
                            <div class="text-xs text-gray-600 truncate">${s.last_text ?? ''}</div>`;

          const right = document.createElement('div');
          right.innerHTML = `<div class="text-xs text-gray-500">${new Date(s.last_at).toLocaleString()}</div>`;

          item.appendChild(left);
          item.appendChild(right);

          item.addEventListener('click', () => openSession(s.session_id));
          sessionsList.appendChild(item);
        });
      } else {
        sessionsList.innerHTML = '<div class="p-4 text-sm text-gray-600">Nenhuma sessão encontrada.</div>';
      }
    } catch (err) {
      console.error('Erro a carregar sessões:', err);
    }
  }

  // Abre sessão - carrega mensagens e inicia polling
  async function openSession(sessionId) {
    selectedSession = sessionId;
    sessionTitle.textContent = 'Sessão: ' + sessionId;
    sessionSubtitle.textContent = 'Carregando...';
    messagesContainer.innerHTML = '';
    clearSessionBtn.classList.remove('hidden');

    // Carrega histórico desta sessão
    try {
      const res = await fetch("{{ url('/agent/session') }}/" + encodeURIComponent(sessionId));
      const data = await res.json();
      renderMessages(data.messages);
      sessionSubtitle.textContent = 'Última atualização: ' + new Date().toLocaleString();
      // start polling (atualiza mensagens desta sessão)
      startPolling();
    } catch (err) {
      console.error('Erro ao abrir sessão:', err);
    }
  }

  // Renderiza mensagens no painel do agente
  function renderMessages(messages) {
    messagesContainer.innerHTML = '';
    messages.forEach(m => {
      const wrapper = document.createElement('div');
      wrapper.className = 'flex ' + (m.sender === 'Você' ? 'justify-end' : 'justify-start');

      const bubble = document.createElement('div');
      bubble.className = 'rounded-xl p-3 max-w-[70%] whitespace-pre-wrap break-words';
      if (m.sender === 'Você') {
        bubble.classList.add('bg-blue-600','text-white');
        bubble.style.alignSelf = 'flex-end';
      } else if (m.sender === 'Bot') {
        bubble.classList.add('bg-gray-100','text-gray-800','border','border-gray-200');
      } else if (m.sender === 'Agente') {
        bubble.classList.add('bg-green-50','text-gray-800','border','border-green-100');
      } else {
        bubble.classList.add('bg-yellow-50','text-gray-800');
      }
      bubble.innerHTML = `<strong>${m.sender}:</strong> <span>${escapeHtml(m.text)}</span>`;
      wrapper.appendChild(bubble);
      messagesContainer.appendChild(wrapper);
    });
    messagesContainer.scrollTop = messagesContainer.scrollHeight;
  }

  // Enviar mensagem do agente para a sessão selecionada
  async function sendAgentMessage() {
    if (!selectedSession) return alert('Selecione uma sessão primeiro.');
    const text = agentMessageInput.value.trim();
    if (!text) return;
    agentMessageInput.value = '';
    try {
      const res = await fetch("{{ url('/agent/session') }}/" + encodeURIComponent(selectedSession) + "/send", {
        method: 'POST',
        headers: {
          'Content-Type': 'application/json',
          'X-CSRF-TOKEN': csrf
        },
        body: JSON.stringify({ message: text })
      });
      if (!res.ok) {
        console.error('Erro ao enviar mensagem (agent).', res.status);
        return;
      }
      const data = await res.json();
      renderMessages(data.messages);
    } catch (err) {
      console.error('Erro fetch send agent message', err);
    }
  }

  // polling de mensagens para a sessão selecionada (útil para ver novas mensagens do cliente)
  function startPolling() {
    stopPolling();
    polling = setInterval(async () => {
      if (!selectedSession) return;
      try {
        const res = await fetch("{{ url('/agent/session') }}/" + encodeURIComponent(selectedSession));
        const data = await res.json();
        renderMessages(data.messages);
      } catch (err) {
        console.error('Erro no polling:', err);
      }
    }, 2500);
  }
  function stopPolling() {
    if (polling) {
      clearInterval(polling);
      polling = null;
    }
  }

  // escape HTML simples
  function escapeHtml(text) {
    if (!text) return '';
    return text.replace(/&/g, '&amp;')
               .replace(/</g, '&lt;')
               .replace(/>/g, '&gt;')
               .replace(/"/g, '&quot;')
               .replace(/'/g, '&#039;');
  }

  // eventos
  refreshSessions.addEventListener('click', loadSessions);
  agentSendBtn.addEventListener('click', sendAgentMessage);
  agentMessageInput.addEventListener('keypress', e => { if (e.key === 'Enter') sendAgentMessage(); });
  clearSessionBtn.addEventListener('click', async () => {
    if (!selectedSession) return;
    if (!confirm('Limpar todas as mensagens desta sessão?')) return;
    try {
      await fetch("{{ route('chat.clear') }}", { method: 'POST', headers: { 'X-CSRF-TOKEN': csrf }});
      await loadSessions();
      messagesContainer.innerHTML = '';
      sessionTitle.textContent = 'Selecione uma sessão';
      clearSessionBtn.classList.add('hidden');
    } catch (err) {
      console.error(err);
    }
  });

  // load inicial
  loadSessions();
});
</script>
@endsection
