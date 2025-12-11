@extends('layouts.layout')

@section('title')
<title>Desenvolvimento Desktop - NeveStar | Soluções Tecnológicas em Moçambique</title>
@endsection

@section('meta_description', 'Desenvolvimento de software desktop robusto e personalizado em Moçambique. Otimize seus processos, melhore a produtividade e garanta performance com a NeveStar.')

@section('structured-data')
    <script type="application/ld+json">
    {
        "@@context": "https://schema.org",
        "@@type": "ServiceDasktopPage",
        "name": "Serviços de Desenvolvimento Desktop",
        "url": "https://nevestar.co.mz/services/desktop",
        "description": "Desenvolvimento de software desktop robusto e personalizado em Moçambique. Otimize seus processos, melhore a produtividade e garanta performance com a NeveStar.",
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
            <i class="fas fa-desktop desktop-hero-icon text-6xl"></i>
            <h1 class="text-3xl md:text-5xl font-extrabold leading-tight mb-6">Desenvolvimento Desktop - Poder e Performance ao Seu Alcance</h1>
            <p class="text-lg md:text-2xl max-w-4xl mx-auto mb-10 opacity-90">
                Crie soluções de software desktop personalizadas e robustas para otimizar operações internas, aumentar a produtividade e garantir segurança em Moçambique.
            </p>
            <a href="#contact-form" class="bg-white text-blue-800 px-8 py-4 rounded-full text-lg font-semibold hover:bg-gray-100 transition duration-300 shadow-lg animate-zoom-in delay-300">Solicitar Orçamento de Software Desktop</a>
        </div>
    </section>

    <section class="py-20 md:py-32 bg-gray-50 animated-section">
        <div class="container mx-auto px-4 flex flex-col items-center">
            <div class="max-w-5xl mx-auto">
                <h2 class="text-3xl md:text-5xl font-bold text-gray-900 mb-12 text-center">Software Desktop NeveStar: Eficiência e Controle para Seu Negócio</h2>

                <p class="text-xl text-gray-700 mb-12 leading-relaxed text-center">
                    Em um cenário onde a precisão e a segurança dos dados são cruciais, as aplicações desktop continuam a ser uma ferramenta poderosa para empresas em Moçambique. A NeveStar desenvolve software desktop sob medida, projetado para integração profunda com hardware, desempenho superior e segurança de dados inigualável, garantindo que suas operações críticas funcionem sem falhas. Desde sistemas de gestão a ferramentas de análise, entregamos soluções que capacitam sua equipa.
                </p>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-10 mt-16">
                    <div class="card p-8 text-center flex flex-col items-center">
                        <i class="fas fa-rocket text-blue-600 text-5xl mb-4"></i> {{-- Ícone adaptado --}}
                        <h3 class="text-2xl font-semibold text-gray-900 mb-3">Desempenho Otimizado</h3>
                        <p class="text-gray-700">Aproveite ao máximo o hardware local para operações complexas e de alta demanda, sem depender de conexão constante à internet.</p>
                    </div>
                    <div class="card p-8 text-center flex flex-col items-center">
                        <i class="fas fa-shield-alt text-blue-600 text-5xl mb-4"></i> {{-- Ícone adaptado --}}
                        <h3 class="text-2xl font-semibold text-gray-900 mb-3">Segurança Aprimorada</h3>
                        <p class="text-gray-700">Mantenha seus dados sensíveis seguros com controle rigoroso e funcionalidades de segurança robustas, ideal para informações confidenciais.</p>
                    </div>
                    <div class="card p-8 text-center flex flex-col items-center">
                        <i class="fas fa-sync-alt text-blue-600 text-5xl mb-4"></i> {{-- Ícone adaptado --}}
                        <h3 class="text-2xl font-semibold text-gray-900 mb-3">Controle e Integração Total</h3>
                        <p class="text-gray-700">Desenvolvemos soluções que se integram profundamente com seus sistemas existentes e periféricos, oferecendo um controle sem precedentes.</p>
                    </div>
                    <div class="card p-8 text-center flex flex-col items-center">
                        <i class="fas fa-users-cog text-blue-600 text-5xl mb-4"></i> {{-- Ícone adaptado --}}
                        <h3 class="text-2xl font-semibold text-gray-900 mb-3">Experiência de Usuário Dedicada</h3>
                        <p class="text-gray-700">Interfaces otimizadas para ambientes de trabalho intensivos, garantindo eficiência e redução de erros para sua equipa.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 md:py-32 bg-white animated-section">
        <div class="container mx-auto px-4 flex flex-col items-center">
            <h2 class="text-3xl md:text-5xl font-bold text-gray-900 mb-16 text-center">Nossas Abordagens e Metodologia em Desenvolvimento Desktop</h2>
            <div class="max-w-5xl mx-auto custom-bullet-list text-xl text-gray-700">
                <li>
                    <i class="fas fa-desktop icon"></i> {{-- Ícone adaptado --}}
                    <p><strong>Design Robusto de Interface:</strong> Criamos interfaces de utilizador (UI) desktop que são não só visualmente apelativas, mas também altamente funcionais e intuitivas, otimizadas para fluxos de trabalho complexos e uso prolongado.</p>
                </li>
                <li>
                    <i class="fas fa-database icon"></i> {{-- Ícone adaptado --}}
                    <p><strong>Integração de Base de Dados:</strong> Desenvolvemos e integramos bases de dados locais ou distribuídas para garantir que sua aplicação desktop gerencia e armazena dados de forma eficiente e segura, essencial para sistemas de gestão.</p>
                </li>
                <li>
                    <i class="fas fa-microchip icon"></i> {{-- Ícone adaptado --}}
                    <p><strong>Otimização de Performance:</strong> Focamos na otimização de código e recursos para garantir que sua aplicação desktop execute rapidamente, mesmo com grandes volumes de dados ou tarefas computacionalmente intensivas.</p>
                </li>
                <li>
                    <i class="fas fa-network-wired icon"></i> {{-- Ícone adaptado --}}
                    <p><strong>Integração com Sistemas Existentes:</strong> Nossas soluções desktop são projetadas para se integrarem perfeitamente com seu hardware, periféricos e outros softwares existentes, proporcionando um ecossistema tecnológico coeso.</p>
                </li>
                <li>
                    <i class="fas fa-lock icon"></i> {{-- Ícone adaptado --}}
                    <p><strong>Segurança e Confiabilidade:</strong> Implementamos medidas de segurança avançadas para proteger seus dados e garantir que a aplicação desktop seja resiliente a falhas e acessos não autorizados.</p>
                </li>
                <li>
                    <i class="fas fa-wrench icon"></i> {{-- Ícone adaptado --}}
                    <p><strong>Implantação e Manutenção Simplificadas:</strong> Oferecemos apoio completo na implantação da aplicação em sua infraestrutura e garantimos suporte e atualizações contínuas para a longevidade e performance do software.</p>
                </li>
            </div>
        </div>
    </section>

    <section class="py-20 md:py-32 bg-blue-50 animated-section">
        <div class="container mx-auto px-4 flex flex-col items-center">
            <h2 class="text-3xl md:text-5xl font-bold text-gray-900 mb-16 text-center">O Que Incluímos no Seu Projeto de Desenvolvimento Desktop</h2>
            <div class="max-w-5xl mx-auto grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="card p-6 text-center">
                    <i class="fas fa-search text-blue-600 text-4xl mb-4"></i>
                    <h3 class="text-xl font-semibold text-gray-900 mb-2">Análise de Requisitos</h3>
                    <p class="text-gray-700">Compreensão aprofundada da sua necessidade empresarial e dos requisitos técnicos para a solução desktop.</p>
                </div>
                <div class="card p-6 text-center">
                    <i class="fas fa-project-diagram text-blue-600 text-4xl mb-4"></i> {{-- Ícone adaptado --}}
                    <h3 class="text-xl font-semibold text-gray-900 mb-2">Arquitetura de Software</h3>
                    <p class="text-gray-700">Definição da estrutura técnica robusta e escalável para garantir a performance e manutenção a longo prazo.</p>
                </div>
                <div class="card p-6 text-center">
                    <i class="fas fa-paint-brush text-blue-600 text-4xl mb-4"></i>
                    <h3 class="text-xl font-semibold text-gray-900 mb-2">Design UI/UX</h3>
                    <p class="text-gray-700">Criação de interfaces de utilizador intuitivas e otimizadas para a eficiência no ambiente de trabalho.</p>
                </div>
                <div class="card p-6 text-center">
                    <i class="fas fa-cogs text-blue-600 text-4xl mb-4"></i> {{-- Ícone adaptado --}}
                    <h3 class="text-xl font-semibold text-gray-900 mb-2">Desenvolvimento Core</h3>
                    <p class="text-gray-700">Construção da lógica principal e funcionalidades da aplicação, garantindo robustez e desempenho.</p>
                </div>
                <div class="card p-6 text-center">
                    <i class="fas fa-server text-blue-600 text-4xl mb-4"></i>
                    <h3 class="text-xl font-semibold text-gray-900 mb-2">Integração de Base de Dados</h3>
                    <p class="text-gray-700">Configuração e integração de bases de dados locais ou de rede para gestão eficiente da informação.</p>
                </div>
                <div class="card p-6 text-center">
                    <i class="fas fa-plug text-blue-600 text-4xl mb-4"></i> {{-- Ícone adaptado --}}
                    <h3 class="text-xl font-semibold text-gray-900 mb-2">Integração de Hardware/APIs</h3>
                    <p class="text-gray-700">Conexão da aplicação com scanners, impressoras, sistemas de ponto de venda ou outras APIs.</p>
                </div>
                <div class="card p-6 text-center">
                    <i class="fas fa-bug text-blue-600 text-4xl mb-4"></i>
                    <h3 class="text-xl font-semibold text-gray-900 mb-2">Testes Rigorosos & QA</h3>
                    <p class="text-gray-700">Testes exaustivos para garantir a funcionalidade, segurança, desempenho e compatibilidade em diversas plataformas desktop.</p>
                </div>
                <div class="card p-6 text-center">
                    <i class="fas fa-box-open text-blue-600 text-4xl mb-4"></i> {{-- Ícone adaptado --}}
                    <h3 class="text-xl font-semibold text-gray-900 mb-2">Pacote de Instalação</h3>
                    <p class="text-gray-700">Criação de instaladores e documentação para uma implantação suave da aplicação em seus sistemas.</p>
                </div>
                <div class="card p-6 text-center">
                    <i class="fas fa-headset text-blue-600 text-4xl mb-4"></i>
                    <h3 class="text-xl font-semibold text-gray-900 mb-2">Manutenção & Suporte</h3>
                    <p class="text-gray-700">Suporte técnico contínuo, atualizações de segurança e otimizações para a longevidade do seu software desktop.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-gray-100 py-20 md:py-32 text-center animated-section">
        <div class="container mx-auto px-4 flex flex-col items-center">
            <h2 class="text-3xl md:text-5xl font-bold text-gray-900 mb-16">Portfólio NeveStar - Cases de Sucesso Desktop</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
                <div class="project-card">
                    <img src="{{ asset('assets/img/POSMz.png') }}" alt="Sistema POS Desktop" class="mb-6 object-cover">
                    <h3 class="text-xl font-semibold mb-3 text-gray-900">POS System</h3>
                    <p class="text-gray-700 mb-5">Software de Ponto de Venda (POS) robusto para gestão de vendas, inventário e relatórios, otimizado para operações de varejo.</p>
                    <a href="{{ route('details.detalhes', 'posmz') }}" class="details-button bg-blue-600 text-white px-6 py-3 rounded-lg font-semibold hover:bg-blue-700 transition duration-300 w-full" data="Clinica-Mz">Ver Detalhes</a>
                </div>
                <div class="project-card">
                    <img src="{{ asset('assets/img/RHMz.png') }}" alt="Sistema de Gestão de RH" class="mb-6 object-cover">
                    <h3 class="text-xl font-semibold mb-3 text-gray-900">RHConnect: Gestão de Pessoal</h3>
                    <p class="text-gray-700 mb-5">Aplicação desktop para gestão de recursos humanos, incluindo folha de pagamento, registo de funcionários e gestão de desempenho.</p>
                    <a href="{{ route('details.detalhes', 'rhmz') }}" class="details-button bg-blue-600 text-white px-6 py-3 rounded-lg font-semibold hover:bg-blue-700 transition duration-300 w-full" data="Clinica-Mz">Ver Detalhes</a>
                </div>
                <div class="project-card">
                    <img src="{{ asset('assets/img/MozGestao.png') }}" alt="Software CRM Personalizado" class="mb-6 object-cover">
                    <h3 class="text-xl font-semibold mb-3 text-gray-900">MozGestão</h3>
                    <p class="text-gray-700 mb-5">Sistema CRM personalizado para gestão de clientes, histórico de interações e acompanhamento de vendas, impulsionando a satisfação do cliente.</p>
                    <a href="{{ route('details.detalhes', 'gestaomz') }}" class="details-button bg-blue-600 text-white px-6 py-3 rounded-lg font-semibold hover:bg-blue-700 transition duration-300 w-full" data="Clinica-Mz">Ver Detalhes</a>
                </div>
            </div>
        </div>
    </section>

    <section id="contact-form" class="bg-blue-600 text-white py-20 md:py-28 text-center animated-section">
        <div class="container mx-auto px-6 flex flex-col items-center">
            <h2 class="text-3xl md:text-5xl font-bold mb-8 leading-tight">Potencialize Sua Empresa com Software Desktop NeveStar</h2>
            <p class="text-lg md:text-xl mb-10 max-w-3xl mx-auto opacity-90">
                Contacte-nos hoje mesmo para desenvolver uma solução desktop que oferece controle total, segurança e performance inigualável para o seu negócio em Moçambique.
            </p>
            <a href="mailto:contacto@nevestar.co.mz" class="bg-white text-blue-800 px-8 py-4 rounded-full text-lg font-semibold hover:bg-gray-100 transition duration-300 shadow-lg animate-zoom-in delay-300">Obtenha um Orçamento Personalizado</a>
        </div>
    </section>

@endsection