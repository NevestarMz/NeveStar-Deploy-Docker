import Echo from 'laravel-echo';

const sessionsList = document.getElementById('sessionsList');
const agentMessagesContainer = document.getElementById('agentMessagesContainer');
const roomTitle = document.getElementById('roomTitle');
const roomSubtitle = document.getElementById('roomSubtitle');
const agentInput = document.getElementById('agentInput');
const agentSend = document.getElementById('agentSend');
const refreshBtn = document.getElementById('refreshBtn');
const btnToggleOnline = document.getElementById('btnToggleOnline');
const onlineState = document.getElementById('onlineState');
const csrf = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

let currentSession = null;
let echo = null;
let ch = null;

function esc(t){ return t? t.replace(/[&<>"]/g,s=>({'&':'&amp;','<':'&lt;','>':'&gt;','"':'&quot;'}[s])):''; }
function pushAgentMessage(m){
  const row = document.createElement('div');
  row.style.display='flex';
  row.style.justifyContent = m.sender_type === 'agent' ? 'flex-end' : 'flex-start';
  const b = document.createElement('div');
  b.style.maxWidth='75%';
  b.style.padding='8px 12px';
  b.style.borderRadius='12px';
  b.style.background = m.sender_type === 'agent' ? '#16a34a' : '#f3f4f6';
  b.style.color = m.sender_type === 'agent'? '#fff' : '#111827';
  b.innerHTML = `<div class="text-xs text-gray-500 mb-1"><strong>${esc(m.sender_name)}</strong> <span class="ml-2 text-[11px] text-gray-400">${(new Date(m.created_at)).toLocaleTimeString()}</span></div>
                 <div>${esc(m.text)}</div>`;
  row.appendChild(b);
  agentMessagesContainer.appendChild(row);
  agentMessagesContainer.scrollTo({ top: agentMessagesContainer.scrollHeight, behavior:'smooth' });
}

async function loadSessions(){
  const res = await fetch('/agent/sessions',{headers:{'Accept':'application/json'}});
  const json = await res.json();
  sessionsList.innerHTML = '';
  json.sessions.forEach(s=>{
    const item = document.createElement('button');
    item.className = 'w-full text-left p-3 bg-white rounded shadow-sm hover:bg-gray-50';
    item.textContent = `${s.client_name || 'Cliente'} — ${s.session_key.slice(0,8)}…`;
    item.onclick = ()=> openSession(s.session_key);
    sessionsList.appendChild(item);
  });
}

async function openSession(sessionKey){
  currentSession = sessionKey;
  roomTitle.textContent = `Sessão: ${sessionKey}`;
  agentMessagesContainer.innerHTML = '';
  const res = await fetch(`/agent/open/${encodeURIComponent(sessionKey)}`);
  const json = await res.json();
  json.messages.forEach(m => pushAgentMessage(m));
  // subscribe channel
  if (!echo) {
    echo = new Echo({
      broadcaster: 'pusher',
      key: import.meta.env.VITE_REVERB_APP_KEY ?? 'reverb',
      wsHost: import.meta.env.VITE_REVERB_HOST ?? window.location.hostname,
      wsPort: import.meta.env.VITE_REVERB_PORT ?? 8080,
      forceTLS: false,
      disableStats: true,
    });
  }
  if (ch) echo.leave(ch.name);
  ch = echo.channel(`chat.${sessionKey}`);
  ch.listen('MessageSent', e => pushAgentMessage({
    sender_type: e.payload.sender_type,
    sender_name: e.payload.sender_name,
    text: e.payload.text,
    created_at: e.payload.created_at
  }));
}

agentSend.onclick = async () => {
  if (!currentSession) return alert('Selecione uma sessão');
  const text = agentInput.value.trim(); if (!text) return;
  agentInput.value = '';
  await fetch(`/chat/${encodeURIComponent(currentSession)}/send-agent`, {
    method:'POST',
    headers:{'Content-Type':'application/json','X-CSRF-TOKEN':csrf},
    body: JSON.stringify({ message: text })
  });
};

refreshBtn.onclick = loadSessions;

// Toggle online: chama rota (implemente se quiser) — aqui assumimos rota agent.toggleOnline
btnToggleOnline?.addEventListener('click', async ()=>{
  try {
    const r = await fetch('/agent/toggle-online', { method:'POST', headers:{'X-CSRF-TOKEN':csrf}});
    const d = await r.json();
    onlineState.textContent = d.is_online ? 'Online' : 'Offline';
  } catch(e){ console.error(e); }
});

loadSessions();
setInterval(loadSessions, 5000);
