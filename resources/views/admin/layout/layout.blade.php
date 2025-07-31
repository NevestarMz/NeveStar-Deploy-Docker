<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Painel Administrativo - NeveStar</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

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
    <meta name="apple-mobile-web-app-title" content="NeveStar " />
    <link rel="manifest" href="{{ asset('assets/favicon/site.webmanifest') }}"/>
    
    <!-- JavaScript Bundle with Popper -->
    @vite(['resources/css/admin.css', 'resources/js/app.js'])
    
</head>
<body class="bg-gray-100">
    <div id="sidebar-overlay" class="overlay" onclick="closeSidebar()"></div>

    <div class="flex h-screen bg-gray-800 text-white">
        <!-- Sidebar -->
         @include('admin.layout.sidebar')
        <!-- Main content -->
         @yield('content')

    </div>
    
    <!-- Modals -->

    <!-- Service Modal -->
    @include('admin.modal.service-modal')

    <!-- Plan Modal -->
    @include('admin.modal.plan-modal')

    <!-- Why-Choose Modal -->
    @include('admin.modal.why-choose-us-modal')
    
    <!-- Page Edit Modal -->
    @include('admin.modal.page-modal')

    <!-- User-Admin Modal -->
    @include('admin.modal.user-modal')

    <!-- Role Modal -->
    @include('admin.modal.role-modal')
    
    @include('admin.layout.scripts')
</body>
</html>
