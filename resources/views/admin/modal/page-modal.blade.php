    <!-- Page Edit Modal -->
    <div id="page-modal" class="modal fixed inset-0 bg-black bg-opacity-50 items-center justify-center p-4">
        <div class="bg-white rounded-lg shadow-xl w-full max-w-2xl">
            <div class="p-4 border-b flex justify-between items-center">
                <h3 class="text-lg font-semibold text-gray-800" id="page-modal-title">Editar Conteúdo da Página</h3>
                <button onclick="closeModal('page-modal')" class="text-gray-500 hover:text-gray-800">&times;</button>
            </div>
            <div class="p-6">
                <form onsubmit="handlePageContentSubmit(event)">
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="page-input-title">Título da Página</label>
                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="page-input-title" type="text" readonly>
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="page-input-content">Conteúdo da Página</label>
                        <textarea class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline h-64" id="page-input-content" placeholder="Insira o conteúdo HTML da página aqui..."></textarea>
                    </div>
                    <div class="flex items-center justify-between">
                        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-lg focus:outline-none focus:shadow-outline">Salvar</button>
                        <button type="button" onclick="closeModal('page-modal')" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded-lg focus:outline-none focus:shadow-outline">Cancelar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>