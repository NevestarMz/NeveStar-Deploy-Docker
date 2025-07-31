@extends('admin.layout.layout')
@section('content')

<!-- Main content -->
<div class="flex-1 flex flex-col overflow-hidden">
    <!-- Header -->
    @include('admin.layout.header')
    
    <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-100 p-6 text-gray-800">

        <div id="dashboard" class="page-content active">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="bg-white p-6 rounded-lg shadow-md flex items-center justify-between">
                    <div>
                        <p class="text-sm font-medium text-gray-500">Serviços</p>
                        <p class="text-3xl font-bold">4</p>
                    </div>
                    <div class="bg-blue-100 text-blue-500 p-3 rounded-full">
                        <i class="fas fa-cogs fa-2x"></i>
                    </div>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md flex items-center justify-between">
                    <div>
                        <p class="text-sm font-medium text-gray-500">Planos</p>
                        <p class="text-3xl font-bold">4</p>
                    </div>
                    <div class="bg-green-100 text-green-500 p-3 rounded-full">
                        <i class="fas fa-file-invoice-dollar fa-2x"></i>
                    </div>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md flex items-center justify-between">
                    <div>
                        <p class="text-sm font-medium text-gray-500">Páginas</p>
                        <p class="text-3xl font-bold">4</p>
                    </div>
                    <div class="bg-yellow-100 text-yellow-500 p-3 rounded-full">
                        <i class="fas fa-file-alt fa-2x"></i>
                    </div>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md flex items-center justify-between">
                    <div>
                        <p class="text-sm font-medium text-gray-500">Admins</p>
                        <p class="text-3xl font-bold">2</p>
                    </div>
                    <div class="bg-red-100 text-red-500 p-3 rounded-full">
                        <i class="fas fa-users-cog fa-2x"></i>
                    </div>
                </div>
            </div>
            <div class="mt-8 bg-white p-6 rounded-lg shadow-md">
                <h2 class="text-xl font-semibold mb-4">Bem-vindo ao Painel NeveStar!</h2>
                <p>Use o menu à esquerda para gerir todo o conteúdo da sua plataforma. Pode adicionar, editar e eliminar informações de forma fácil e intuitiva.</p>
            </div>
        </div>

        <!-- Services -->
        <div id="services" class="page-content">
            <div class="flex justify-end mb-4">
                <button onclick="openModal('service-modal')" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-lg flex items-center"><i class="fas fa-plus mr-2"></i> Adicionar Serviço</button>
            </div>
            <div class="bg-white shadow-md rounded-lg overflow-x-auto">
                <table class="min-w-full leading-normal">
                    <thead>
                        <tr>
                            <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-50 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Ícone</th>
                            <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-50 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Título</th>
                            <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-50 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Descrição</th>
                            <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-50 text-right text-xs font-semibold text-gray-600 uppercase tracking-wider">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm"><i class="fas fa-mobile-alt fa-2x text-blue-500"></i></td>
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm"><p class="text-gray-900 whitespace-no-wrap">Desenvolvimento Mobile</p></td>
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm"><p class="text-gray-900 whitespace-no-wrap">Criamos aplicações nativas e híbridas...</p></td>
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm text-right">
                                <button onclick="openModal('service-modal', 'edit', {icon: 'mobile-alt', title: 'Desenvolvimento Mobile', description: 'Criamos aplicações nativas e híbridas...'})" class="text-indigo-600 hover:text-indigo-900"><i class="fas fa-edit"></i></button>
                                <button onclick="alert('Funcionalidade de exclusão de serviço')" class="text-red-600 hover:text-red-900 ml-4"><i class="fas fa-trash"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm"><i class="fas fa-laptop-code fa-2x text-green-500"></i></td>
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm"><p class="text-gray-900 whitespace-no-wrap">Desenvolvimento Web</p></td>
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm"><p class="text-gray-900 whitespace-no-wrap">Construímos websites dinâmicos, e-commerce...</p></td>
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm text-right">
                                <button onclick="openModal('service-modal', 'edit', {icon: 'laptop-code', title: 'Desenvolvimento Web', description: 'Construímos websites dinâmicos, e-commerce...'})" class="text-indigo-600 hover:text-indigo-900"><i class="fas fa-unlock"></i></button>
                                <button onclick="openModal('service-modal', 'edit', {icon: 'laptop-code', title: 'Desenvolvimento Web', description: 'Construímos websites dinâmicos, e-commerce...'})" class="text-indigo-600 hover:text-indigo-900 ml-2"><i class="fas fa-edit"></i></button>
                                <button onclick="alert('Funcionalidade de exclusão de serviço')" class="text-red-600 hover:text-red-900 ml-2"><i class="fas fa-trash"></i></button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Plans -->
        <div id="plans" class="page-content">
            <div class="flex justify-end mb-4">
                <button onclick="openModal('plan-modal')" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-lg flex items-center"><i class="fas fa-plus mr-2"></i> Adicionar Plano</button>
            </div>
            <div class="bg-white shadow-md rounded-lg overflow-x-auto">
                <table class="min-w-full leading-normal">
                    <thead>
                        <tr>
                            <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-50 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Título</th>
                            <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-50 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Preço</th>
                            <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-50 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Características</th>
                            <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-50 text-right text-xs font-semibold text-gray-600 uppercase tracking-wider">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm"><p>Sites Básicos</p></td>
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm"><p>7.000,00 MZN</p></td>
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm"><p>Design Responsivo, Páginas Essenciais...</p></td>
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm text-right">
                                <button onclick="openModal('plan-modal', 'edit', {title: 'Sites Básicos', price: '7.000,00 MZN', features: 'Design Responsivo, Páginas Essenciais...'})" class="text-indigo-600 hover:text-indigo-900"><i class="fas fa-edit"></i></button>
                                <button onclick="alert('Funcionalidade de exclusão de plano')" class="text-red-600 hover:text-red-900 ml-4"><i class="fas fa-trash"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm"><p>Sites Normais</p></td>
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm"><p>10.000,00 MZN</p></td>
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm"><p>Tudo do Plano Básico, Galeria...</p></td>
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm text-right">
                                <button onclick="openModal('plan-modal', 'edit', {title: 'Sites Normais', price: '10.000,00 MZN', features: 'Tudo do Plano Básico, Galeria...'})" class="text-indigo-600 hover:text-indigo-900"><i class="fas fa-edit"></i></button>
                                <button onclick="alert('Funcionalidade de exclusão de plano')" class="text-red-600 hover:text-red-900 ml-4"><i class="fas fa-trash"></i></button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        
        <!-- Why Choose-us -->
        <div id="why-choose-us" class="page-content">
            <div class="flex justify-end mb-4">
                <button onclick="openModal('why-choose-us-modal')" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-lg flex items-center"><i class="fas fa-plus mr-2"></i> Adicionar Item</button>
            </div>
            <div class="bg-white shadow-md rounded-lg overflow-x-auto">
                <table class="min-w-full leading-normal">
                    <thead>
                        <tr>
                            <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-50 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Ícone</th>
                            <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-50 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Título</th>
                            <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-50 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Descrição</th>
                            <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-50 text-right text-xs font-semibold text-gray-600 uppercase tracking-wider">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm"><i class="fas fa-users fa-2x text-blue-500"></i></td>
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm"><p>Equipa Experiente</p></td>
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm"><p>Profissionais qualificados e apaixonados...</p></td>
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm text-right">
                                <button onclick="openModal('why-choose-us-modal', 'edit', {icon: 'users', title: 'Equipa Experiente', description: 'Profissionais qualificados e apaixonados...'})" class="text-indigo-600 hover:text-indigo-900"><i class="fas fa-edit"></i></button>
                                <button onclick="alert('Funcionalidade de exclusão de item')" class="text-red-600 hover:text-red-900 ml-4"><i class="fas fa-trash"></i></button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Pages -->
        <div id="pages" class="page-content">
            <div class="bg-white shadow-md rounded-lg overflow-x-auto">
                <table class="min-w-full leading-normal">
                    <thead>
                        <tr>
                            <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-50 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Título da Página</th>
                            <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-50 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Última Atualização</th>
                            <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-50 text-right text-xs font-semibold text-gray-600 uppercase tracking-wider">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm"><p>Software</p></td>
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm"><p>17/06/2025</p></td>
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm text-right">
                                <button onclick="openModal('page-modal', 'edit', {pageTitle: 'Software', content: 'Conteúdo da página de software aqui...'})" class="text-indigo-600 hover:text-indigo-900"><i class="fas fa-edit"></i> Editar Conteúdo</button>
                            </td>
                        </tr>
                        <tr>
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm"><p>Mobile</p></td>
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm"><p>15/06/2025</p></td>
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm text-right">
                                <button onclick="openModal('page-modal', 'edit', {pageTitle: 'Mobile', content: 'Conteúdo da página de mobile aqui...'})" class="text-indigo-600 hover:text-indigo-900"><i class="fas fa-edit"></i> Editar Conteúdo</button>
                            </td>
                        </tr>
                        <tr>
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm"><p>Web</p></td>
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm"><p>14/06/2025</p></td>
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm text-right">
                                <button onclick="openModal('page-modal', 'edit', {pageTitle: 'Web', content: 'Conteúdo da página web aqui...'})" class="text-indigo-600 hover:text-indigo-900"><i class="fas fa-edit"></i> Editar Conteúdo</button>
                            </td>
                        </tr>
                        <tr>
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm"><p>Desktop</p></td>
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm"><p>12/06/2025</p></td>
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm text-right">
                                <button onclick="openModal('page-modal', 'edit', {pageTitle: 'Desktop', content: 'Conteúdo da página desktop aqui...'})" class="text-indigo-600 hover:text-indigo-900"><i class="fas fa-edit"></i> Editar Conteúdo</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Contact -->
        <div id="contact" class="page-content">
            <div class="bg-white shadow-md rounded-lg p-8">
                <form onsubmit="handleContactSave(event)">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                            <input type="email" id="email" value="nevestar@nevestar.co.mz" class="mt-1 block w-full px-3 py-2 bg-white border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        </div>
                        <div>
                            <label for="phone" class="block text-sm font-medium text-gray-700">Telefone</label>
                            <input type="text" id="phone" value="+258 85 049 2263" class="mt-1 block w-full px-3 py-2 bg-white border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        </div>
                        <div class="md:col-span-2">
                            <label for="address" class="block text-sm font-medium text-gray-700">Localização</label>
                            <input type="text" id="address" value="Maxixe, Moçambique" class="mt-1 block w-full px-3 py-2 bg-white border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        </div>
                    </div>
                    <div class="mt-6 text-right">
                        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-lg">Guardar Alterações</button>
                    </div>
                </form>
            </div>
        </div>

        <!-- Users Admins -->
        <div id="users" class="page-content">
            <div class="flex justify-end mb-4">
                <button onclick="openModal('user-modal')" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-lg flex items-center"><i class="fas fa-plus mr-2"></i> Adicionar Admin</button>
            </div>
            <div class="bg-white shadow-md rounded-lg overflow-x-auto">
                <table class="min-w-full leading-normal">
                    <thead>
                        <tr>
                            <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-50 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Nome</th>
                            <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-50 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Email</th>
                            <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-50 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Nível de Acesso</th>
                            <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-50 text-right text-xs font-semibold text-gray-600 uppercase tracking-wider">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm"><p>Admin User</p></td>
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm"><p>admin@nevestar.co.mz</p></td>
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm"><span class="px-2 py-1 font-semibold leading-tight text-red-700 bg-red-100 rounded-full">Super-Admin</span></td>
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm text-right">
                                <button onclick="openModal('user-modal', 'edit', {name: 'Admin User', email: 'admin@nevestar.co.mz', role: 'Super-Admin'})" class="text-indigo-600 hover:text-indigo-900"><i class="fas fa-edit"></i></button>
                                <button onclick="alert('Funcionalidade de exclusão de admin')" class="text-red-600 hover:text-red-900 ml-4"><i class="fas fa-trash"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm"><p>Editor User</p></td>
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm"><p>editor@nevestar.co.mz</p></td>
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm"><span class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full">Editor</span></td>
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm text-right">
                                <button onclick="openModal('user-modal', 'edit', {name: 'Editor User', email: 'editor@nevestar.co.mz', role: 'Editor'})" class="text-indigo-600 hover:text-indigo-900"><i class="fas fa-edit"></i></button>
                                <button onclick="alert('Funcionalidade de exclusão de admin')" class="text-red-600 hover:text-red-900 ml-4"><i class="fas fa-trash"></i></button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Roles -->
        <div id="roles" class="page-content">
            <div class="flex justify-end mb-4">
                <button onclick="openModal('role-modal')" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-lg flex items-center"><i class="fas fa-plus mr-2"></i> Adicionar Nível</button>
            </div>
            <div class="bg-white shadow-md rounded-lg overflow-x-auto">
                <table class="min-w-full leading-normal">
                    <thead>
                        <tr>
                            <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-50 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Nome do Nível</th>
                            <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-50 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Nº de Utilizadores</th>
                            <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-50 text-right text-xs font-semibold text-gray-600 uppercase tracking-wider">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm"><p>Super-Admin</p></td>
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm"><p>1</p></td>
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm text-right">
                                <button onclick="openModal('role-modal', 'edit', {roleName: 'Super-Admin', userCount: '1'})" class="text-indigo-600 hover:text-indigo-900"><i class="fas fa-edit"></i></button>
                                <button onclick="alert('Funcionalidade de exclusão de nível')" class="text-red-600 hover:text-red-900 ml-4"><i class="fas fa-trash"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm"><p>Editor</p></td>
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm"><p>1</p></td>
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm text-right">
                                <button onclick="openModal('role-modal', 'edit', {roleName: 'Editor', userCount: '1'})" class="text-indigo-600 hover:text-indigo-900"><i class="fas fa-edit"></i></button>
                                <button onclick="alert('Funcionalidade de exclusão de nível')" class="text-red-600 hover:text-red-900 ml-4"><i class="fas fa-trash"></i></button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Password Update -->
        <div id="my-profile" class="page-content">
            <div class="bg-white shadow-md rounded-lg p-8">
                <h2 class="text-xl font-semibold mb-4">Meu Perfil</h2>
                <form action="">
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="my-profile-email">Email</label>
                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="my-profile-email" type="email" value="admin@nevestar.co.mz" required="">
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="my-profile-password">Senha Atual</label>
                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="my-profile-password" type="password" placeholder="Digite a sua senha atual!">
                    </div>                <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="my-profile-password">Nova Senha</label>
                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="my-profile-password" type="password" placeholder="Deigite uma nova senha">
                    </div>                <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="my-profile-password">Confirmar Nova Senha</label>
                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="my-profile-password" type="password" placeholder="Confirme a nova senha">
                    </div>
                    <div class="link">
                        <a href="{{ url('admin/update-password') }}" class="text-indigo-600 hover:text-indigo-900">Atualizar Palavra-Passe</a>
                    </div>
                    <div class="mt-6 text-right">
                        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-lg">Guardar Alterações</button>
                    </div>
                </form>
            </div>
        </div>
    </main>
</div>
@endsection