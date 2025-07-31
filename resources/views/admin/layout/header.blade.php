    <!-- Header -->
    <header class="flex justify-between items-center p-4 bg-white border-b-gray text-gray-800">
        <div class="flex items-center">
            <button id="sidebar-toggle-open" class="text-gray-600 focus:outline-none lg:hidden" onclick="openSidebar()">
                <i class="fas fa-bars fa-lg"></i>
            </button>
            <h1 id="page-title" class="text-2xl font-semibold ml-4">Dashboard</h1>
        </div>
        <div class="flex items-center">
            <div class="relative">
                <button class="flex items-center focus:outline-none">
                    <img @if(!empty(Auth::guard('admin')->user()->image)) 
                        src="{{ asset(Auth::guard('admin')->user()->image)  }}"
                        @else src="{{ asset('assets/team-member/user.svg') }}" 
                        @endif class="w-10 h-10 rounded-full object-cover" 
                    alt="Admin">
                    <span class="hidden md:inline ml-2">{{ Auth::guard('admin')->user()->name  }}</span>
                </button>
            </div>
            <form method="POST" action="#" class="ml-4">
                <a href="{{ url('admin/logout') }}" class="text-gray-500 hover:text-red-600 focus:outline-none text-sm flex items-center">
                    <i class="fas fa-sign-out-alt mr-2"></i>Logout
                </a>
            </form>
        </div>
    </header>
    