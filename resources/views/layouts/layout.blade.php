<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!--  -->
    <meta name="google-site-verification" content="Mq4sMxiYtAScWdqTMnsxoESOA5pXuGE7MoGjXNOHB2Y" />

    @yield('title')    
    <!-- <title>NeveStar - Soluções Tecnológicas e Inovadoras em Moçambique</title> -->
    
    <meta name="description" content="@yield('meta_description', 'A NeveStar oferece soluções em tecnologia, software e segurança digital em Moçambique.')">
    <meta name="keywords" content="Nevestar, tecnologia, Inovação, software, Moçambique, segurança digital, desenvolvimento web">
    <meta name="author" content="NeveStar - Inova & Cria">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="https://nevestar.co.mz/">

    <meta property="og:title" content="NeveStar - Inovação em Tecnologia em Moçambique">
    <meta property="og:description" content="Soluções digitais e tecnológicas para empresas e projectos em Moçambique. Especialistas em desenvolvimento de software e segurança digital.">
    <meta property="og:image" content="https://nevestar.co.mz/assets/og-image/og-image.png">
    <meta property="og:url" content="https://nevestar.co.mz">
    <meta property="og:site_name" content="NeveStar">
    <meta property="og:type" content="Website">

    @vite(['resources/css/style.css', 'resources/css/form_plans.css', 'resources/js/app.js'])

    <!-- O favicon da pagina -->
    <link rel="icon" type="image/png" href="{{ asset('assets/favicon/favicon-96x96.png') }}" sizes="96x96" />
    <link rel="icon" type="image/svg+xml" href="{{ asset('assets/favicon/favicon.svg') }}" />
    <link rel="shortcut icon" href="{{ asset('assets/favicon/favicon.ico') }}" />
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/favicon/apple-touch-icon.png') }}" />
    <link rel="manifest" href="{{ asset('assets/favicon/site.webmanifest') }}"/>

    <link rel="icon" type="image/png" href="{{ asset('assets/favicon/favicon-96x96.png') }}" sizes="96x96" />
    <link rel="icon" type="image/svg+xml" href="{{ asset('assets/favicon/favicon.svg') }}" />
    <link rel="shortcut icon" href="{{ asset('assets/favicon/favicon.ico') }}" />
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/favicon/apple-touch-icon.png') }}" />
    <link rel="manifest" href="{{ asset('assets/favicon/site.webmanifest') }}"/>
    <meta name="apple-mobile-web-app-title" content="NeveStar" />

    {{-- Dados estruturados específicos de cada página --}}
    @yield('structured-data')    
</head>
<body class="font-sans antialiased text-gray-800 bg-white">

    <!-- Header/Navbar -->
    <header class="header bg-white shadow-md sticky top-0 z-50">
    <div class="container mx-auto flex justify-between items-center px-4">
        <a href="{{ route('dashboard') }}" class="h-full w-20 md:w-24 overflow-hidden">
            <img src="{{ asset('assets/logo.png') }}" class="h-full object-cover" alt="Logo">
        </a>

        <nav class="hidden md:flex space-x-6">
            <a href="{{ route('dashboard') }}" class="{{ request()->routeIs('dashboard') ? 'text-blue-500 font-bold' : 'hover:text-blue-500' }}">Início</a>

            @php
                $is_servicos_active = request()->routeIs('pages.software') || request()->routeIs('pages.mobile') || request()->routeIs('pages.web') || request()->routeIs('pages.desktop');
            @endphp
            <div class="relative group">
                <button id="servicosBtnDesktop" class="{{ $is_servicos_active ? 'text-blue-500 font-bold' : 'hover:text-blue-500' }} flex items-center focus:outline-none">
                    Serviços
                    <i id="desktopArrow" class="fas fa-angle-down ml-1 transform transition-transform duration-200"></i>
                </button>
                <ul id="servicosSubmenuDesktop" class="absolute hidden bg-white text-gray-800 pt-2 rounded-md shadow-lg w-40 top-full left-1/2 -translate-x-1/2">
                    <li><a href="{{ route('pages.software') }}" class="{{ request()->routeIs('pages.software') ? 'bg-gray-100 text-blue-500 font-bold' : 'hover:bg-gray-100' }} block px-4 py-2">Software</a></li>
                    <li><a href="{{ route('pages.mobile') }}" class="{{ request()->routeIs('pages.mobile') ? 'bg-gray-100 text-blue-500 font-bold' : 'hover:bg-gray-100' }} block px-4 py-2">Mobile</a></li>
                    <li><a href="{{ route('pages.web') }}" class="{{ request()->routeIs('pages.web') ? 'bg-gray-100 text-blue-500 font-bold' : 'hover:bg-gray-100' }} block px-4 py-2">Web</a></li>
                    <li><a href="{{ route('pages.desktop') }}" class="{{ request()->routeIs('pages.desktop') ? 'bg-gray-100 text-blue-500 font-bold' : 'hover:bg-gray-100' }} block px-4 py-2">Desktop</a></li>
                </ul>
            </div>

            <a href="{{ route('pages.plans') }}" class="{{ request()->routeIs('pages.plans') ? 'text-blue-500 font-bold' : 'hover:text-blue-500' }}">Planos</a>
            <a href="{{ route('pages.about') }}" class="{{ request()->routeIs('pages.about') ? 'text-blue-500 font-bold' : 'hover:text-blue-500' }}">Sobre Nós</a>
            <a href="{{ route('pages.contact') }}" class="{{ request()->routeIs('pages.contact') ? 'text-blue-500 font-bold' : 'hover:text-blue-500' }}">Contacto</a>
        </nav>

        <button id="menu-button" class="md:hidden focus:outline-none">
            <svg class="h-6 w-6 text-gray-800" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
        </button>
    </div>

    <div id="mobile-menu" class="md:hidden hidden bg-white shadow-lg py-6 z-20 absolute w-full left-0">
        <ul class="flex flex-col items-center space-y-3 pt-4">
            <li><a href="{{ route('dashboard') }}" class="{{ request()->routeIs('dashboard') ? 'text-blue-500 font-bold' : 'hover:text-blue-500' }} block text-center py-2">Início</a></li>

            <li class="w-full">
                <button id="servicosBtnMobile" class="{{ $is_servicos_active ? 'text-blue-500 font-bold' : 'hover:text-blue-500' }} w-full text-center py-2 flex justify-center items-center focus:outline-none">
                    Serviços
                    <i id="mobileArrow" class="fas fa-angle-down ml-1 transform transition-transform duration-200"></i>
                </button>
                <ul id="servicosSubmenuMobile" class="hidden bg-gray-50 text-gray-700 py-2">
                    <li><a href="{{ route('pages.software') }}" class="{{ request()->routeIs('pages.software') ? 'bg-gray-100 text-blue-500 font-bold' : 'hover:bg-gray-100' }} block px-4 py-2 text-center">Software</a></li>
                    <li><a href="{{ route('pages.mobile') }}" class="{{ request()->routeIs('pages.mobile') ? 'bg-gray-100 text-blue-500 font-bold' : 'hover:bg-gray-100' }} block px-4 py-2 text-center">Mobile</a></li>
                    <li><a href="{{ route('pages.web') }}" class="{{ request()->routeIs('pages.web') ? 'bg-gray-100 text-blue-500 font-bold' : 'hover:bg-gray-100' }} block px-4 py-2 text-center">Web</a></li>
                    <li><a href="{{ route('pages.desktop') }}" class="{{ request()->routeIs('pages.desktop') ? 'bg-gray-100 text-blue-500 font-bold' : 'hover:bg-gray-100' }} block px-4 py-2 text-center">Desktop</a></li>
                </ul>
            </li>

            <li><a href="{{ route('pages.plans') }}" class="{{ request()->routeIs('pages.plans') ? 'text-blue-500 font-bold' : 'hover:text-blue-500' }} block text-center py-2">Planos</a></li>
            <li><a href="{{ route('pages.about') }}" class="{{ request()->routeIs('pages.about') ? 'text-blue-500 font-bold' : 'hover:text-blue-500' }} block text-center py-2">Sobre Nós</a></li>
            <li><a href="{{ route('pages.contact') }}" class="{{ request()->routeIs('pages.contact') ? 'text-blue-500 font-bold' : 'hover:text-blue-500' }} block text-center py-2">Contacto</a></li>
        </ul>
    </div>
</header>

    <!-- Home Section -->
    
    @yield('content')


    <footer class="footer bg-gray-900 text-white py-12">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 pb-8 border-b border-gray-700">
                <div class="md:col-span-1 flex flex-col items-start md:items-start">
                    <a href="{{ route('dashboard') }}" class="w-36 md:w-28 overflow-hidden mx-auto md:mx-0">
                        <img src="{{ asset('assets/logo.png') }}" alt="Logo">
                        
                    </a>
                    <p class="text-white text-center md:text-left">
                        Sua parceira em tecnologia para desenvolvimento de software e gestão empresarial em Moçambique.
                    </p>
                </div>

                <div class="text-center md:text-left">
                    <h3 class="text-xl font-semibold mb-4">Links Rápidos</h3>
                    <ul class="text-gray-400 space-y-2">
                        <li><a href="{{ route('dashboard') }}" class="{{ request()->routeIs('dashboard') ? 'text-blue-400 font-bold' : 'hover:text-blue-400' }} transition duration-300">Inicio</a></li>

                        <li><a href="{{ route('pages.plans') }}" class="{{ request()->routeIs('pages.plans') ? 'text-blue-400 font-bold' : 'hover:text-blue-400' }} transition duration-300">Planos</a></li>
                        <li><a href="{{ route('pages.about') }}" class="{{ request()->routeIs('pages.about') ? 'text-blue-400 font-bold' : 'hover:text-blue-400' }} transition duration-300">Sobre Nós</a></li>
                        <li><a href="{{ route('pages.contact') }}" class="{{ request()->routeIs('pages.contact') ? 'text-blue-400 font-bold' : 'hover:text-blue-400' }} transition duration-300">Contacto</a></li>
                        <li><a href="{{ route('privacidade') }}" id="privacy-policy-link-footer" class="{{ request()->routeIs('privacidade') ? 'text-blue-400 font-bold' : 'hover:text-blue-400' }} transition duration-300">Política de Privacidade</a></li>
                        <li><a href="{{ route('termos') }}" id="terms-of-use-link-footer" class="{{ request()->routeIs('termos') ? 'text-blue-400 font-bold' : 'hover:text-blue-400' }} transition duration-300">Termos de Utilização</a></li>
                    </ul>
                </div>

                <div class="text-center md:text-left">
                    <h3 class="text-xl font-semibold mb-4">Contacto</h3>
                    <p class="text-gray-400 mb-2">Email: <a href="mailto:nevestar@nevestar.co.mz">nevestar@nevestar.co.mz</a></p>
                    <p class="text-gray-400 mb-2">Telefone: <a href="tel:+258850492263">+258 85 049 2263</a></p>
                    <p class="text-gray-400 mb-4">Localização: <strong>Maputo, Moçambique</strong></p>
                    <div class="flex justify-center md:justify-start space-x-3">
                        <a href="https://youtube.com/@nevestars?si=9cW_0RseerSnRS9W" class="social-icon bg-[#FFFF]" aria-label="Youtube">
                            <i class="fab fa-youtube text-[#FF0000] text-2xl"></i>
                        </a>
                        <a href="https://www.facebook.com/profile.php?id=61577052654198" class="social-icon bg-[#FFFF]" aria-label="Facebook">
                            <i class="fab fa-facebook-f text-[#365899] text-2xl"></i>
                        </a>
                        <a href="https://www.linkedin.com/company/nevestar-mz" class="social-icon bg-[#0A66C2] text-2xl" aria-label="LinkedIn">
                            <i class="fab fa-linkedin-in text-white"></i>
                        </a>
                        <a href="https://wa.me/258850492263" class="social-icon bg-[#25D366] text-2xl" aria-label="Twitter">
                            <i class="fab fa-whatsapp"></i>
                        </a>
                        <a href="https://x.com/NevestarMz" class="social-icon bg-black text-2xl" aria-label="Twitter">
                            <i class="fab fa-x-twitter"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="flex flex-col md:flex-row justify-between items-center pt-8 text-gray-400 text-sm">
                <p class="mb-2 md:mb-0"> &copy; <span>2025 -</span> <span id="current-year"></span> NeveStar. Todos os direitos reservados. <a href="https://nevestar.co.mz" class="hover:text-blue-400 transition duration-300">NeveStar</a></p>
                <p>Criado com paixão pela tecnologia em Moçambique ❤️</p>
            </div>
        </div>
    </footer>

    <!-- Cookie Banner – NeveStar -->
    
    @include('layouts.bannerCookis')
    
    @include('components.chat-widget')

    @include('layouts.script')
    <!-- @include('layouts.chatScript') -->
    

</body>
</html>