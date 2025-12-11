<div id="chat-root" class="fixed bottom-4 right-4 z-50">
  <button id="chatButton" aria-expanded="false" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-3 rounded-full shadow-lg flex items-center gap-2">
    <i class="fa-solid fa-headset"></i> Ajuda
  </button>

  <div id="chatWindow" class="hidden fixed bottom-20 right-4 w-full max-w-xs sm:w-96 bg-white rounded-xl shadow-2xl border border-gray-200 flex flex-col h-[520px] overflow-hidden">
    <div class="bg-gradient-to-r from-blue-600 to-indigo-600 text-white px-4 py-3 flex items-center justify-between">
      <div>
        <div class="font-semibold">Suporte NeveStar</div>
        <div id="agentStatus" class="text-xs opacity-80">Conectando...</div>
      </div>
      <div class="flex items-center gap-2">
        <button id="minimizeChat" class="p-1 hover:bg-white/10 rounded"><i class="fa-solid fa-minus"></i></button>
        <button id="closeChat" class="p-1 hover:bg-white/10 rounded"><i class="fa-solid fa-xmark"></i></button>
      </div>
    </div>

    <div id="chatContent" class="flex-1 overflow-y-auto p-4 bg-gray-50">
      <div id="chatScreen" class="flex flex-col gap-2"></div>
    </div>

    <div class="p-3 border-t bg-white flex gap-2">
      <input id="messageInput" type="text" placeholder="Escreva uma mensagem..." class="flex-1 border rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" />
      <button id="sendButton" class="bg-blue-600 text-white px-4 py-2 rounded-lg">Enviar</button>
    </div>
  </div>
</div>

<meta name="csrf-token" content="{{ csrf_token() }}">
<script>
  window.Laravel = {
    csrfToken: document.querySelector('meta[name="csrf-token"]').getAttribute('content')
  };
</script>

