<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>NeveStar - Soluções Tecnológicas e Inovadoras em Moçambique</title>
    
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

    @vite(['resources/css/style.css', 'resources/js/app.js'])

    <!-- <link href="css/tailwind.min.css" rel="stylesheet"> -->
    <link rel="icon" href="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='currentColor'%3E%3Cpath d='M12 2L2 22H22L12 2ZM12 6.66l6.66 13.34H5.34L12 6.66Z'/%3E%3C/svg%3E" type="image/svg+xml">
    
    <script defer>
        document.addEventListener("DOMContentLoaded", function () {
            const menuBtn = document.getElementById("menu-button");
            const menu = document.getElementById("mobile-menu");menuBtn.addEventListener("click", () => {
            menu.classList.toggle("hidden");
            });
        });
    </script>
</head>
<body class="font-sans antialiased text-gray-800 bg-white">

    <!-- Header/Navbar -->
    <header class="header bg-white shadow-md sticky top-0 z-50">
      <div class="container mx-auto flex justify-between items-center px-4">
        <div class="h-full w-20 md:w-24 overflow-hidden">
            <img src="{{ asset('assets/logo.png') }}" class="h-full  object-cover" alt="Logo">
        </div>
        <nav class="hidden md:flex space-x-6">
          <a href="#" class="hover:text-blue-500">Início</a>
          <a href="#services" class="hover:text-blue-500">Serviços</a>
          <a href="#plans" class="hover:text-blue-500">Planos</a>
          <a href="#about" class="hover:text-blue-500">Sobre Nós</a>
          <a href="#contact" class="hover:text-blue-500">Contacto</a>
        </nav>
        <!-- Mobile menu button -->
        <button id="menu-button" class="md:hidden focus:outline-none">
          <svg class="h-6 w-6 text-gray-800" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
          </svg>
        </button>
      </div>
      <!-- Mobile menu -->
      <div id="mobile-menu" class="md:hidden hidden px-4 pb-4">
        <a href="#" class="block text-center py-2 hover:text-blue-500 items-center">Início</a>
        <a href="#services" class="block text-center py-2 hover:text-blue-500">Serviços</a>
        <a href="#plans" class="block text-center py-2 hover:text-blue-500">Planos</a>
        <a href="#about" class="block text-center py-2 hover:text-blue-500">Sobre Nós</a>
        <a href="#contact" class="block text-center py-2 hover:text-blue-500">Contacto</a>
      </div>
    </header><!-- Home Section -->

    <section class="bg-gradient-to-r from-blue-600 to-blue-800 text-white py-20 md:py-32 text-center">
        <div class="container mx-auto px-4">
            <h1 class="text-3xl md:text-5xl font-extrabold leading-tight mb-6">NeveStar: Inovação Tecnológica à Sua Medida em Moçambique</h1>
            <p class="text-lg md:text-xl max-w-3xl mx-auto mb-8">
                Desenvolvemos soluções de software de ponta para mobile, web, desktop e gestão empresarial, impulsionando o seu sucesso.
            </p>
            <a href="#services" class="bg-white text-blue-800 px-8 py-4 rounded-full text-lg font-semibold hover:bg-gray-100 transition duration-300 shadow-lg">Explorar Serviços</a>
        </div>
    </section>

    <section id="services" class="py-16 md:py-24 bg-gray-50">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-12">Nossos Serviços Especializados</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="bg-white p-8 rounded-lg shadow-md hover:shadow-lg transition duration-300 flex flex-col items-center">
                    <span class="service-icon mobile"></span>
                    <h3 class="text-xl font-semibold mb-3">Desenvolvimento Mobile</h3>
                    <p class="text-gray-600 mb-4">Criamos aplicações nativas e híbridas para iOS e Android, com design intuitivo e alta performance.</p>
                    <a href="#contact" class="text-blue-600 hover:underline font-medium">Saber Mais</a>
                </div>

                <div class="bg-white p-8 rounded-lg shadow-md hover:shadow-lg transition duration-300 flex flex-col items-center">
                    <span class="service-icon web"></span>
                    <h3 class="text-xl font-semibold mb-3">Desenvolvimento Web</h3>
                    <p class="text-gray-600 mb-4">Construímos websites dinâmicos, e-commerce robustos e sistemas web personalizados para sua empresa.</p>
                    <a href="#contact" class="text-blue-600 hover:underline font-medium">Saber Mais</a>
                </div>

                <div class="bg-white p-8 rounded-lg shadow-md hover:shadow-lg transition duration-300 flex flex-col items-center">
                    <span class="service-icon desktop"></span>
                    <h3 class="text-xl font-semibold mb-3">Desenvolvimento Desktop</h3>
                    <p class="text-gray-600 mb-4">Soluções desktop poderosas e eficientes para otimizar operações internas e fluxos de trabalho.</p>
                    <a href="#contact" class="text-blue-600 hover:underline font-medium">Saber Mais</a>
                </div>

                <div class="bg-white p-8 rounded-lg shadow-md hover:shadow-lg transition duration-300 flex flex-col items-center">
                    <span class="service-icon management"></span>
                    <h3 class="text-xl font-semibold mb-3">Sistemas de Gestão Empresarial</h3>
                    <p class="text-gray-600 mb-4">Implementamos ERP, CRM, BI e outras ferramentas para automação e inteligência de negócios.</p>
                    <a href="#contact" class="text-blue-600 hover:underline font-medium">Saber Mais</a>
                </div>
            </div>
        </div>
    </section>

    <section id="plans" class="py-16 md:py-24 bg-blue-100">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-12">Nossos Planos de Websites</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="bg-white p-8 rounded-lg shadow-md flex flex-col items-center justify-between">
                    <div>
                        <h3 class="text-2xl font-bold text-blue-700 mb-4">Sites Básicos</h3>
                        <p class="text-4xl font-extrabold mb-4">7.000,00 MZN</p>
                        <p class="text-gray-600 mb-6">Ideal para presença online simples e informativa.</p>
                        <ul class="text-gray-700 text-left mb-6 space-y-2">
                            <li>✔ Design Responsivo</li>
                            <li>✔ Páginas Essenciais (Início, Sobre, Contacto)</li>
                            <li>✔ Otimização Básica para Motores de Busca</li>
                            <li>✔ Suporte Limitado</li>
                        </ul>
                    </div>
                    <a href="#contact" class="bg-blue-600 text-white px-8 py-3 rounded-md hover:bg-blue-700 transition duration-300 font-semibold">Solicitar</a>
                </div>

                <div class="bg-white p-8 rounded-lg shadow-md flex flex-col items-center justify-between">
                    <div>
                        <h3 class="text-2xl font-bold text-blue-700 mb-4">Sites Normais</h3>
                        <p class="text-4xl font-extrabold mb-4">10.000,00 MZN</p>
                        <p class="text-gray-600 mb-6">Para negócios que precisam de mais funcionalidades e interatividade.</p>
                        <ul class="text-gray-700 text-left mb-6 space-y-2">
                            <li>✔ Tudo do Plano Básico</li>
                            <li>✔ Galeria de Imagens/Vídeos</li>
                            <li>✔ Formulários Avançados</li>
                            <li>✔ Integração com Redes Sociais</li>
                            <li>✔ Manutenção Mensal (básica)</li>
                        </ul>
                    </div>
                    <a href="#contact" class="bg-blue-600 text-white px-8 py-3 rounded-md hover:bg-blue-700 transition duration-300 font-semibold">Solicitar</a>
                </div>

                <div class="bg-white p-8 rounded-lg shadow-md flex flex-col items-center justify-between">
                    <div>
                        <h3 class="text-2xl font-bold text-blue-700 mb-4">Blogs</h3>
                        <p class="text-4xl font-extrabold mb-4">14.000,00 MZN</p>
                        <p class="text-gray-600 mb-6">Perfeito para criadores de conteúdo e empresas que buscam engajamento.</p>
                        <ul class="text-gray-700 text-left mb-6 space-y-2">
                            <li>✔ Funcionalidades de um Site Normal</li>
                            <li>✔ Sistema de Gestão de Conteúdo (CMS)</li>
                            <li>✔ Otimização Avançada para SEO</li>
                            <li>✔ Comentários e Compartilhamento</li>
                            <li>✔ Treinamento para Publicação</li>
                        </ul>
                    </div>
                    <a href="#contact" class="bg-blue-600 text-white px-8 py-3 rounded-md hover:bg-blue-700 transition duration-300 font-semibold">Solicitar</a>
                </div>

                <div class="bg-white p-8 rounded-lg shadow-md flex flex-col items-center justify-between">
                    <div>
                        <h3 class="text-2xl font-bold text-blue-700 mb-4">Sites Premium</h3>
                        <p class="text-4xl font-extrabold mb-4">+30.000,00 MZN</p>
                        <p class="text-gray-600 mb-6">Soluções completas e customizadas para grandes projetos e e-commerce robusto.</p>
                        <ul class="text-gray-700 text-left mb-6 space-y-2">
                            <li>✔ Todas as funcionalidades anteriores</li>
                            <li>✔ Desenvolvimento de E-commerce</li>
                            <li>✔ Integrações com Sistemas Externos (APIs)</li>
                            <li>✔ Análise de Dados e Relatórios</li>
                            <li>✔ Suporte Prioritário 24/7</li>
                        </ul>
                    </div>
                    <a href="#contact" class="bg-blue-600 text-white px-8 py-3 rounded-md hover:bg-blue-700 transition duration-300 font-semibold">Solicitar</a>
                </div>
            </div>
        </div>
    </section>

    <section id="about" class="py-16 md:py-24 bg-white">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-12">Porque Escolher a NeveStar?</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="p-6 rounded-lg text-center">
                    <div class="text-blue-600 text-5xl mb-4">⭐</div>
                    <h3 class="text-xl font-semibold mb-2">Equipe Experiente</h3>
                    <p class="text-gray-600">Profissionais qualificados e apaixonados por tecnologia, prontos para qualquer desafio.</p>
                </div>
                <div class="p-6 rounded-lg text-center">
                    <div class="text-blue-600 text-5xl mb-4">🔧</div>
                    <h3 class="text-xl font-semibold mb-2">Soluções Personalizadas</h3>
                    <p class="text-gray-600">Desenvolvimento sob medida para atender às necessidades específicas do seu negócio.</p>
                </div>
                <div class="p-6 rounded-lg text-center">
                    <div class="text-blue-600 text-5xl mb-4">📞</div>
                    <h3 class="text-xl font-semibold mb-2">Suporte Contínuo</h3>
                    <p class="text-gray-600">Garantimos acompanhamento e suporte técnico para a performance ideal das suas soluções.</p>
                </div>
                <div class="p-6 rounded-lg text-center">
                    <div class="text-blue-600 text-5xl mb-4">🇲🇿</div>
                    <h3 class="text-xl font-semibold mb-2">Foco em Moçambique</h3>
                    <p class="text-gray-600">Compreendemos o mercado local para oferecer soluções relevantes e impactantes.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="contact" class="bg-blue-700 text-white py-16 md:py-20 text-center">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl md:text-4xl font-bold mb-6">Transforme sua ideia em realidade com a NeveStar.</h2>
            <p class="text-lg mb-8 max-w-2xl mx-auto">
                Entre em contacto hoje mesmo e descubra como a nossa tecnologia pode impulsionar o seu negócio em Moçambique.
            </p>
            <a href="mailto:contacto@nevestar.co.mz" class="bg-white text-blue-700 px-2 md:px-8 py-4 rounded-full text-[18px] md:text-lg font-semibold hover:bg-gray-100 transition duration-300 shadow-lg">Obtenha um Orçamento Grátis</a>
        </div>
    </section>

    <footer class="footer bg-gray-900 text-white py-12">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 pb-8 border-b border-gray-700">
                <div class="md:col-span-1 flex flex-col items-start md:items-start">
                    <div class="w-36 md:w-28 overflow-hidden mx-auto md:mx-0">
                        <img src="{{ asset('assets/logo.png') }}" alt="Logo">
                        
                    </div>
                    <p class="text-white">
                        Sua parceira em tecnologia para desenvolvimento de software e gestão empresarial em Moçambique.
                    </p>
                </div>

                <div>
                    <h3 class="text-xl font-semibold mb-4">Links Rápidos</h3>
                    <ul class="text-gray-400 space-y-2">
                        <li><a href="#" class="hover:text-blue-400 transition duration-300">Inicio</a></li>
                        <li><a href="#services" class="hover:text-blue-400 transition duration-300">Serviços</a></li>
                        <li><a href="#plans" class="hover:text-blue-400 transition duration-300">Planos</a></li>
                        <li><a href="#about" class="hover:text-blue-400 transition duration-300">Sobre Nós</a></li>
                        <li><a href="#contact" class="hover:text-blue-400 transition duration-300">Contacto</a></li>
                    </ul>
                </div>

                <div>
                    <h3 class="text-xl font-semibold mb-4">Contacto</h3>
                    <p class="text-gray-400 mb-2">Email: <a href="mailto:contacto@nevestar.co.mz">contacto@nevestar.co.mz</a></p>
                    <p class="text-gray-400 mb-2">Telefone: <a href="tel:+258850492263">+258 85 049 2263</a></p>
                    <p class="text-gray-400 mb-4">Localização: <strong>Maxixe, Moçambique</strong></p>
                    <div class="flex space-x-3">
                        <a href="#" class="social-icon" aria-label="Facebook"><svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M19 0H5a5 5 0 00-5 5v14a5 5 0 005 5h14a5 5 0 005-5V5a5 5 0 00-5-5zm-3 7h-2v2h2v2h-2v4h-2V7h-2V5h4v2z"/></svg></a>
                        <a href="#" class="social-icon" aria-label="LinkedIn"><svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M19 0H5a5 5 0 00-5 5v14a5 5 0 005 5h14a5 5 0 005-5V5a5 5 0 00-5-5zM8 19H5V8h3v11zM6.5 6.75a1.75 1.75 0 110-3.5 1.75 1.75 0 010 3.5zM19 19h-3v-4.72c0-1.2-.42-2-1.49-2-.81 0-1.28.53-1.49 1.04-.08.18-.1.43-.1.68v5H10V8h3v1.85s.44-1.63 1.49-2.32c1.07-.69 2.51-.43 3.09 1.15.22.6.22 1.45.22 2.19V19z"/></svg></a>
                        <a href="#" class="social-icon" aria-label="Twitter"><svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M22.46 6c-.77.34-1.6.57-2.46.68.89-.53 1.57-1.37 1.89-2.37-.83.49-1.75.84-2.73 1.02-2.15-2.2-5.75-2.2-7.9 0C8.5 7.15 8 8.76 8 10.5v1c-4.48-.5-8.48-2.38-11.16-5.46C-.36 6.57 0 9.3 1.7 11.23c-.68-.02-1.3-.2-1.85-.5v.08c0 2.27 1.62 4.16 3.77 4.6-.39.11-.8.15-1.22.04.6 1.95 2.34 3.37 4.4 3.41C7 19.5 5 20.3 3 20.3c-.3 0-.6 0-.9-.05 2.1 1.34 4.56 2.12 7.22 2.12C16.92 22.38 21 16.5 21 10.5c0-.15 0-.3-.01-.45.96-.69 1.79-1.56 2.47-2.55z"/></svg></a>
                    </div>
                </div>
            </div>

            <div class="flex flex-col md:flex-row justify-between items-center pt-8 text-gray-400 text-sm">
                <p class="mb-2 md:mb-0">© 2025 NeveStar. Todos os direitos reservados. <a href="http://nevestar.co.mz" class="hover:text-blue-400 transition duration-300">NeveStar</a></p>
                <p>Criado com paixão pela tecnologia em Moçambique ❤️</p>
            </div>
        </div>
    </footer>

</body>
</html>
