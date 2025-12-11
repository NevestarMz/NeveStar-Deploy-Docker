@extends('layouts.layout')
@section('title')
    <title>NeveStar - Soluções Tecnológicas e Inovadoras em Moçambique</title>
@endsection

@section('structured-data')
    <script type="application/ld+json">
    {
        "@@context": "https://schema.org",
        "@@type": "DashboardPage",
        "name": "Página Inicial - NeveStar",
        "url": "https://nevestar.co.mz",
        "description": "A NeveStar oferece soluções em tecnologia, software e segurança digital em Moçambique.",
        "publisher": {
            "@@type": "Organization",
            "name": "NeveStar",
            "logo": {
                "@@type": "ImageObject",
                // Adicionar o URL do logo é uma boa prática
                "url": "https://nevestar.co.mz/assets/logo.png"
            }
        }
    }
    </script>
@endsection

@section('content') 
    <section  class="relative min-h-screen flex items-center justify-center overflow-hidden text-white py-20 md:py-32 text-center">
        <div id="capa" class="absolute inset-0 z-0">
            <div class="absolute inset-0 bg-gradient-to-r from-blue-600/65 via-blue-600/55 to-blue-700/45"></div>
        </div>
        <div class="container relative z-10 mx-auto px-4 flex flex-col items-center">
            <h1 class="text-3xl md:text-5xl font-extrabold leading-tight mb-6">NeveStar - Inovação Tecnológica à Sua Medida em Moçambique</h1>
            <p class="text-lg md:text-xl max-w-3xl mx-auto mb-8">
                Desenvolvemos soluções de software de ponta para dispositivos Mobile, páginas Web, programas Desktop e Sistemas de Gestão Empresarial, impulsionando o seu sucesso.
            </p>
            <a href="#services" class="bg-white text-blue-800 px-8 py-4 rounded-full text-lg font-semibold hover:bg-gray-100 transition duration-300 shadow-lg">Explorar Serviços</a>
        </div>
    </section>

    <section id="services" class="py-16 md:py-24 bg-gray-50 animated-section">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-12">Nossos Serviços Especializados</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="bg-white p-8 rounded-lg card-hover-effect flex flex-col items-center animate-fade-in-up delay-100">
                    <i class="fas fa-mobile-alt text-blue-600 text-5xl mb-4"></i>
                    <h3 class="text-xl font-semibold mb-3">Desenvolvimento Mobile</h3>
                    <p class="text-gray-600 mb-4">Criamos aplicações nativas e híbridas para iOS e Android, com design intuitivo e alta performance.</p>
                    <a href="{{ route('pages.mobile') }}" class="text-blue-600 hover:underline font-medium">Saber Mais</a>
                </div>

                <div class="bg-white p-8 rounded-lg card-hover-effect flex flex-col items-center animate-fade-in-up delay-100">
                    <i class="fas fa-globe text-blue-600 text-5xl mb-4"></i>
                    <h3 class="text-xl font-semibold mb-3">Desenvolvimento Web</h3>
                    <p class="text-gray-600 mb-4">Construímos websites dinâmicos, e-commerce robustos e sistemas web personalizados para sua empresa.</p>
                    <a href="{{ route('pages.web') }}" class="text-blue-600 hover:underline font-medium">Saber Mais</a>
                </div>

                <div class="bg-white p-8 rounded-lg card-hover-effect flex flex-col items-center animate-fade-in-up delay-100">
                    <i class="fas fa-laptop-code text-blue-600 text-5xl mb-4"></i>
                    <h3 class="text-xl font-semibold mb-3">Desenvolvimento Desktop</h3>
                    <p class="text-gray-600 mb-4">Soluções desktop poderosas e eficientes para otimizar operações internas e fluxos de trabalho.</p>
                    <a href="{{ route('pages.desktop') }}" class="text-blue-600 hover:underline font-medium">Saber Mais</a>
                </div>

                <div class="bg-white p-8 rounded-lg card-hover-effect flex flex-col items-center animate-fade-in-up delay-100">
                    <i class="fas fa-chart-line text-blue-600 text-5xl mb-4"></i>
                    <h3 class="text-xl font-semibold mb-3">Sistemas de Gestão Empresarial</h3>
                    <p class="text-gray-600 mb-4">Implementamos ERP, CRM, BI e outras ferramentas para automação e inteligência de negócios.</p>
                    <a href="{{ route('pages.software') }}" class="text-blue-600 hover:underline font-medium">Saber Mais</a>
                </div>
            </div>
        </div>
    </section>

    <section id="plans" class="relative flex items-center justify-center overflow-hidden py-16 md:py-24 bg-blue-100 animated-section">
        <div id="plans" class="absolute inset-0 z-0">
            <div class="absolute inset-0 bg-gradient-to-r from-blue-600/65 via-blue-600/55 to-blue-700/45"></div>
        </div>
        <div class="container relative z-10 mx-auto px-4 text-center">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-12 animate-fade-in-up">Nossos Planos de Websites</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-white p-8 rounded-lg shadow-md flex flex-col items-center justify-between card-hover-effect animate-fade-in-up delay-100">
                    <div>
                        <h3 class="text-2xl font-bold text-blue-700 mb-4">Sites Básicos</h3>
                        <p class="text-4xl font-extrabold mb-4 text-blue-950">7.000,00 MZN</p>
                        <p class="text-gray-600 mb-6">Ideal para presença online simples e informativa.</p>
                        <ul class="text-gray-700 text-left mb-6 space-y-2 plan-list">
                            <li>Design Responsivo</li>
                            <li>Páginas Essenciais (Início, Sobre, Contacto)</li>
                            <li>Otimização Básica para Motores de Busca</li>
                            <li>Suporte Limitado</li>
                        </ul>
                    </div>
                    <button type="button" class="bg-blue-600 text-white px-8 py-3 rounded-md hover:bg-blue-700 transition duration-300 font-semibold open-modal-btn"
                    data-service-name="Sites Básicos" data-service-price="7000"
                    >Solicitar</button>
                </div>

                <div class="bg-white p-8 rounded-lg shadow-md flex flex-col items-center justify-between card-hover-effect animate-fade-in-up delay-100">
                    <div>
                        <h3 class="text-2xl font-bold text-blue-700 mb-4">Sites Normais</h3>
                        <p class="text-4xl font-extrabold mb-4 text-blue-950">10.000,00 MZN</p>
                        <p class="text-gray-600 mb-6">Para negócios que precisam de mais funcionalidades e interatividade.</p>
                        <ul class="text-gray-700 text-left mb-6 space-y-2 plan-list">
                            <li>Tudo do Plano Básico</li>
                            <li>Galeria de Imagens/Vídeos</li>
                            <li>Formulários Avançados</li>
                            <li>Integração com Redes Sociais</li>
                            <li>Manutenção Mensal (básica)</li>
                        </ul>
                    </div>
                    <button type="button" class="bg-blue-600 text-white px-8 py-3 rounded-md hover:bg-blue-700 transition duration-300 font-semibold open-modal-btn"
                    data-service-name="Sites Normais" data-service-price="10000"
                    >Solicitar</button>
                </div>

                <div class="bg-white p-8 rounded-lg shadow-md flex flex-col items-center justify-between card-hover-effect animate-fade-in-up delay-100">
                    <div>
                        <h3 class="text-2xl font-bold text-blue-700 mb-4">Blogs</h3>
                        <p class="text-4xl font-extrabold mb-4 text-blue-950">14.000,00 MZN</p>
                        <p class="text-gray-600 mb-6">Perfeito para criadores de conteúdo e empresas que buscam engajamento.</p>
                        <ul class="text-gray-700 text-left mb-6 space-y-2 plan-list">
                            <li>Funcionalidades de um Site Normal</li>
                            <li>Sistema de Gestão de Conteúdo (CMS)</li>
                            <li>Otimização Avançada para SEO</li>
                            <li>Comentários e Compartilhamento</li>
                            <li>Treinamento para Publicação</li>
                        </ul>
                    </div>
                    <button type="button" class="bg-blue-600 text-white px-8 py-3 rounded-md hover:bg-blue-700 transition duration-300 font-semibold open-modal-btn"
                    data-service-name="Blogs" data-service-price="14000"
                    >Solicitar</button>
                </div>

                <!-- <div class="bg-white p-8 rounded-lg shadow-md flex flex-col items-center justify-between card-hover-effect animate-fade-in-up delay-100">
                    <div>
                        <h3 class="text-2xl font-bold text-blue-700 mb-4">Sites Premium</h3>
                        <p class="text-4xl font-extrabold mb-4 text-blue-950">+30.000,00 MZN</p>
                        <p class="text-gray-600 mb-6">Soluções completas e customizadas para grandes projetos e e-commerce robusto.</p>
                        <ul class="text-gray-700 text-left mb-6 space-y-2 plan-list px">
                            <li>Todas as funcionalidades anteriores</li>
                            <li>Desenvolvimento de E-commerce</li>
                            <li>Integrações com Sistemas Externos (APIs)</li>
                            <li>Análise de Dados e Relatórios</li>
                            <li>Suporte Prioritário 24/7</li>
                        </ul>
                    </div>
                    <button type="button" class="bg-blue-600 text-white px-8 py-3 rounded-md hover:bg-blue-700 transition duration-300 font-semibold open-modal-btn"
                        data-service-name="Sites Premium" data-service-price="30000">
                        Solicitar
                    </button>
                </div> -->
            </div>
        </div>
    </section>

    <section id="about" class="py-16 md:py-24 bg-gray-50 animated-section">
        <div class="container mx-auto px-4 flex flex-col items-center">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-12 animate-fade-in-up">Porque Escolher a NeveStar?</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="p-6 rounded-lg bg-white text-center card-hover-effect animate-fade-in-up delay-100">
                    <i class="fas fa-users-gear text-blue-600 text-5xl mb-4"></i>
                    <h3 class="text-xl font-semibold mb-2">Equipa Experiente</h3>
                    <p class="text-gray-600">Profissionais qualificados e apaixonados por tecnologia, prontos para qualquer desafio.</p>
                </div>
                <div class="p-6 rounded-lg bg-white text-center card-hover-effect animate-fade-in-up delay-200">
                    <i class="fas fa-cogs text-blue-600 text-5xl mb-4"></i>
                    <h3 class="text-xl font-semibold mb-2">Soluções Personalizadas</h3>
                    <p class="text-gray-600">Desenvolvimento sob medida para atender às necessidades específicas do seu negócio.</p>
                </div>
                <div class="p-6 rounded-lg bg-white text-center card-hover-effect animate-fade-in-up delay-300">
                    <i class="fas fa-headset text-blue-600 text-5xl mb-4"></i>
                    <h3 class="text-xl font-semibold mb-2">Suporte Contínuo</h3>
                    <p class="text-gray-600">Garantimos acompanhamento e suporte técnico para a performance ideal das suas soluções.</p>
                </div>
                <div class="p-6 rounded-lg bg-white text-center card-hover-effect animate-fade-in-up delay-400">
                    <i class="fas fa-map-marked-alt text-blue-600 text-5xl mb-4"></i>
                    <h3 class="text-xl font-semibold mb-2">Foco em Moçambique</h3>
                    <p class="text-gray-600">Compreendemos o mercado local para oferecer soluções relevantes e impactantes.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="contact" class="relative flex items-center justify-center overflow-hidden text-white py-16 md:py-20 text-center">
        <div id="contacto" class="absolute inset-0 z-0">
            <div class="absolute inset-0 bg-gradient-to-r from-blue-600/65 via-blue-600/55 to-blue-700/45"></div>
        </div>
        <div class="container relative z-10 mx-auto px-4 flex flex-col items-center">
            <h2 class="text-3xl md:text-4xl font-bold mb-6">Transforme sua ideia em realidade com a NeveStar</h2>
            <p class="text-lg mb-8 max-w-2xl mx-auto">
                Entre em contacto hoje mesmo e descubra como a nossa tecnologia pode impulsionar o seu negócio em Moçambique.
            </p>
            <a href="mailto:nevestar@nevestar.co.mz" class="bg-white text-blue-700 px-8 py-4 rounded-full text-lg font-semibold hover:bg-gray-100 transition duration-300 shadow-lg">Obtenha um Orçamento Grátis</a>
        </div>
    </section>
    @include('components.modal_Form_plans')
@endsection

