    <!-- Service Modal -->
    <div id="service-modal" class="modal fixed inset-0 bg-black bg-opacity-50 items-center justify-center p-4">
        <div class="bg-white rounded-lg shadow-xl w-full max-w-md">
            <div class="p-4 border-b flex justify-between items-center">
                <h3 class="text-lg font-semibold text-gray-800" id="service-modal-title">Adicionar Serviço</h3>
                <button onclick="closeModal('service-modal')" class="text-gray-500 hover:text-gray-800">&times;</button>
            </div>
            <div class="p-6">
                <form onsubmit="handleServiceSubmit(event)">
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="service-input-title">Título</label>
                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="service-input-title" type="text" placeholder="Ex: Desenvolvimento Web" required>
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="service-input-icon">Ícone (Nome FontAwesome, ex: fa-mobile-alt)</label>
                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="service-input-icon" type="text" placeholder="Ex: mobile-alt" required>
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="service-input-description">Descrição</label>
                        <textarea class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline h-32" id="service-input-description" placeholder="Descreva o serviço..." required></textarea>
                    </div>
                    <div class="flex items-center justify-between">
                        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-lg focus:outline-none focus:shadow-outline">Salvar</button>
                        <button type="button" onclick="closeModal('service-modal')" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded-lg focus:outline-none focus:shadow-outline">Cancelar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>