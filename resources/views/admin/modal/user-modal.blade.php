    <!-- User-Admin Modal -->
    <div id="user-modal" class="modal fixed inset-0 bg-black bg-opacity-50 items-center justify-center p-4">
        <div class="bg-white rounded-lg shadow-xl w-full max-w-md">
            <div class="p-4 border-b flex justify-between items-center">
                <h3 class="text-lg font-semibold text-gray-800" id="user-modal-title">Adicionar Admin</h3>
                <button onclick="closeModal('user-modal')" class="text-gray-500 hover:text-gray-800">&times;</button>
            </div>
            <div class="p-6">
                <form onsubmit="handleUserSubmit(event)">
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="user-input-name">Nome</label>
                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="user-input-name" type="text" placeholder="Nome do Admin" required>
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="user-input-email">Email</label>
                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="user-input-email" type="email" placeholder="email@exemplo.com" required>
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="user-input-password">Senha (apenas para adicionar)</label>
                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="user-input-password" type="password" placeholder="********">
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="user-input-role">Nível de Acesso</label>
                        <select class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="user-input-role" required>
                            <option value="">Selecione um nível</option>
                            <option value="Super-Admin">Super-Admin</option>
                            <option value="Admin">Admin</option>
                            <option value="Editor">Editor</option>
                        </select>
                    </div>
                    <div class="flex items-center justify-between">
                        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-lg focus:outline-none focus:shadow-outline">Salvar</button>
                        <button type="button" onclick="closeModal('user-modal')" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded-lg focus:outline-none focus:shadow-outline">Cancelar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>