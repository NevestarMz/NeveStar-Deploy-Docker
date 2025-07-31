    <!-- Sidebar -->
    <aside id="sidebar" class="w-68 flex-shrink-0 bg-gray-800 transition-all duration-300 ease-in-out overflow-y-auto">
        <div class="px-5 py-2 flex items-center justify-between">
            <a href="{{ url('admin/dashboard') }}" class="text-2xl font-bold text-white">NeveStar</a>
            <button id="sidebar-toggle-close" class="lg:hidden text-white focus:outline-none">
                <i class="fas fa-times"></i>
            </button>
        </div>
        <nav class="mt-4 text-gray-300">
            <ul>
                <li class="mb-2">
                    <a href="#dashboard" class="sidebar-link flex items-center py-3 px-6 hover:bg-gray-700 transition duration-200 {{ (Session::get('page') == 'dashboard') ? 'active' : '' }}" class="sidebar-link flex items-center py-3 px-6 hover:bg-gray-700 transition duration-200 active">
                        <i class="fas fa-tachometer-alt w-6 text-center"></i><span class="ml-4">Dashboard</span>
                    </a>
                </li>    
                
                <p class="px-6 py-3 text-xs font-semibold uppercase text-gray-500">Gestão de Conteúdo</p>
                <li class="mb-2">
                    <a href="#services" class="sidebar-link flex items-center py-3 px-6 hover:bg-gray-700 transition duration-200">
                        <i class="fas fa-cogs w-6 text-center"></i><span class="ml-4">Serviços Especializados</span>
                    </a>
                </li>
                <li class="mb-2">
                    <a href="#plans" class="sidebar-link flex items-center py-3 px-6 hover:bg-gray-700 transition duration-200">
                        <i class="fas fa-file-invoice-dollar w-6 text-center"></i><span class="ml-4">Planos de Websites</span>
                    </a>
                </li>
                <li class="mb-2">
                    <a href="#why-choose-us" class="sidebar-link flex items-center py-3 px-6 hover:bg-gray-700 transition duration-200">
                        <i class="fas fa-heart w-6 text-center"></i><span class="ml-4">Porque Escolher-nos</span>
                    </a>
                </li>
                <li class="mb-2">
                    <a href="#pages" class="sidebar-link flex items-center py-3 px-6 hover:bg-gray-700 transition duration-200">
                        <i class="fas fa-file-alt w-6 text-center"></i><span class="ml-4">Páginas de Serviços</span>
                    </a>
                </li>
                <li class="mb-2">
                    <a href="#contact" class="sidebar-link flex items-center py-3 px-6 hover:bg-gray-700 transition duration-200">
                        <i class="fas fa-address-book w-6 text-center"></i><span class="ml-4">Contacto</span>
                    </a>
                </li>

                <p class="px-6 py-3 mt-4 text-xs font-semibold uppercase text-gray-500">Sistema</p>
                <li class="mb-2">
                    <a href="#users" class="sidebar-link flex items-center py-3 px-6 hover:bg-gray-700 transition duration-200">
                        <i class="fas fa-users-cog w-6 text-center"></i><span class="ml-4">Administradores</span>
                    </a>
                </li>
                <li class="mb-2">
                    <a href="#roles" class="sidebar-link flex items-center py-3 px-6 hover:bg-gray-700 transition duration-200">
                        <i class="fas fa-user-shield w-6 text-center"></i><span class="ml-4">Níveis de Acesso</span>
                    </a>
                </li>
                <li class="mb-2">
                    <a href="#my-profile" class="sidebar-link flex items-center py-3 px-6 hover:bg-gray-700 transition duration-200">
                        <i class="fas fa-user-circle w-6 text-center"></i><span class="ml-4">Meu Perfil</span>
                    </a>
                </li>
            </ul>
        </nav>
    </aside>