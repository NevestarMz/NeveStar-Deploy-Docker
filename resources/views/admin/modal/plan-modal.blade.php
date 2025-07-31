    <!-- Plan Modal -->
    <div id="plan-modal" class="modal fixed inset-0 bg-black bg-opacity-50 items-center justify-center p-4">
        <div class="bg-white rounded-lg shadow-xl w-full max-w-md">
            <div class="p-4 border-b flex justify-between items-center">
                <h3 class="text-lg font-semibold text-gray-800" id="plan-modal-title">Adicionar Plano</h3>
                <button onclick="closeModal('plan-modal')" class="text-gray-500 hover:text-gray-800">&times;</button>
            </div>
            <div class="p-6">
                <form onsubmit="handlePlanSubmit(event)">
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="plan-input-title">Título do Plano</label>
                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="plan-input-title" type="text" placeholder="Ex: Sites Básicos" required>
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="plan-input-price">Preço</label>
                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="plan-input-price" type="text" placeholder="Ex: 7.000,00 MZN" required>
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="plan-input-features">Características (separadas por vírgula)</label>
                        <textarea class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline h-32" id="plan-input-features" placeholder="Característica 1, Característica 2..." required></textarea>
                    </div>
                    <div class="flex items-center justify-between">
                        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-lg focus:outline-none focus:shadow-outline">Salvar</button>
                        <button type="button" onclick="closeModal('plan-modal')" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded-lg focus:outline-none focus:shadow-outline">Cancelar</button>
                    </div>
                </form>
            </div>
        </div>
    </div> 