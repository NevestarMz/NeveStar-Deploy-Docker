<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    // Funcao de listar servicos
    public function show($projectId) 
    {
        // Lista de serviços (exemplo fixo, mas poderia vir do BD)
        // Dados de projectos
        $projectsData = [
            'agromz' => [
                'title' => "Portal AgroMZ",
                'tagline' => "Capacitando a comunidade agrícola Moçambicana com dados e tecnologia.",
                'status' => ['text' => "Online", 'class' => "bg-green-100 text-green-800"],
                'about' => "O Portal AgroMZ é uma plataforma digital robusta, concebida para ser o epicentro da informação agrícola em Moçambique. O seu principal objetivo é democratizar o acesso a dados cruciais de mercado, meteorologia e boas práticas, capacitando agricultores de pequena e grande escala a tomar decisões mais informadas. A longo prazo, o portal visa fortalecer a segurança alimentar e a sustentabilidade do setor agrícola no país.",
                'audience' => "Agricultores, cooperativas, investidores do agronegócio, estudantes de agronomia e decisores políticos.",
                'image' => "https://nevestar.co.mz/assets/img/AgroMZ.png",
                'features' => [
                    "<strong>Cotações do Mercado:</strong> Integração com fontes de dados locais e internacionais para fornecer preços em tempo real de milho, feijão, algodão, etc.",
                    "<strong>Previsão do Tempo Georreferenciada:</strong> Mapas interativos com previsões de chuva, temperatura e vento por distrito.",
                    "<strong>Biblioteca de Recursos:</strong> Guias práticos sobre controlo de pragas, técnicas de irrigação e gestão de colheitas."
                ],
                'tech' => [
                    "HTML5", "CSS3", "JavaScript (Chart.js)", "PHP/Laravel", "MySQL"
                ],
                'metrics' => [
                    ['label' => "Data de Lançamento", 'value' => "20 de Junho de 2023"],
                    ['label' => "Avaliação de Utilizadores", 'value' => "4.8", 'rating' => true]
                ],
                'cta' => ['text' => "Ver Projeto Ao Vivo", 'link' => "#", 'enabled' => true, 'class' => "bg-blue-600 hover:bg-blue-700"]
            ],
            'modamz' => [
                'title' => "ModaMZ E-commerce",
                'tagline' => "A experiência de compra de moda, reinventada para o mercado digital.",
                'status' => ['text' => "Em Desenvolvimento", 'class' => "bg-yellow-100 text-yellow-800"],
                'about' => "ModaMZ é uma plataforma de e-commerce de vanguarda, projetada para ser visualmente impactante e funcionalmente impecável. O foco está em criar uma jornada de compra imersiva, desde a descoberta do produto até ao checkout. A arquitetura headless (com API) garante performance e flexibilidade para futuras integrações, como aplicações móveis e assistentes virtuais.",
                'audience' => "Jovens e adultos interessados em moda, designers locais, pequenas e médias empresas do setor têxtil em Moçambique.",
                'image' => "https://nevestar.co.mz/assets/img/ModaMZ.png",
                'features' => [
                    "<strong>Catálogo Dinâmico:</strong> Filtros avançados (cor, tamanho, preço, estilo), busca preditiva e vídeos de produtos.",
                    "<strong>Gestão de Contas de Cliente:</strong> Histórico de pedidos, lista de desejos e gestão de moradas.",
                    "<strong>Integração de Pagamentos:</strong> Suporte para cartões de crédito, M-Pesa e PayPal."
                ],
                'tech' => [
                    "React/Next.js", "Node.js/Express", "MongoDB", "GraphQL", "TailwindCSS"
                ],
                'metrics' => [
                    ['label' => "Data de Lançamento", 'value' => "Brevemente"],
                    ['label' => "Avaliação de Utilizadores", 'value' => "N/A"]
                ],
                'cta' => ['text' => "Brevemente Online", 'link' => "#", 'enabled' => false, 'class' => "bg-gray-400 cursor-not-allowed"]
            ],
            'saudemz' => [
                'title' => "Gestão Clínica Pro",
                'tagline' => "A plataforma completa para a gestão eficiente e humanizada de clínicas.",
                'status' => ['text' => "Em Desenvolvimento", 'class' => "bg-yellow-100 text-yellow-800"],
                'about' => "Gestão Clínica Pro é um sistema em nuvem (SaaS) que centraliza todas as operações de uma clínica. Desde o primeiro contacto do paciente até à faturação, a plataforma foi desenhada para ser intuitiva para médicos, rececionistas e administradores, libertando-os de tarefas manuais para que se possam focar no mais importante: o cuidado ao paciente.",
                'audience' => "Clínicas médicas, hospitais, consultórios e profissionais de saúde.",
                'image' => "https://nevestar.co.mz/assets/img/SaudeMZ.png",
                'features' => [
                    "<strong>Portal do Paciente:</strong> Área onde os pacientes podem marcar consultas, ver resultados de exames e comunicar com a clínica.",
                    "<strong>Prontuário Eletrónico Configurável:</strong> Modelos de anamnese e evolução adaptáveis a cada especialidade médica.",
                    "<strong>Faturação e Gestão Financeira:</strong> Emissão de faturas, controlo de pagamentos e relatórios financeiros."
                ],
                'tech' => [
                    "Vue.js", "Laravel", "PostgreSQL", "Inertia.js", "Docker"
                ],
                'metrics' => [
                    ['label' => "Data de Lançamento", 'value' => "Brevemente"],
                    ['label' => "Avaliação de Utilizadores", 'value' => "N/A"]
                ],
                'cta' => ['text' => "Solicitar Demonstração", 'link' => "#", 'enabled' => true, 'class' => "bg-sky-600 hover:bg-sky-700"]
            ],
            // Projectos de Software
            'construamz' => [
                'title' => "MozConstrua: Plataforma de Construção",
                'tagline' => "Sistema ERP customizado para gestão de projetos de construção, finanças e controle de materiais.",
                'status' => ['text' => "Em Desenvolvimento", 'class' => "bg-yellow-100 text-yellow-800"],
                'about' => "O MozConstrua é um sistema de gestão empresarial (ERP) feito sob medida para a indústria da construção civil. A plataforma oferece uma visão 360° de todos os projetos, desde a fase de planeamento e orçamentação até à execução e finalização. O seu objetivo é otimizar a alocação de recursos, minimizar o desperdício e garantir a entrega de projetos dentro do prazo e do orçamento.",
                'audience' => "Construtoras, empreiteiros, gestores de obras e fornecedores de materiais de construção.",
                'image' => "https://nevestar.co.mz/assets/img/MozConstrua.png",
                'features' => [
                    "<strong>Gestão de Projetos:</strong> Controlo de cronogramas (Gantt), tarefas e responsabilidades.",
                    "<strong>Controlo de Materiais:</strong> Rastreamento de inventário em tempo real, gestão de compras e alertas de stock.",
                    "<strong>Faturação e Finanças:</strong> Emissão de faturas, controlo de fluxo de caixa e relatórios financeiros personalizados."
                ],
                'tech' => [
                    "Python/Django", "React", "PostgreSQL", "RESTful API"
                ],
                'metrics' => [
                    ['label' => "Data de Lançamento", 'value' => "Brevemente"],
                    ['label' => "Impacto Esperado", 'value' => "Redução de 30% em custos operacionais e aumento de 20% na eficiência de projetos."]
                ],
                'cta' => ['text' => "Solicitar Demonstração", 'link' => "#", 'enabled' => true, 'class' => "bg-sky-600 hover:bg-sky-700"]
            ],
            'agrotechmz' => [
                'title' => "MozAgroTech",
                'tagline' => "Solução ERP que otimizou a gestão da cadeia de suprimentos e produção para uma grande agroindústria.",
                'status' => ['text' => "Em Desenvolvimento", 'class' => "bg-yellow-100 text-yellow-800"],
                'about' => "O MozAgroTech é uma solução ERP robusta, criada para atender às necessidades complexas de grandes empresas do agronegócio. Ele integra todas as fases da produção, desde o planeamento da cultura, gestão da colheita, processamento, até a distribuição. A plataforma usa dados para prever rendimentos, otimizar o uso de recursos e garantir a rastreabilidade completa dos produtos.",
                'audience' => "Grandes agroindústrias, fazendas de grande escala, e cooperativas agrícolas.",
                'image' => "https://nevestar.co.mz/assets/img/MozAgroTech.png",
                'features' => [
                    "<strong>Planeamento de Produção:</strong> Gestão de ciclos de cultura, insumos e previsão de colheita.",
                    "<strong>Gestão de Frota:</strong> Rastreamento de veículos e máquinas agrícolas, controlo de manutenção e consumo de combustível.",
                    "<strong>Integração com Sensores IoT:</strong> Monitoramento de humidade do solo, temperatura e saúde da planta em tempo real."
                ],
                'tech' => [
                    "Python/Flask", "Angular", "PostgreSQL", "AWS IoT Core"
                ],
                'metrics' => [
                    ['label' => "Data de Lançamento", 'value' => "Brevemente"],
                    ['label' => "Impacto Esperado", 'value' => "Aumento de 15% na produtividade e redução de 25% no desperdício."]
                ],
                'cta' => ['text' => "Solicitar Demonstração", 'link' => "#", 'enabled' => true, 'class' => "bg-sky-600 hover:bg-sky-700"]
            ],
            'logisticamz' => [
                'title' => "MozLogística",
                'tagline' => "Sistema integrado para gestão de frotas, transporte, estoque e contabilidade para uma empresa de logística.",
                'status' => ['text' => "Em Desenvolvimento", 'class' => "bg-yellow-100 text-yellow-800"],
                'about' => "O MozLogística é uma solução completa para empresas de logística que buscam otimizar suas operações e reduzir custos. O sistema unifica a gestão de frotas, controlo de rotas, rastreamento de cargas, e controlo de estoque, tudo em uma única plataforma. Com relatórios detalhados e automação de tarefas, a plataforma garante a eficiência do início ao fim da cadeia de suprimentos.",
                'audience' => "Empresas de transporte, distribuidoras, gestores de frota e profissionais de logística.",
                'image' => "https://nevestar.co.mz/assets/img/MozLogistica.png",
                'features' => [
                    "<strong>Otimização de Rotas:</strong> Algoritmos inteligentes para definir as rotas mais eficientes, economizando tempo e combustível.",
                    "<strong>Rastreamento em Tempo Real:</strong> Monitoramento de veículos e cargas via GPS, com notificações de status e alertas.",
                    "<strong>Gestão de Documentos:</strong> Digitalização e organização de documentos de transporte, como manifestos e comprovantes de entrega."
                ],
                'tech' => [
                    "PHP/Laravel", "TailwindCSS", "Vue.js", "MySQL", "Google Maps API"
                ],
                'metrics' => [
                    ['label' => "Data de Lançamento", 'value' => "Brevemente"],
                    ['label' => "Impacto Esperado", 'value' => "Redução de 20% em custos de transporte e aumento de 30% na precisão de entregas."]
                ],
                'cta' => ['text' => "Solicitar Demonstração", 'link' => "#", 'enabled' => true, 'class' => "bg-sky-600 hover:bg-sky-700"]
            ],
            // Projectos de Desktop
            'posmz' => [
                'title' => "POS System",
                'tagline' => "Software de Ponto de Venda (POS) robusto para gestão de vendas, inventário e relatórios, otimizado para operações de varejo.",
                'status' => ['text' => "Em Desenvolvimento", 'class' => "bg-yellow-100 text-yellow-800"],
                'about' => "O POS System é uma solução de ponto de venda (PDV) de alto desempenho, desenhada para simplificar as operações de varejo. O software permite a gestão de vendas de forma rápida e segura, controlo de inventário em tempo real e emissão de relatórios detalhados. A interface intuitiva e a capacidade de operar offline tornam-no ideal para qualquer tipo de loja, de pequenos comércios a grandes cadeias.",
                'audience' => "Lojas de varejo, supermercados, restaurantes, farmácias e qualquer tipo de estabelecimento comercial.",
                'image' => "https://nevestar.co.mz/assets/img/POSMz.png",
                'features' => [
                    "<strong>Vendas Rápidas:</strong> Leitura de código de barras, busca de produtos e processamento de pagamentos em segundos.",
                    "<strong>Gestão de Inventário:</strong> Atualização automática de stock, alertas de baixo stock e relatórios de inventário.",
                    "<strong>Relatórios Financeiros:</strong> Dashboards e gráficos para analisar vendas, lucros e desempenho de produtos."
                ],
                'tech' => [
                    "C#/.NET", "WPF", "SQL Server", "LocalDB"
                ],
                'metrics' => [
                    ['label' => "Data de Lançamento", 'value' => "Brevemente"],
                    ['label' => "Impacto Esperado", 'value' => "Aumento de 20% na velocidade de checkout e 40% na precisão do inventário."]
                ],
                'cta' => ['text' => "Solicitar Demonstração", 'link' => "#", 'enabled' => true, 'class' => "bg-sky-600 hover:bg-sky-700"]
            ],
            'rhmz' => [
                'title' => "RHConnect: Gestão de Pessoal",
                'tagline' => "Aplicação desktop para gestão de recursos humanos, incluindo folha de pagamento, registo de funcionários e gestão de desempenho.",
                'status' => ['text' => "Em Desenvolvimento", 'class' => "bg-yellow-100 text-yellow-800"],
                'about' => "O RHConnect é uma aplicação desktop robusta para a gestão de todos os aspetos de recursos humanos. A plataforma centraliza dados de funcionários, automatiza a folha de pagamento, simplifica a gestão de desempenho e o processamento de benefícios. A sua segurança e controlo de acesso tornam-no ideal para empresas que precisam de gerir dados confidenciais de forma segura e eficiente.",
                'audience' => "Departamentos de Recursos Humanos, pequenas e médias empresas, e gestores de equipas.",
                'image' => "https://nevestar.co.mz/assets/img/RHMz.png",
                'features' => [
                    "<strong>Folha de Pagamento Automatizada:</strong> Cálculo de salários, impostos e contribuições com precisão.",
                    "<strong>Gestão de Desempenho:</strong> Avaliações de desempenho, definição de metas e acompanhamento de progresso.",
                    "<strong>Portal do Funcionário:</strong> Área para que funcionários possam aceder a contracheques, solicitar férias e atualizar informações pessoais."
                ],
                'tech' => [
                    "Java", "JavaFX", "SQLite", "JasperReports"
                ],
                'metrics' => [
                    ['label' => "Data de Lançamento", 'value' => "Brevemente"],
                    ['label' => "Impacto Esperado", 'value' => "Redução de 50% no tempo gasto em tarefas administrativas de RH."]
                ],
                'cta' => ['text' => "Solicitar Demonstração", 'link' => "#", 'enabled' => true, 'class' => "bg-sky-600 hover:bg-sky-700"]
            ],
            'gestaomz' => [
                'title' => "MozGestão: Plataforma de Gestão Empresarial",
                'tagline' => "Sistema CRM personalizado para gestão de clientes, histórico de interações e acompanhamento de vendas, impulsionando a satisfação do cliente.",
                'status' => ['text' => "Em Desenvolvimento", 'class' => "flex-row bg-yellow-100 text-yellow-800"],
                'about' => "MozGestão é um sistema de Gestão de Relacionamento com o Cliente (CRM) que centraliza todas as interações com o cliente, do primeiro contato ao pós-venda. Ele foi concebido para ajudar empresas a construir e manter relacionamentos sólidos, automatizar o processo de vendas e melhorar a comunicação interna. Com painéis personalizáveis, a plataforma oferece uma visão clara do funil de vendas e do desempenho da equipa.",
                'audience' => "Equipes de vendas, marketing, atendimento ao cliente e gestores de pequenas e médias empresas.",
                'image' => "https://nevestar.co.mz/assets/img/MozGestao.png",
                'features' => [
                    "<strong>Gestão de Leads e Oportunidades:</strong> Funis de vendas personalizados e automação de tarefas.",
                    "<strong>Histórico de Interações:</strong> Registo completo de chamadas, e-mails e reuniões, acessível em um só lugar.",
                    "<strong>Relatórios e Análises:</strong> Relatórios em tempo real sobre desempenho de vendas, satisfação do cliente e previsões."
                ],
                'tech' => [
                    "Vue.js", "Laravel", "PostgreSQL", "Inertia.js", "Docker"
                ],
                'metrics' => [
                    ['label' => "Data de Lançamento", 'value' => "Brevemente"],
                    ['label' => "Impacto Esperado", 'value' => "Aumento de 25% na taxa de conversão de leads e melhoria na satisfação do cliente."]
                ],
                'cta' => ['text' => "Solicitar Demonstração", 'link' => "#", 'enabled' => true, 'class' => "bg-sky-600 hover:bg-sky-700"]
            ],
            // Projectos Mobile
            'comprasmz' => [
                'title' => "MozCompras: E-commerce Local",
                'tagline' => "Aplicação de e-commerce robusta e intuitiva, desenhada para o mercado moçambicano, com gestão de produtos, pagamentos e logística integrada.",
                'status' => ['text' => "Em Desenvolvimento", 'class' => "bg-yellow-100 text-yellow-800"],
                'about' => "MozCompras é uma aplicação móvel de e-commerce que conecta consumidores moçambicanos a vendedores locais. A plataforma oferece uma experiência de compra fluida e segura, com catálogo de produtos, carrinho de compras, múltiplos métodos de pagamento (incluindo M-Pesa e e-Mola) e rastreamento de pedidos. A sua arquitetura foi otimizada para o mercado local, priorizando a velocidade e a confiabilidade.",
                'audience' => "Consumidores urbanos e rurais, pequenas empresas de varejo e empreendedores que buscam um canal de vendas digital.",
                'image' => "https://nevestar.co.mz/assets/img/MozCompras.png",
                'features' => [
                    "<strong>Catálogo de Produtos:</strong> Pesquisa inteligente, filtros avançados e recomendações personalizadas.",
                    "<strong>Integração de Pagamentos:</strong> Suporte para Mobile Money (M-Pesa, e-Mola) e pagamentos com cartão.",
                    "<strong>Rastreamento de Pedidos:</strong> Acompanhamento em tempo real do status da entrega, desde o processamento até à chegada."
                ],
                'tech' => [
                    "React Native", "Node.js", "Firebase", "MongoDB", "REST API"
                ],
                'metrics' => [
                    ['label' => "Data de Lançamento", 'value' => "Brevemente"],
                    ['label' => "Impacto Esperado", 'value' => "Ampliação do acesso a produtos para consumidores rurais e aumento de 35% nas vendas de pequenos negócios."]
                ],
                'cta' => ['text' => "Solicitar Demonstração", 'link' => "#", 'enabled' => true, 'class' => "bg-sky-600 hover:bg-sky-700"]
            ],
            'eventosmz' => [
                'title' => "EventosMZ: Plataforma de Eventos",
                'tagline' => "App completa para gestão de eventos, desde o registo de participantes, agenda interativa, notificações em tempo real e bilhética digital.",
                'status' => ['text' => "Em Desenvolvimento", 'class' => "bg-yellow-100 text-yellow-800"],
                'about' => "EventosMZ é a solução definitiva para organizadores e participantes de eventos. A aplicação oferece uma plataforma centralizada para a venda de bilhetes, gestão de inscrições e comunicação com os participantes. Com recursos como agenda interativa, mapas do local, e notificações push, ela transforma a experiência de eventos, tornando-a mais organizada e envolvente.",
                'audience' => "Organizadores de eventos, promotores, participantes de conferências, concertos e workshops.",
                'image' => "https://nevestar.co.mz/assets/img/EventosMoz.png",
                'features' => [
                    "<strong>Bilhética Digital:</strong> Venda de bilhetes online, leitura de QR code na entrada e relatórios de vendas em tempo real.",
                    "<strong>Agenda Interativa:</strong> Calendário de palestras e atividades, com a possibilidade de criar uma agenda pessoal.",
                    "<strong>Redes Sociais e Networking:</strong> Conecte-se com outros participantes e palestrantes, com perfis e mensagens diretas."
                ],
                'tech' => [
                    "Flutter", "Firebase", "Node.js", "Stripe API"
                ],
                'metrics' => [
                    ['label' => "Data de Lançamento", 'value' => "Brevemente"],
                    ['label' => "Impacto Esperado", 'value' => "Redução de 40% nas filas de entrada e aumento de 25% no engajamento dos participantes."]
                ],
                'cta' => ['text' => "Solicitar Demonstração", 'link' => "#", 'enabled' => true, 'class' => "bg-sky-600 hover:bg-sky-700"]
            ],
            'saudetopmz' => [
                'title' => "SaúdeTop: Bem-estar na Mão",
                'tagline' => "Aplicativo de saúde e bem-estar que oferece agendamento de consultas, lembretes de medicação e dicas de saúde personalizadas.",
                'status' => ['text' => "Em Desenvolvimento", 'class' => "bg-yellow-100 text-yellow-800"],
                'about' => "O SaúdeTop é um aplicativo móvel que capacita o utilizador a gerir a sua própria saúde. Ele oferece ferramentas como agendamento de consultas com profissionais de saúde, lembretes para tomar medicamentos e monitorização de bem-estar diário. Com uma interface simples e amigável, a aplicação visa ser um assistente pessoal de saúde para todos, promovendo hábitos saudáveis e prevenindo doenças.",
                'audience' => "Indivíduos que buscam gerir a sua saúde, pacientes com doenças crónicas, e qualquer pessoa interessada em bem-estar e fitness.",
                'image' => "https://nevestar.co.mz/assets/img/SaudeTop.png",
                'features' => [
                    "<strong>Agendamento de Consultas:</strong> Encontre e marque consultas com médicos e especialistas próximos, com lembretes automáticos.",
                    "<strong>Lembretes de Medicação:</strong> Receba notificações para tomar os seus medicamentos na hora certa e registre o histórico de adesão.",
                    "<strong>Monitoramento de Bem-estar:</strong> Acompanhe hábitos de sono, consumo de água e atividade física diária."
                ],
                'tech' => [
                    "Kotlin/Swift", "Firebase", "RESTful API", "Google Fit/Apple Health"
                ],
                'metrics' => [
                    ['label' => "Data de Lançamento", 'value' => "Brevemente"],
                    ['label' => "Impacto Esperado", 'value' => "Aumento de 50% na adesão a tratamentos e na conveniência de agendamentos."]
                ],
                'cta' => ['text' => "Solicitar Demonstração", 'link' => "#", 'enabled' => true, 'class' => "bg-sky-600 hover:bg-sky-700"]
            ]
        ];

        // Verifica se o projeto existe
        if (!isset($projectsData[$projectId])) {
            // Redireciona ou exibe uma página de erro 404 se o projeto não for encontrado
            return redirect('/');
        }

       $project = (object) $projectsData[$projectId];


        // Retorna a view 'datails.detalhes' e passa os dados do projeto
        return view('details.detalhes', ['project' => $project]);
    }
}
