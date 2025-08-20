<!-- Botão Flutuante -->
    <div class="fixed bottom-4 right-4 z-50">
        <button id="chatButton" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-4 rounded-full shadow-lg flex items-center gap-2 animate-pulse">
            <i class="fas fa-headset"></i> Ajuda
        </button>
    </div>

    <!-- Janela de Chat -->
    <div id="chatWindow" class="hidden fixed bottom-16 right-4 w-full max-w-xs sm:w-80 bg-white rounded-xl shadow-2xl border border-gray-200 flex flex-col h-[450px] sm:h-[450px] overflow-hidden">

        <!-- Cabeçalho fixo -->
        <div class="bg-blue-600 text-white px-4 py-3 flex justify-between items-center flex-shrink-0">
            <span class="truncate"><i class="fas fa-comments"></i> Chat de Suporte</span>
            <div class="flex gap-2">
                <button id="minimizeChat" class="text-white hover:text-gray-200"><i class="fas fa-minus"></i></button>
                <button id="closeChat" class="text-white hover:text-gray-200"><i class="fas fa-times"></i></button>
            </div>
        </div>

        <!-- Área de mensagens rolável -->
        <div class="flex-1 overflow-y-auto bg-gray-50" id="chatContent">

            <!-- Tela de escolha Bot ou Agente -->
            <div id="choiceScreen" class="flex flex-col gap-3 p-4">
            <p class="text-gray-700 font-semibold">Escolha como deseja ser atendido:</p>
            <button id="botButton" class="flex items-center gap-2 px-4 py-2 bg-gray-100 hover:bg-gray-200 rounded-lg transition w-full">
                <i class="fas fa-robot text-blue-600"></i> Chat com Bot
            </button>
            <button id="agentButton" class="flex items-center gap-2 px-4 py-2 bg-gray-100 hover:bg-gray-200 rounded-lg transition w-full">
                <i class="fas fa-user text-blue-600"></i> Falar com Agente
            </button>
            </div>

            <!-- Área de mensagens do chat -->
            <div id="chatScreen" class="hidden flex flex-col gap-2 p-3"></div>

        </div>

        <!-- Campo de envio fixo -->
        <div id="inputArea" class="hidden flex gap-2 p-2 border-t border-gray-300 bg-white flex-shrink-0">
            <input type="text" id="messageInput" placeholder="Digite sua mensagem..." class="flex-1 border border-gray-300 rounded-lg px-2 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 text-sm sm:text-base">
            <button id="sendButton" class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition text-sm sm:text-base">Enviar</button>
        </div>

    </div>
    @include('layouts.chatScript')