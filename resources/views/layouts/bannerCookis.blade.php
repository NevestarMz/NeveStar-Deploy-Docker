<!-- Cookie Banner – NeveStar -->
<div id="cookie-banner" class="hidden fixed bottom-6 left-1/2 -translate-x-1/2 bg-blue-600 text-white shadow-xl rounded-3xl w-11/12 lg:max-w-lvw max-w-2xl overflow-hidden z-50">
        <div class="flex flex-col items-center p-6">
           
            <!-- Texto -->
            <div class="flex-1 text-center">
                <h2 class="text-2xl font-semibold mb-1">🍪 Utilizamos Cookies</h2>
                <p class="text-blue-100 text-sm lg:text-base leading-relaxed">
                    Na <span class="font-bold">NeveStar</span>, utilizamos cookies para melhorar a experiência, analisar tráfego e personalizar conteúdo.
                    Pode aceitar todos ou personalizar. <a href="{{ route('legal.cookies') }}" class="underline text-yellow-300 hover:text-yellow-200 transition">Política de Cookies</a>
                </p>
                <div class="mt-2 text-xs lg:mb-4">
                    <a href="{{ route('privacidade') }}" class="underline text-yellow-300 hover:text-yellow-200 transition">Política de Privacidade</a> •
                    <a href="{{ route('termos') }}" class="underline text-yellow-300 hover:text-yellow-200 transition">Termos de Utilização</a>
                </div>
            </div>

            <!-- Botões -->
            <div class="flex flex-col sm:flex-row gap-3 mt-4 lg:mt-0">
                <button id="nv-accept-some"
                        class="bg-yellow-200 text-blue-900 px-6 py-3 lg:px-4 rounded-full font-semibold hover:bg-yellow-300 transition">
                    Aceitar Alguns
                </button>
                <button id="nv-accept-all"
                        class="bg-yellow-400 text-blue-900 px-6 py-3 lg:px-4 rounded-full font-semibold hover:bg-yellow-300 transition">
                    Aceitar Todos 
                </button>
                <button id="nv-adjust"
                        class="bg-blue-800 text-white px-6 py-3 lg:px-4 rounded-full font-semibold hover:bg-blue-900 transition">
                    Ajustar Preferências 
                </button>
            </div>
        </div>

        <!-- Preferências -->
        <div id="nv-cookie-settings" class="bg-blue-700 px-6 py-4 hidden border-t border-blue-500">
            <h3 class="font-semibold text-white mb-2">Escolha as preferências:</h3>

            <label class="flex items-center mb-2">
                <input type="checkbox" checked disabled class="mr-2"> Necessários (sempre ativos)
            </label>

            <label class="flex items-center mb-2">
                <input type="checkbox" id="nv-analytics" class="mr-2"> Analíticos
            </label>

            <label class="flex items-center mb-2">
                <input type="checkbox" id="nv-functional" class="mr-2"> Funcionais
            </label>

            <label class="flex items-center mb-2">
                <input type="checkbox" id="nv-marketing" class="mr-2"> Marketing
            </label>

            <button id="nv-save-preferences" class="bg-green-500 text-white px-6 py-3 rounded-full font-semibold hover:bg-green-400 mt-2 transition">Salvar Preferências</button>
            <button id="nv-cancel-preferences" class="bg-gray-300 text-white px-6 py-3 rounded-full font-semibold hover:bg-gray-400 mt-2 transition">Cancelar Preferências</button>
        </div>
    </div>