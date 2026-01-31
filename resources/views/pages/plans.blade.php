@extends('layouts.layout')

@section('title')
<title>Planos de Website e Software - NeveStar | Soluções Tecnológicas em Moçambique</title>
@endsection

@section('meta_description', 'Descubra os planos de website da NeveStar, desde soluções básicas a e-commerce premium. Preços competitivos e serviços completos para o seu negócio em Moçambique.')

@section('structured-data')
    <script type="application/ld+json">
        {
            "@@context": "https://schema.org",
            "@@type": "PlansPage",
            "name": "Planos de Serviços",
            "url": "https://nevestar.co.mz/orcament/plans",
            "description": "Descubra os planos de website da NeveStar, desde soluções básicas a e-commerce premium. Preços competitivos e serviços completos para o seu negócio em Moçambique.",
            "publisher": {
                "@@type": "Organization",
                "name": "NeveStar", 
                "logo": {
                    "@@type": "ImageObject",
                    "url": "https://nevestar.co.mz/assets/logo.png"
                }
            }
        }
    </script>
@endsection

@section('content')

    <section class="relative min-h-screen flex items-center justify-center overflow-hidden text-white py-20 md:py-32 text-center">
        <div id="planpage" class="absolute inset-0 z-0">
            <div class="absolute inset-0 bg-gradient-to-r from-blue-800/75 via-black-700/55 to-blue-800/65"></div>
        </div>
        <div class="container relative mx-auto px-4 flex flex-col items-center">
            <h1 class="text-3xl md:text-5xl font-extrabold leading-tight mb-6">Nossos Planos de Websites - Escolha a Sua Estrela Digital</h1>
            <p class="text-lg md:text-xl max-w-3xl mx-auto mb-8">
                Oferecemos soluções de websites flexíveis e acessíveis para todas as necessidades, desde presença online básica até e-commerce completo.
            </p>
            <a href="#planos-detalhes" class="bg-white text-blue-800 px-8 py-4 rounded-full text-lg font-semibold hover:bg-gray-100 transition duration-300 shadow-lg">Ver Planos</a>
        </div>
    </section>

    <section id="planos-detalhes" class="py-16 md:py-24 bg-blue-100 animated-section">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-12 animate-fade-in-up">Encontre o Plano Perfeito para o Seu Negócio</h2>
            <p class="text-lg text-gray-700 mb-16 max-w-4xl mx-auto">
                Na NeveStar, acreditamos que ter uma presença online eficaz não deve ser complicado. Explore nossos planos detalhados e escolha a opção que melhor se encaixa nas suas ambições e orçamento.
            </p>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-white p-8 rounded-lg shadow-md flex flex-col items-center justify-between card-hover-effect animate-fade-in-up delay-100">
                    <div>
                        <h3 class="text-2xl font-bold text-blue-700 mb-4">Sites Básicos</h3>
                        <p class="text-4xl font-extrabold mb-4 text-blue-950">7.000,00 MZN</p>
                        <p class="text-gray-600 mb-6">Ideal para presença online simples e informativa.</p>
                        <ul class="text-gray-700 text-left mb-6 space-y-2 plan-list">
                            <li class="flex items-center">Design Responsivo</li>
                            <li class="flex items-center">Páginas Essenciais (Início, Sobre, Contacto)</li>
                            <li class="flex items-center">Otimização Básica para Motores de Busca</li>
                            <li class="flex items-center">Suporte Limitado</li>
                        </ul>
                    </div>
                    <button type="button" class="bg-blue-600 text-white px-8 py-3 rounded-md hover:bg-blue-700 transition duration-300 font-semibold open-modal-btn"
                    data-service-name="Criação de Sites Básicos" data-service-price="7000"
                    >Solicitar</button>
                </div>

                <div class="bg-white p-8 rounded-lg shadow-md flex flex-col items-center justify-between card-hover-effect animate-fade-in-up delay-200">
                    <div>
                        <h3 class="text-2xl font-bold text-blue-700 mb-4">Sites Normais</h3>
                        <p class="text-4xl font-extrabold mb-4 text-blue-950">10.000,00 MZN</p>
                        <p class="text-gray-600 mb-6">Para negócios que precisam de mais funcionalidades e interatividade.</p>
                        <ul class="text-gray-700 text-left mb-6 space-y-2 plan-list">
                            <li class="flex items-center">Tudo do Plano Básico</li>
                            <li class="flex items-center">Galeria de Imagens/Vídeos</li>
                            <li class="flex items-center">Formulários Avançados</li>
                            <li class="flex items-center">Integração com Redes Sociais</li>
                            <li class="flex items-center">Manutenção Mensal (básica)</li>
                        </ul>
                    </div>
                    <button type="button" class="bg-blue-600 text-white px-8 py-3 rounded-md hover:bg-blue-700 transition duration-300 font-semibold open-modal-btn"
                    data-service-name="Criação de Sites Normais" data-service-price="10000"
                    >Solicitar</button>
                </div>

                <div class="bg-white p-8 rounded-lg shadow-md flex flex-col items-center justify-between card-hover-effect animate-fade-in-up delay-300">
                    <div>
                        <h3 class="text-2xl font-bold text-blue-700 mb-4">Blogs</h3>
                        <p class="text-4xl font-extrabold mb-4 text-blue-950">14.000,00 MZN</p>
                        <p class="text-gray-600 mb-6">Perfeito para criadores de conteúdo e empresas que buscam engajamento.</p>
                        <ul class="text-gray-700 text-left mb-6 space-y-2 plan-list">
                            <li class="flex items-center">Funcionalidades de um Site Normal</li>
                            <li class="flex items-center">Sistema de Gestão de Conteúdo (CMS)</li>
                            <li class="flex items-center">Otimização Avançada para SEO</li>
                            <li class="flex items-center">Comentários e Compartilhamento</li>
                            <li class="flex items-center">Treinamento para Publicação</li>
                        </ul>
                    </div>
                    <button type="button" class="bg-blue-600 text-white px-8 py-3 rounded-md hover:bg-blue-700 transition duration-300 font-semibold open-modal-btn"
                    data-service-name="Criação de Blogs" data-service-price="14000"
                    >Solicitar</button>
                </div>
                <div class="bg-white p-8 rounded-lg shadow-md flex flex-col items-center justify-between card-hover-effect animate-fade-in-up delay-400">
                    <div>
                        <h3 class="text-2xl font-bold text-blue-700 mb-4">Sites Premium</h3>
                        <p class="text-4xl font-extrabold mb-4 text-blue-950">+30.000,00 MZN</p>
                        <p class="text-gray-600 mb-6">Soluções completas e customizadas para grandes projetos e e-commerce robusto.</p>
                        <ul class="text-gray-700 text-left mb-6 space-y-2 plan-list">
                            <li class="flex items-center">Todas as funcionalidades anteriores</li>
                            <li class="flex items-center">Desenvolvimento de E-commerce</li>
                            <li class="flex items-center">Integrações com Sistemas Externos (APIs)</li>
                            <li class="flex items-center">Análise de Dados e Relatórios</li>
                            <li class="flex items-center">Suporte Prioritário 24/7</li>
                        </ul>
                    </div>
                    <button type="button" class="bg-blue-600 text-white px-8 py-3 rounded-md hover:bg-blue-700 transition duration-300 font-semibold open-modal-btn"
                        data-service-name="Criação de Sites Premium" data-service-price="30000">
                        Solicitar
                    </button>
                </div>

                <div class="bg-white p-8 rounded-lg shadow-md flex flex-col items-center justify-between card-hover-effect animate-fade-in-up delay-400">
                    <div>
                        <h3 class="text-2xl font-bold text-blue-700 mb-4">Aplicações Mobile</h3>
                        <p class="text-4xl font-extrabold mb-4 text-blue-950">+15.000,00 MZN</p>
                        <p class="text-gray-600 mb-6">Soluções personalizadas para iOS e Android, conectando o seu negócio aos seus clientes.</p>
                        <ul class="text-gray-700 text-left mb-6 space-y-2 plan-list">
                            <li class="flex items-center">Design UX/UI Exclusivo</li>
                            <li class="flex items-center">Desenvolvimento Nativo e Híbrido</li>
                            <li class="flex items-center">Integrações com Sistemas Externos (APIs)</li>
                            <li class="flex items-center">Notificações Push</li>
                            <li class="flex items-center">Integração de GPS e Câmera</li>
                            <li class="flex items-center">Publicação na App Store e Google Play</li>
                        </ul>
                    </div>
                    <button type="button" class="bg-blue-600 text-white px-8 py-3 rounded-md hover:bg-blue-700 transition duration-300 font-semibold open-modal-btn" 
                    data-service-name="Criação de Aplicações Mobile" data-service-price="7000">
                        Solicitar
                    </button>
                </div>
                <div class="bg-white p-8 rounded-lg shadow-md flex flex-col items-center justify-between card-hover-effect animate-fade-in-up delay-400">
                    <div>
                        <h3 class="text-2xl font-bold text-blue-700 mb-4">Sistemas ERP</h3>
                        <p class="text-4xl font-extrabold mb-4 text-blue-950">+40.000,00 MZN</p>
                        <p class="text-gray-600 mb-6 text-center">Integre e otimize a gestão completa da sua empresa em um único sistema centralizado.</p>
                        <ul class="text-gray-700 text-left mb-6 space-y-2 plan-list">
                            <li class="flex items-center">Módulos de Finanças e RH</li>
                            <li class="flex items-center">Gestão de Inventário e Vendas</li>
                            <li class="flex items-center">Relatórios Personalizados</li>
                            <li class="flex items-center">Integração com CRM</li>
                            <li class="flex items-center">Suporte e Treinamento</li>
                        </ul>
                    </div>
                    <button type="button" class="bg-blue-600 text-white px-8 py-3 rounded-md hover:bg-blue-700 transition duration-300 font-semibold open-modal-btn"
                        data-service-name="Desenvolvimento de Sistemas ERP" data-service-price="40000">
                        Solicitar
                    </button>
                </div>
                
            </div>
        </div>
    </section>

    <section class="py-16 md:py-24 bg-gray-50 animated-section">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-12 animate-fade-in-up">Perguntas Frequentes (FAQ)</h2>
            <div class="max-w-3xl mx-auto text-left space-y-6">
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <h3 class="text-xl font-semibold text-blue-700 mb-2">O que está incluído no preço do plano?</h3>
                    <p class="text-gray-600">Cada plano detalha as funcionalidades básicas incluídas. Custos adicionais podem surgir para funcionalidades altamente personalizadas, integrações complexas ou conteúdos (textos, imagens) que não sejam fornecidos pelo cliente.</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <h3 class="text-xl font-semibold text-blue-700 mb-2">Oferecem serviço de hospedagem e domínio?</h3>
                    <p class="text-gray-600">Sim, podemos auxiliar na aquisição e configuração de hospedagem e domínio como parte do serviço. Estes custos são geralmente separados e anuais, e serão detalhados no orçamento.</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <h3 class="text-xl font-semibold text-blue-700 mb-2">Quanto tempo leva para o meu website ficar pronto?</h3>
                    <p class="text-gray-600">O tempo de desenvolvimento varia de acordo com a complexidade do plano e a prontidão do conteúdo. Websites Básicos podem levar de 2 a 4 semanas, enquanto planos Premium e e-commerce podem levar de 6 a 12 semanas ou mais.</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <h3 class="text-xl font-semibold text-blue-700 mb-2">Posso fazer upgrades de plano no futuro?</h3>
                    <p class="text-gray-600">Absolutamente! Nossos planos são flexíveis. Você pode fazer upgrade a qualquer momento para um plano com mais funcionalidades, pagando apenas a diferença e o custo do desenvolvimento adicional.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-blue-700 text-white py-16 md:py-20 text-center">
        <div class="container mx-auto px-4 flex flex-col items-center">
            <h2 class="text-3xl md:text-4xl font-bold mb-6">Pronto para Lançar o Seu Projeto Online?</h2>
            <p class="text-lg mb-8 max-w-2xl mx-auto">
                Entre em contacto com a NeveStar hoje mesmo para uma consulta gratuita e personalize o seu plano de website.
            </p>
            <a href="{{ route('pages.contact') }}" class="bg-white text-blue-700 px-8 py-4 rounded-full text-lg font-semibold hover:bg-gray-100 transition duration-300 shadow-lg">Obtenha um Orçamento Grátis</a>
        </div>
    </section>
    @include('components.modal_Form_plans')
    
@endsection
