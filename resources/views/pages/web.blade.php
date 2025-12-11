@extends('layouts.layout')

@section('title')
    <title>Desenvolvimento Web - NeveStar | Soluções Tecnológicas em Moçambique</title>
@endsection

@section('meta_description', 'Crie uma presença online de sucesso com a NeveStar. Desenvolvemos websites e sistemas web personalizados que impulsionam o seu negócio em Moçambique. Solicite um orçamento hoje mesmo!')

@section('structured-data')
    <script type="application/ld+json">
    {
        "@@context": "https://schema.org",
        "@@type": "ServiceWebPage",
        "name": "Desenvolvimento Web",
        "url": "https://nevestar.co.mz/services/web",
        "description": "Criamos websites e sistemas web personalizados que não apenas impressionam, mas também impulsionam o seu negócio, garantindo visibilidade e resultados no mercado moçambicano.",
        "publisher": {
            "@@type": "Organization",
            "name": "NeveStar"
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


    <section class="bg-gradient-to-r from-blue-600 to-blue-800 text-white py-24 md:py-40 text-center">
        <div class="container mx-auto px-6 flex flex-col items-center">
            <i class="fas fa-globe web-hero-icon text-6xl"></i>
            <h1 class="text-3xl md:text-5xl font-extrabold leading-tight mb-6">Desenvolvimento Web - Sua Presença Online de Sucesso em Moçambique</h1>
            <p class="text-lg md:text-2xl max-w-4xl mx-auto mb-10 opacity-90">
                Criamos websites e sistemas web personalizados que não apenas impressionam, mas também impulsionam o seu negócio, garantindo visibilidade e resultados no mercado moçambicano.
            </p>
            <a href="#contact-form" class="bg-white text-blue-800 px-8 py-4 rounded-full text-lg font-semibold hover:bg-gray-100 transition duration-300 shadow-lg">Solicitar Orçamento de Website</a>
        </div>
    </section>

    <section class="py-20 md:py-32 bg-gray-50 animated-section">
        <div class="container mx-auto px-4 flex flex-col items-center">
            <div class="max-w-5xl mx-auto">
                <h2 class="text-3xl md:text-5xl font-bold text-gray-900 mb-12 text-center">Porquê Investir num Website Profissional com a NeveStar?</h2>

                <p class="text-xl text-gray-700 mb-12 leading-relaxed text-center">
                    No atual cenário digital em Moçambique, um website não é apenas um cartão de visitas online; é uma poderosa ferramenta de negócios. A NeveStar é a sua parceira ideal para construir uma presença digital que gera valor real. Desenvolvemos soluções web de alto impacto, desde websites institucionais a complexos sistemas de e-commerce e portais de gestão, garantindo que a sua marca se destaque e prospere online.
                </p>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-10 mt-16">
                    <div class="card p-8 text-center flex flex-col items-center">
                        <i class="fas fa-handshake text-blue-600 text-5xl mb-4"></i>
                        <h3 class="text-2xl font-semibold text-gray-900 mb-3">Credibilidade Instantânea</h3>
                        <p class="text-gray-700">Um website profissional constrói confiança e estabelece a sua marca como líder no setor.</p>
                    </div>
                    <div class="card p-8 text-center flex flex-col items-center">
                        <i class="fas fa-globe-africa text-blue-600 text-5xl mb-4"></i>
                        <h3 class="text-2xl font-semibold text-gray-900 mb-3">Alcance Global e Local</h3>
                        <p class="text-gray-700">Conecte-se com clientes em todo Moçambique e além, 24 horas por dia, 7 dias por semana.</p>
                    </div>
                    <div class="card p-8 text-center flex flex-col items-center">
                        <i class="fas fa-chart-line text-blue-600 text-5xl mb-4"></i>
                        <h3 class="text-2xl font-semibold text-gray-900 mb-3">Oportunidades de Negócio</h3>
                        <p class="text-gray-700">Gere leads, venda produtos e serviços, e expanda o seu negócio de forma contínua.</p>
                    </div>
                    <div class="card p-8 text-center flex flex-col items-center">
                        <i class="fas fa-headset text-blue-600 text-5xl mb-4"></i>
                        <h3 class="text-2xl font-semibold text-gray-900 mb-3">Atendimento ao Cliente Otimizado</h3>
                        <p class="text-gray-700">Ofereça suporte, FAQs e recursos online, melhorando a experiência do cliente.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 md:py-32 bg-white animated-section">
        <div class="container mx-auto px-4 flex flex-col items-center">
            <h2 class="text-3xl md:text-5xl font-bold text-gray-900 mb-16 text-center">Nossas Especialidades e Abordagens em Desenvolvimento Web</h2>
            <div class="max-w-5xl mx-auto custom-bullet-list text-xl text-gray-700">
                <li>
                    <i class="fas fa-building icon"></i>
                    <p><strong>Websites Institucionais e Corporativos de Ponta:</strong> Criamos uma presença online que reflete a essência da sua marca, com design profissional, navegação intuitiva e conteúdo otimizado para transmitir credibilidade e captar a atenção do seu público.</p>
                </li>
                <li>
                    <i class="fas fa-shopping-cart icon"></i>
                    <p><strong>Plataformas de E-commerce e Lojas Online Seguras:</strong> Desenvolvemos lojas virtuais completas e seguras, com sistemas de pagamento integrados (incluindo opções de contas móveis locais, como o M-Pesa e E-Mola), gestão de stock, carrinho de compras e uma experiência de usuário fluida para maximizar as suas vendas.</p>
                </li>
                <li>
                    <i class="fas fa-cogs icon"></i>
                    <p><strong>Sistemas Web Personalizados (CRM, ERP, Portais):</strong> Criamos soluções web à medida para as suas necessidades específicas, como sistemas de gestão de clientes (CRM), planeamento de recursos empresariais (ERP) ou portais colaborativos. Automatize processos, aumente a produtividade e otimize a gestão interna da sua empresa.</p>
                </li>
                <li>
                    <i class="fas fa-blog icon"></i>
                    <p><strong>Blogs e Portais de Conteúdo Dinâmicos:</strong> Para empresas que desejam estabelecer autoridade e engajamento através de conteúdo relevante, desenvolvemos plataformas de blog e portais de notícias fáceis de gerir, com funcionalidades de partilha e otimização para leitores.</p>
                </li>
                <li>
                    <i class="fas fa-chart-bar icon"></i>
                    <p><strong>Otimização para Motores de Busca (SEO):</strong> A sua visibilidade é crucial. Integramos as melhores práticas de SEO desde o início do desenvolvimento, garantindo que o seu website seja bem posicionado no Google e outros motores de busca, atraindo tráfego qualificado organicamente.</p>
                </li>
                <li>
                    <i class="fas fa-mobile-alt icon"></i>
                    <p><strong>Design Responsivo para Todos os Dispositivos:</strong> Garantimos que o seu website oferece uma experiência impecável em qualquer ecrã, seja um desktop, tablet ou smartphone. Um design responsivo é fundamental para o alcance e a satisfação do utilizador.</p>
                </li>
                <li>
                    <i class="fas fa-server icon"></i>
                    <p><strong>Backend Robusto e Tecnologias Modernas:</strong> Utilizamos as tecnologias mais recentes e seguras para o desenvolvimento do backend do seu website, garantindo alta performance, escalabilidade e segurança dos dados.</p>
                </li>
            </div>
        </div>
    </section>

    <section class="py-20 md:py-32 bg-blue-50 animated-section">
        <div class="container mx-auto px-4 flex flex-col items-center">
            <h2 class="text-3xl md:text-5xl font-bold text-gray-900 mb-16 text-center">Nosso Processo de Desenvolvimento Web NeveStar - Transparência e Eficiência</h2>
            <div class="max-w-5xl mx-auto grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="card p-6 text-center">
                    <i class="fas fa-lightbulb text-blue-600 text-4xl mb-4"></i>
                    <h3 class="text-xl font-semibold text-gray-900 mb-2">1. Análise e Planeamento</h3>
                    <p class="text-gray-700">Compreendemos a sua visão, definimos objetivos claros e elaboramos um plano de projeto detalhado.</p>
                </div>
                <div class="card p-6 text-center">
                    <i class="fas fa-pencil-ruler text-blue-600 text-4xl mb-4"></i>
                    <h3 class="text-xl font-semibold text-gray-900 mb-2">2. Design UI/UX</h3>
                    <p class="text-gray-700">Criamos wireframes, mockups e protótipos interativos para garantir um design intuitivo e visualmente apelativo.</p>
                </div>
                <div class="card p-6 text-center">
                    <i class="fas fa-code text-blue-600 text-4xl mb-4"></i>
                    <h3 class="text-xl font-semibold text-gray-900 mb-2">3. Desenvolvimento & Codificação</h3>
                    <p class="text-gray-700">Convertemos o design em um website funcional, com código limpo, otimizado e seguro.</p>
                </div>
                <div class="card p-6 text-center">
                    <i class="fas fa-cogs text-blue-600 text-4xl mb-4"></i>
                    <h3 class="text-xl font-semibold text-gray-900 mb-2">4. Gestão de Conteúdo (CMS)</h3>
                    <p class="text-gray-700">Integramos sistemas de gestão de conteúdo amigáveis (WordPress, Joomla, etc.) para que possa gerir o seu site facilmente.</p>
                </div>
                <div class="card p-6 text-center">
                    <i class="fas fa-bug text-blue-600 text-4xl mb-4"></i>
                    <h3 class="text-xl font-semibold text-gray-900 mb-2">5. Testes e Garantia de Qualidade</h3>
                    <p class="text-gray-700">Realizamos testes rigorosos de funcionalidade, segurança, performance e compatibilidade em diversos dispositivos.</p>
                </div>
                <div class="card p-6 text-center">
                    <i class="fas fa-rocket text-blue-600 text-4xl mb-4"></i>
                    <h3 class="text-xl font-semibold text-gray-900 mb-2">6. Lançamento e Otimização</h3>
                    <p class="text-gray-700">Publicamos o seu website, configuramos o servidor e realizamos otimizações iniciais para motores de busca.</p>
                </div>
                <div class="card p-6 text-center">
                    <i class="fas fa-hands-helping text-blue-600 text-4xl mb-4"></i>
                    <h3 class="text-xl font-semibold text-gray-900 mb-2">7. Manutenção e Suporte Contínuo</h3>
                    <p class="text-gray-700">Oferecemos suporte técnico, atualizações de segurança e otimizações contínuas para a longevidade do seu website.</p>
                </div>
                <div class="card p-6 text-center">
                    <i class="fas fa-tachometer-alt text-blue-600 text-4xl mb-4"></i>
                    <h3 class="text-xl font-semibold text-gray-900 mb-2">8. Análise e Melhoria</h3>
                    <p class="text-gray-700">Monitorizamos o desempenho do site, fornecemos relatórios e sugerimos melhorias para maximizar os resultados.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-gray-100 py-20 md:py-32 text-center animated-section">
        <div class="container mx-auto px-4 flex flex-col items-center">
            <h2 class="text-3xl md:text-5xl font-bold text-gray-900 mb-16">Portfólio NeveStar - Projetos Web que Geram Impacto</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
                <div class="project-card">
                    <img src="{{ asset('assets/img/AgroMZ.png') }}" alt="Portal Agrícola Moçambicano" class="object-cover">
                    <h3 class="text-xl font-semibold mb-3 text-gray-900">Portal AgroMZ: Agricultura Digital</h3>
                    <p class="text-gray-700 mb-5">Um portal abrangente para a comunidade agrícola moçambicana, com notícias, cotações de produtos e recursos interativos.</p>
                    <a href="{{ route('details.detalhes', 'agromz') }}" class="details-button bg-blue-600 text-white px-6 py-3 rounded-lg font-semibold hover:bg-blue-700 transition duration-300 w-full">Ver Detalhes</a>
                </div>
                <div class="project-card">
                    <img src="{{ asset('assets/img/ModaMZ.png') }}" alt="Loja Online de Moda Moçambicana" class="object-cover">
                    <h3 class="text-xl font-semibold mb-3 text-gray-900">ModaMZ: E-commerce de Vestuário</h3>
                    <p class="text-gray-700 mb-5">Plataforma de e-commerce de moda com foco em design responsivo, experiência de compra intuitiva e integração com redes sociais.</p>
                    <a href="{{ route('details.detalhes', 'modamz') }}" class="details-button bg-blue-600 text-white px-6 py-3 rounded-lg font-semibold hover:bg-blue-700 transition duration-300 w-full">Ver Detalhes</a>
                </div>
                <div class="project-card">
                    <img src="{{ asset('assets/img/SaudeMZ.png') }}" alt="Sistema de Gestão para Clínicas" class="object-cover">
                    <h3 class="text-xl font-semibold mb-3 text-gray-900">Gestão Clínica Pro: Saúde Eficiente</h3>
                    <p class="text-gray-700 mb-5">Sistema web personalizado para clínicas, otimizando agendamentos, gestão de pacientes e prontuários eletrónicos.</p>
                    <a href="{{ route('details.detalhes', 'saudemz') }}" class="details-button bg-blue-600 text-white px-6 py-3 rounded-lg font-semibold hover:bg-blue-700 transition duration-300 w-full">Ver Detalhes</a>
                </div>
                </div>
        </div>
    </section>

    <section id="contact-form" class="bg-blue-600 text-white py-20 md:py-28 text-center animated-section">
        <div class="container mx-auto px-4 flex flex-col items-center">
            <h2 class="text-3xl md:text-5xl font-bold mb-8 leading-tight">Pronto para criar um Website de Alto Impacto e Sucesso em Moçambique?</h2>
            <p class="text-lg md:text-xl mb-10 max-w-3xl mx-auto opacity-90">
                Fale com a nossa equipa de especialistas da NeveStar para discutir o seu projeto web e receber um orçamento personalizado que impulsionará a sua presença digital.
            </p>
            <a href="mailto:contacto@nevestar.co.mz" class="bg-white text-blue-800 px-8 py-4 rounded-full text-lg font-semibold hover:bg-gray-100 transition duration-300 shadow-lg animate-zoom-in delay-300">Fale Connosco</a>
        </div>
    </section>
    
@endsection