<!-- Modal para o Formulário -->
    <div id="serviceModal" class="modal overflow-y-auto bg-gray-900 bg-opacity-75">
        <div class="modal-content bg-gradient-to-br from-indigo-50 to-white">
            <button type="button" class="close-button" aria-label="Fechar formulário">&times;</button>
            <h1 class="text-2xl font-bold text-center text-gray-800 mb-2">Formulário de Solicitação do Serviço</h1>
            <p class="text-center text-gray-500 mb-6">Preencha seus dados para enviar o pedido.</p>
            
            <form id="serviceForm" class="space-y-6">
                <!-- Campos de dados pessoais -->
                <div>
                    <label for="clientName" class="block text-sm font-medium text-gray-700 mb-1">Nome Completo</label>
                    <div class="relative mt-1 rounded-md shadow-sm">
                        <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                            <i class="fas fa-user text-gray-400"></i>
                        </div>
                        <input type="text" id="clientName" name="clientName" placeholder="Nome Completo" required 
                           class="block w-full rounded-md leading-5 border-gray-300 pl-10 pr-2 py-2 border focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                    </div>
                </div>
                <div>
                    <label for="clientEmail" class="block text-sm font-medium text-gray-700 mb-1">E-mail</label>
                    <div class="relative mt-1 rounded-md shadow-sm">
                        <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                            <i class="fas fa-envelope text-gray-400"></i>
                        </div>
                        <input type="email" id="clientEmail" name="clientEmail" placeholder="seu.email@exemplo.com" required 
                           class="block w-full rounded-md border-gray-300 pl-10 pr-2 py-2 border focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                    </div>
                </div>
                <div>
                    <label for="clientPhone" class="block text-sm font-medium text-gray-700 mb-1">Telefone</label>
                    <div class="relative mt-1 rounded-md shadow-sm">
                        <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                             <i class="fas fa-phone text-gray-400"></i>
                        </div>
                        <input type="tel" id="clientPhone" name="clientPhone" required 
                               class="block w-full rounded-md border-gray-300 pl-10 pr-2 py-2 border focus:ring-blue-500 focus:border-blue-500 sm:text-sm"
                               placeholder="8x xxx xxxx">
                    </div>
                </div>

                <!-- Campo de cupão com validação -->
                 <div>
                    <label for="couponCode" class="block text-sm font-medium text-gray-700 mb-1">Código de Cupom (opcional)</label>
                    <div class="flex">
                        <input type="text" id="couponCode" name="couponCode" placeholder="Insira seu código"
                            class="flex-1 block w-full rounded-l-md border border-gray-300 text-gray-900 focus:outline-none focus:ring-blue-500 focus:border-blue-500 px-3 py-2 sm:text-sm transition duration-150 ease-in-out">
                        <button type="button" id="applyCouponBtn" class="px-4 py-2 bg-blue-600 text-white rounded-r-md hover:bg-blue-700 focus:outline-none transition duration-150 ease-in-out">
                            Aplicar
                        </button>
                    </div>
                    <span id="couponStatus" class="mt-1 text-xs"></span>
                 </div>
                <!-- Novo campo de comentário -->
                <div>
                    <label for="comment" class="block text-sm font-medium text-gray-700 mb-1">Descrição (opcional)</label>
                    <textarea id="comment" name="comment" rows="4" placeholder="Descreva a descrição do seu serviço aqui..."
                              class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm"></textarea>
                </div>

                <!--  -->
                <div class="bg-blue-50 border-l-4 border-blue-400 p-4 rounded-md">
                    <div class="flex items-center">
                        <i class="fas fa-info-circle text-blue-500 mr-2"></i>
                        <p class="text-sm text-blue-700">O preço é apenas um orçamento inicial. O valor final tem um imposto aplicado.</p>
                    </div>
                </div>

                <!-- Campos ocultos para o serviço e preço -->
                <input type="hidden" id="serviceName" name="serviceName">
                <input type="hidden" id="price" name="price">

                <!-- Inventário do Serviço -->
                <div id="summary" class="bg-gray-50 p-4 rounded-lg shadow-inner mt-4">
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">Inventário do Serviço</h3>
                    <div class="space-y-2 text-gray-600">
                        <p class="flex justify-between items-center font-semibold text-gray-800"><strong>Serviço:</strong> <span id="summaryServiceName"></span></p>
                        <p class="flex justify-between items-center font-semibold text-gray-800 mt-1"><strong>Preço Base:</strong> <span class="flex justify-end"><span id="summaryPrice" class="px-1"></span> MZN</span></p>
                        <p class="flex justify-between items-center font-semibold text-gray-800 mt-1"><strong>IVA (16%):</strong> <span class="flex justify-end"><span id="summaryIVA" class="px-1"></span> MZN</span></p>
                        <p id="discountSummary" class="hidden flex justify-between items-center font-semibold text-gray-800"><strong>Desconto:</strong> <span class="flex justify-end"><span id="summaryDiscount" class="px-1"></span> MZN</span></p>
                        <div class="border-t border-gray-300 my-2"></div>
                        <p class="flex justify-between items-center font-bold text-lg text-blue-600">Preço Total: <span class="flex justify-end"><span id="summaryTotalPrice" class="px-1"></span> MZN</span></p>
                    </div>
                </div>

                <!-- Mensagem de status após o pedido -->
                <div id="statusMessage" class="mt-4 p-3 rounded-md hidden"></div>

                <button type="submit" 
                        class="w-full flex justify-center py-3 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                    Enviar Pedido
                </button>
            </form>
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const openModalButtons = document.querySelectorAll('.open-modal-btn');
            const serviceModal = document.getElementById('serviceModal');
            const closeButton = document.querySelector('.close-button');
            const serviceForm = document.getElementById('serviceForm');
            const serviceNameInput = document.getElementById('serviceName');
            const priceInput = document.getElementById('price');
            const summary = document.getElementById('summary');
            const summaryServiceName = document.getElementById('summaryServiceName');
            const summaryPrice = document.getElementById('summaryPrice');
            const discountSummary = document.getElementById('discountSummary');
            const summaryDiscount = document.getElementById('summaryDiscount');
            const summaryIVA = document.getElementById('summaryIVA');
            const summaryTotalPrice = document.getElementById('summaryTotalPrice');
            const clientNameInput = document.getElementById('clientName');
            const clientEmailInput = document.getElementById('clientEmail');
            const clientPhoneInput = document.getElementById('clientPhone');
            const couponCodeInput = document.getElementById('couponCode');
            const couponStatus = document.getElementById('couponStatus');
            const commentInput = document.getElementById('comment');
            const statusMessage = document.getElementById('statusMessage');

            // Mapa de cupons de exemplo
            const coupons = {
                'NEVE10': 0.10, // 10% de desconto
                'NEVE15': 0.15,
                'PROMO20': 0.20 // 20% de desconto
            };

            // Função para fechar a modal e resetar o formulário
            const closeModalAndResetForm = () => {
                serviceModal.style.display = 'none';
                serviceForm.reset();
                summary.classList.add('hidden');
                statusMessage.classList.add('hidden');
                couponStatus.innerText = ''; // Limpa a mensagem de status do cupão
            };

            // Função para calcular e exibir o resumo
            const updateSummary = () => {
                const serviceName = serviceNameInput.value;
                const basePrice = parseFloat(priceInput.value);
                const couponCode = couponCodeInput.value.toUpperCase();
                
                let discountRate = 0;
                let totalPrice = basePrice;
                
                // Primeiro, adicione o IVA ao preço base
                const ivaRate = 0.16;
                const ivaAmount = basePrice * ivaRate;
                totalPrice = basePrice + ivaAmount;

                // Em seguida, aplique o desconto do cupom ao preço total
                if (couponCode.length > 0) {
                    if (coupons[couponCode]) {
                        discountRate = coupons[couponCode];
                        const discountAmount = totalPrice * discountRate;
                        totalPrice = totalPrice - discountAmount;
                        discountSummary.classList.remove('hidden');
                        summaryDiscount.innerText = discountAmount.toFixed(2);
                        couponStatus.innerText = 'Código de cupão válido!';
                        couponStatus.className = 'mt-1 text-xs text-green-600 font-medium';
                    } else {
                        discountSummary.classList.add('hidden');
                        summaryDiscount.innerText = '0.00';
                        couponStatus.innerText = 'Código de cupão inválido.';
                        couponStatus.className = 'mt-1 text-xs text-red-600 font-medium';
                    }
                } else {
                    discountSummary.classList.add('hidden');
                    summaryDiscount.innerText = '0.00';
                    couponStatus.innerText = '';
                }

                summaryServiceName.innerText = serviceName;
                summaryPrice.innerText = basePrice.toFixed(2);
                summaryIVA.innerText = ivaAmount.toFixed(2);
                summaryTotalPrice.innerText = totalPrice.toFixed(2);
            };

            // Abrir a modal ao clicar no botão de serviço
            openModalButtons.forEach(button => {
                button.addEventListener('click', () => {
                    const serviceName = button.getAttribute('data-service-name');
                    const servicePrice = parseFloat(button.getAttribute('data-service-price'));

                    serviceNameInput.value = serviceName;
                    priceInput.value = servicePrice;
                    couponCodeInput.value = ''; // Resetar o campo de cupão
                    
                    updateSummary();
                    summary.classList.remove('hidden');
                    serviceModal.style.display = 'flex';
                });
            });

            // Atualizar o resumo ao digitar no campo de cupão
            couponCodeInput.addEventListener('input', updateSummary);

            // Fechar a modal ao clicar no botão de fechar
            closeButton.addEventListener('click', closeModalAndResetForm);

            // Lidar com o envio do formulário (agora apenas simula o envio)
            serviceForm.addEventListener('submit', async function(event) {
                event.preventDefault();

                statusMessage.innerText = 'Enviando pedido...';
                statusMessage.classList.remove('hidden', 'bg-red-100', 'text-red-700', 'bg-green-100', 'text-green-700');
                statusMessage.classList.add('bg-blue-100', 'text-blue-700');

                // Validação do número de telefone
                const phoneDigits = clientPhoneInput.value.replace(/\D/g, '');
                if (phoneDigits.length !== 9 || phoneDigits.charAt(0) !== '8') {
                    statusMessage.innerText = 'Por favor, insira um número de telefone válido (9 dígitos começando com 8).';
                    statusMessage.classList.remove('hidden', 'bg-green-100', 'text-green-700', 'bg-blue-100', 'text-blue-700');
                    statusMessage.classList.add('bg-red-100', 'text-red-700');
                    return;
                }

                // Simulação de envio bem-sucedido
                setTimeout(() => {
                    statusMessage.innerText = 'Pedido simulado enviado com sucesso!';
                    statusMessage.classList.remove('hidden', 'bg-blue-100', 'text-blue-700', 'bg-red-100', 'text-red-700');
                    statusMessage.classList.add('bg-green-100', 'text-green-700');
                    serviceForm.reset();
                    summary.classList.add('hidden');
                }, 1500); // 1.5 segundos para simular o carregamento
            });
        });
    </script>