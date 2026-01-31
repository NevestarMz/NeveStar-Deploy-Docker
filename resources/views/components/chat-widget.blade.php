<!-- components/chat-widget.blade.php -->
<div id="chat-root" class="z-[9999]" aria-hidden="false">
  <div class="fixed bottom-4 right-4 z-[9999]">
    <button id="chatButton" class="bg-blue-600 hover:bg-blue-700 text-white font-semibold py-3 px-4 rounded-full shadow-lg flex items-center gap-2">
      <i class="fas fa-headset"></i> Ajuda
    </button>
  </div>

  <div id="chatWindow" class="hidden z-[9999] fixed bottom-16 right-4 w-full max-w-xs sm:w-96 bg-white rounded-xl shadow-2xl border border-gray-200 flex flex-col h-[470px] overflow-hidden">
    <div class="bg-gradient-to-r from-blue-600 to-indigo-600 text-white px-4 py-3 flex items-center justify-between flex-shrink-0">
      <div class="flex items-center gap-3">
        <div class="w-9 h-9 rounded-full bg-white/10 flex items-center justify-center">
          <i class="fas fa-comments"></i>
        </div>
        <div>
          <div class="font-semibold">Suporte NeveStar</div>
          <div class="text-xs opacity-80">Estamos aqui para ajudar</div>
        </div>
      </div>
      <div class="flex items-center gap-2">
        <button id="minimizeChat" class="p-1 hover:bg-white/10 rounded"><i class="fas fa-minus"></i></button>
        <button id="closeChat" class="p-1 hover:bg-white/10 rounded"><i class="fas fa-times"></i></button>
      </div>
    </div>

    <div id="chatContent" class="flex-1 overflow-y-auto p-4 bg-gray-50">
      <div id="chatScreen" class="flex flex-col gap-3"></div>
    </div>

    <div class="p-3 border-t bg-white flex gap-2">
      <input id="messageInput" type="text" placeholder="Escreva uma mensagem..." class="flex-1 border rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-blue-500" />
      <button id="sendButton" class="bg-blue-600 text-white px-4 py-2 rounded-lg">Enviar</button>
    </div>
  </div>
</div>

<script>
  document.addEventListener('DOMContentLoaded', function () {
    const chatButton = document.getElementById('chatButton');
    const chatWindow = document.getElementById('chatWindow');
    const closeChat = document.getElementById('closeChat');
    const minimizeChat = document.getElementById('minimizeChat');
    const chatScreen = document.getElementById('chatScreen');
    const chatContent = document.getElementById('chatContent');
    const messageInput = document.getElementById('messageInput');
    const sendButton = document.getElementById('sendButton');

    const csrf = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

    let mode = null;
    let pollingInterval = null;

    chatButton.addEventListener('click', () => {
      chatWindow.classList.toggle('hidden');
      if (!chatWindow.classList.contains('hidden')) {
        loadState();
        messageInput.focus();
      } else {
        stopPolling();
      }
    });

    closeChat.addEventListener('click', () => { chatWindow.classList.add('hidden'); stopPolling(); });
    minimizeChat.addEventListener('click', () => { chatWindow.classList.toggle('hidden'); if (chatWindow.classList.contains('hidden')) stopPolling(); else loadState(); });

    sendButton.addEventListener('click', sendMessage);
    messageInput.addEventListener('keypress', e => { if (e.key === 'Enter') sendMessage(); });

    async function loadState() {
      try {
        const resMode = await fetch("{{ route('chat.mode') }}");
        const modeJson = await resMode.json();
        mode = modeJson.mode;

        await refreshMessages();

        if (!mode) {
          showStartOptions();
          messageInput.disabled = true;
          sendButton.disabled = true;
        } else {
          hideStartOptions();
          messageInput.disabled = false;
          sendButton.disabled = false;
          startPolling();
        }
      } catch (err) {
        console.error('Erro ao carregar estado do chat', err);
      }
    }

    function pushMessageToDOM(sender, text) {
      const wrapper = document.createElement('div');
      wrapper.className = 'flex';
      wrapper.style.justifyContent = (sender === 'Você') ? 'flex-end' : 'flex-start';

      const bubble = document.createElement('div');
      bubble.className = 'rounded-2xl shadow px-4 py-2 max-w-[80%] whitespace-pre-wrap break-words';

      if (sender === 'Você') {
        bubble.classList.add('bg-blue-600', 'text-white');
      } else if (sender === 'Bot') {
        bubble.classList.add('bg-white', 'text-gray-800', 'border', 'border-gray-200');
      } else if (sender === 'Agente') {
        bubble.classList.add('bg-green-50', 'text-gray-800', 'border', 'border-green-100');
      } else {
        bubble.classList.add('bg-yellow-50', 'text-gray-800', 'border', 'border-yellow-100');
      }

      const strong = document.createElement('strong');
      strong.textContent = sender + ': ';
      bubble.appendChild(strong);

      const span = document.createElement('span');
      span.textContent = text;
      bubble.appendChild(span);

      wrapper.appendChild(bubble);
      chatScreen.appendChild(wrapper);
      chatContent.scrollTop = chatContent.scrollHeight;
    }

    function renderMessages(messages) {
      // mantém a existência do startOptions se necessário
      // limpar apenas as mensagens anteriores (mantém startOptionsBox separada)
      const existingStart = document.getElementById('startOptionsBox');
      // remove tudo do chatScreen
      chatScreen.innerHTML = '';

      // renderiza mensagens vindas do servidor
      messages.forEach(m => {
          pushMessageToDOM(m.sender, m.text);
      });

      // se não tiver modo, mostra os botões; se tiver, remove-os
      if (!mode) {
          showStartOptions();
          messageInput.disabled = true;
          sendButton.disabled = true;
      } else {
          // garante que a tela de escolha não esteja visível quando modo definido
          hideStartOptions();
          messageInput.disabled = false;
          sendButton.disabled = false;
      }

      chatContent.scrollTop = chatContent.scrollHeight;
      }


      function showStartOptions() {
      if (document.getElementById('startOptionsBox')) return; // já existe
      const box = document.createElement('div');
      box.id = 'startOptionsBox';
      box.className = 'flex flex-col items-center gap-3 py-6';

      const title = document.createElement('div');
      title.className = 'text-gray-700 font-semibold';
      title.textContent = 'Como deseja ser atendido?';
      box.appendChild(title);

      const row = document.createElement('div');
      row.className = 'flex gap-3';

      const botBtn = document.createElement('button');
      botBtn.className = 'px-4 py-2 bg-blue-600 text-white rounded-lg shadow';
      botBtn.textContent = '🤖 Bot';
      botBtn.addEventListener('click', () => chooseMode('bot'));
      row.appendChild(botBtn);

      const agBtn = document.createElement('button');
      agBtn.className = 'px-4 py-2 bg-green-600 text-white rounded-lg shadow';
      agBtn.textContent = '👩‍💼 Agente';
      agBtn.addEventListener('click', () => chooseMode('agente'));
      row.appendChild(agBtn);

      box.appendChild(row);
      chatScreen.appendChild(box);
      chatContent.scrollTop = chatContent.scrollHeight;
      }


    function hideStartOptions() {
      const box = document.getElementById('startOptionsBox');
      if (box) box.remove();
    }

    async function chooseMode(selected) {
      try {
        const res = await fetch("{{ route('chat.choose') }}", {
          method: 'POST',
          headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': csrf,
            'Accept': 'application/json'
          },
          body: JSON.stringify({ mode: selected })
        });
        if (!res.ok) throw new Error('Erro na escolha de modo');
        const data = await res.json();
        mode = selected;
        hideStartOptions();
        renderMessages(data.messages);
        messageInput.disabled = false;
        sendButton.disabled = false;
        startPolling();
        messageInput.focus();
      } catch (err) {
        console.error(err);
      }
    }

    async function sendMessage() {
      const text = messageInput.value.trim();
      if (!text) return;
      messageInput.value = '';
      pushMessageToDOM('Você', text);

      try {
        const res = await fetch("{{ route('chat.send') }}", {
          method: 'POST',
          headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': csrf,
            'Accept': 'application/json'
          },
          body: JSON.stringify({ message: text })
        });

        if (!res.ok) {
          console.error('Erro no envio', res.status);
          return;
        }

        const data = await res.json();
        renderMessages(data.messages);
      } catch (err) {
        console.error('Erro fetch sendMessage', err);
      }
    }

    async function refreshMessages() {
      try {
        const res = await fetch("{{ route('chat.messages') }}");
        if (!res.ok) throw new Error('Erro ao obter mensagens');
        const data = await res.json();
        renderMessages(data.messages);
        return data.messages;
      } catch (err) {
        console.error(err);
        return [];
      }
    }

    function startPolling() {
      stopPolling();
      pollingInterval = setInterval(async () => {
        await refreshMessages();
      }, 3000);
    }

    function stopPolling() {
      if (pollingInterval) {
        clearInterval(pollingInterval);
        pollingInterval = null;
      }
    }

    (async () => {
      await loadState();
      const resMode = await fetch("{{ route('chat.mode') }}");
      const m = await resMode.json();
      if (!m.mode) {
        showStartOptions();
        messageInput.disabled = true;
        sendButton.disabled = true;
      }
    })();

    async function loadState() {
      try {
        const resMode = await fetch("{{ route('chat.mode') }}");
        const modeJson = await resMode.json();
        mode = modeJson.mode;
        await refreshMessages();
        if (mode) {
          hideStartOptions();
          messageInput.disabled = false;
          sendButton.disabled = false;
          startPolling();
        }
      } catch (err) {
        console.error('Erro ao carregar estado', err);
      }
    }
  });
</script>
