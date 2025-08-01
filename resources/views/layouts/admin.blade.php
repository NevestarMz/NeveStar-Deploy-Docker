<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta name="description" content="A NeveStar oferece soluções em tecnologia, software e segurança digital em Moçambique.">
    <meta name="keywords" content="tecnologia, Inovação, software, Moçambique, segurança digital, desenvolvimento web">
    <meta name="author" content="NeveStar - Inova & Cria">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="https://nevestar.co.mz/">

    <meta property="og:title" content="NeveStar - Inovação em Tecnologia">
    <meta property="og:description" content="Soluções digitais e tecnológicas para empresas e projectos em Moçambique.">
    <meta property="og:image" content="https://nevestar.co.mz/imagens/og-image.jpg">
    <meta property="og:url" content="https://nevestar.co.mz">
    <meta property="og:type" content="Website">

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <title>NeveStar</title>
</head>

<body>
    <div class="main-container">
        <header class="header">
            <div class="content-header">
                <h2 class="title-logo"><a href="{{ route('dashboard') }}">NeveStar</a></h2>
                <ul class="list-nav-link">
                    <li><a href="{{ route('user.index') }}" class="nav-link">Usuários</a></li>
                    <li><a href="{{ route('dashboard') }}" class="nav-link">Sair</a></li>
                </ul>
            </div>
        </header>
        @yield('content')
    </div>
</body>

</html>
