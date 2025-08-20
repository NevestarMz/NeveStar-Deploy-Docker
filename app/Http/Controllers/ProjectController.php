<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    // Funcao de listar servicos
    public function show($projectId) 
    {
        // Lista de serviços (exemplo fixo, mas poderia vir do BD)
        $projectsData = [
            'agromz' => [
                'title' => "Portal AgroMZ",
                'tagline' => "Capacitando a comunidade agrícola Moçambicana com dados e tecnologia.",
                'status' => ['text' => "Online", 'class' => "bg-green-100 text-green-800"],
                'about' => "O Portal AgroMZ é uma plataforma digital robusta, concebida para ser o epicentro da informação agrícola em Moçambique. O seu principal objetivo é democratizar o acesso a dados cruciais de mercado, meteorologia e boas práticas, capacitando agricultores de pequena e grande escala a tomar decisões mais informadas. A longo prazo, o portal visa fortalecer a segurança alimentar e a sustentabilidade do setor agrícola no país.",
                'audience' => "Agricultores, cooperativas, investidores do agronegócio, estudantes de agronomia e decisores políticos.",
                'image' => "http://127.0.0.1/assets/img/AgroMZ.png",
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
                'audience' => "Provador virtual com Realidade Aumentada (em fase de prova de conceito), recomendações de produtos personalizadas por IA e uma experiência de checkout ultra-rápida.",
                'image' => "http://127.0.0.1/assets/img/ModaMZ.png",
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
                'audience' => "A plataforma é desenvolvida seguindo as melhores práticas de segurança, com encriptação de dados em repouso e em trânsito, e está a ser preparada para cumprir com as normas de proteção de dados como a LGPD.",
                'image' => "http://127.0.0.1/assets/img/SaudeMZ.png",
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
                    ['label' => "Impacto Esperado", 'value' => "Redução de 50% em tarefas administrativas"]
                ],
                'cta' => ['text' => "Solicitar Demonstração", 'link' => "#", 'enabled' => true, 'class' => "bg-sky-600 hover:bg-sky-700"]
            ],
            // Projectso de Software
            'construamz' => [
                'title' => "MozConstrua: Plataforma de Construção",
                'tagline' => "Sistema ERP customizado para gestão de projetos de construção, finanças e controle de materiais.",
                'status' => ['text' => "Em Desenvolvimento", 'class' => "bg-yellow-100 text-yellow-800"],
                'about' => "Gestão Clínica Pro é um sistema em nuvem (SaaS) que centraliza todas as operações de uma clínica. Desde o primeiro contacto do paciente até à faturação, a plataforma foi desenhada para ser intuitiva para médicos, rececionistas e administradores, libertando-os de tarefas manuais para que se possam focar no mais importante: o cuidado ao paciente.",
                'audience' => "A plataforma é desenvolvida seguindo as melhores práticas de segurança, com encriptação de dados em repouso e em trânsito, e está a ser preparada para cumprir com as normas de proteção de dados como a LGPD.",
                'image' => "http://127.0.0.1/assets/img/MozConstrua.png",
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
                    ['label' => "Impacto Esperado", 'value' => "Redução de 50% em tarefas administrativas"]
                ],
                'cta' => ['text' => "Solicitar Demonstração", 'link' => "#", 'enabled' => true, 'class' => "bg-sky-600 hover:bg-sky-700"]
            ],
            'agrotechmz' => [
                'title' => "MozAgroTech",
                'tagline' => "Solução ERP que otimizou a gestão da cadeia de suprimentos e produção para uma grande agroindústria.",
                'status' => ['text' => "Em Desenvolvimento", 'class' => "bg-yellow-100 text-yellow-800"],
                'about' => "Gestão Clínica Pro é um sistema em nuvem (SaaS) que centraliza todas as operações de uma clínica. Desde o primeiro contacto do paciente até à faturação, a plataforma foi desenhada para ser intuitiva para médicos, rececionistas e administradores, libertando-os de tarefas manuais para que se possam focar no mais importante: o cuidado ao paciente.",
                'audience' => "A plataforma é desenvolvida seguindo as melhores práticas de segurança, com encriptação de dados em repouso e em trânsito, e está a ser preparada para cumprir com as normas de proteção de dados como a LGPD.",
                'image' => "http://127.0.0.1/assets/img/MozAgroTech.png",
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
                    ['label' => "Impacto Esperado", 'value' => "Redução de 50% em tarefas administrativas"]
                ],
                'cta' => ['text' => "Solicitar Demonstração", 'link' => "#", 'enabled' => true, 'class' => "bg-sky-600 hover:bg-sky-700"]
            ],
            'logisticamz' => [
                'title' => "MozLogística",
                'tagline' => "Sistema integrado para gestão de frotas, transporte, estoque e contabilidade para uma empresa de logística.",
                'status' => ['text' => "Em Desenvolvimento", 'class' => "bg-yellow-100 text-yellow-800"],
                'about' => "Gestão Clínica Pro é um sistema em nuvem (SaaS) que centraliza todas as operações de uma clínica. Desde o primeiro contacto do paciente até à faturação, a plataforma foi desenhada para ser intuitiva para médicos, rececionistas e administradores, libertando-os de tarefas manuais para que se possam focar no mais importante: o cuidado ao paciente.",
                'audience' => "A plataforma é desenvolvida seguindo as melhores práticas de segurança, com encriptação de dados em repouso e em trânsito, e está a ser preparada para cumprir com as normas de proteção de dados como a LGPD.",
                'image' => "http://127.0.0.1/assets/img/MozLogistica.png",
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
                    ['label' => "Impacto Esperado", 'value' => "Redução de 50% em tarefas administrativas"]
                ],
                'cta' => ['text' => "Solicitar Demonstração", 'link' => "#", 'enabled' => true, 'class' => "bg-sky-600 hover:bg-sky-700"]
            ],
            // Projectos de Desktop
            'posmz' => [
                'title' => "POS System",
                'tagline' => "Software de Ponto de Venda (POS) robusto para gestão de vendas, inventário e relatórios, otimizado para operações de varejo.",
                'status' => ['text' => "Em Desenvolvimento", 'class' => "bg-yellow-100 text-yellow-800"],
                'about' => "Gestão Clínica Pro é um sistema em nuvem (SaaS) que centraliza todas as operações de uma clínica. Desde o primeiro contacto do paciente até à faturação, a plataforma foi desenhada para ser intuitiva para médicos, rececionistas e administradores, libertando-os de tarefas manuais para que se possam focar no mais importante: o cuidado ao paciente.",
                'audience' => "A plataforma é desenvolvida seguindo as melhores práticas de segurança, com encriptação de dados em repouso e em trânsito, e está a ser preparada para cumprir com as normas de proteção de dados como a LGPD.",
                'image' => "http://127.0.0.1/assets/img/POSMz.png",
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
                    ['label' => "Impacto Esperado", 'value' => "Redução de 50% em tarefas administrativas"]
                ],
                'cta' => ['text' => "Solicitar Demonstração", 'link' => "#", 'enabled' => true, 'class' => "bg-sky-600 hover:bg-sky-700"]
            ],
            'rhmz' => [
                'title' => "RHConnect: Gestão de Pessoal",
                'tagline' => "Aplicação desktop para gestão de recursos humanos, incluindo folha de pagamento, registo de funcionários e gestão de desempenho.",
                'status' => ['text' => "Em Desenvolvimento", 'class' => "bg-yellow-100 text-yellow-800"],
                'about' => "Gestão Clínica Pro é um sistema em nuvem (SaaS) que centraliza todas as operações de uma clínica. Desde o primeiro contacto do paciente até à faturação, a plataforma foi desenhada para ser intuitiva para médicos, rececionistas e administradores, libertando-os de tarefas manuais para que se possam focar no mais importante: o cuidado ao paciente.",
                'audience' => "A plataforma é desenvolvida seguindo as melhores práticas de segurança, com encriptação de dados em repouso e em trânsito, e está a ser preparada para cumprir com as normas de proteção de dados como a LGPD.",
                'image' => "http://127.0.0.1/assets/img/RHMz.png",
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
                    ['label' => "Impacto Esperado", 'value' => "Redução de 50% em tarefas administrativas"]
                ],
                'cta' => ['text' => "Solicitar Demonstração", 'link' => "#", 'enabled' => true, 'class' => "bg-sky-600 hover:bg-sky-700"]
            ],
            'gestaomz' => [
                'title' => "MozGestão: Plataforma de Gestão Empresarial",
                'tagline' => "Sistema CRM personalizado para gestão de clientes, histórico de interações e acompanhamento de vendas, impulsionando a satisfação do cliente.",
                'status' => ['text' => "Em Desenvolvimento", 'class' => "bg-yellow-100 text-yellow-800"],
                'about' => "Gestão Clínica Pro é um sistema em nuvem (SaaS) que centraliza todas as operações de uma clínica. Desde o primeiro contacto do paciente até à faturação, a plataforma foi desenhada para ser intuitiva para médicos, rececionistas e administradores, libertando-os de tarefas manuais para que se possam focar no mais importante: o cuidado ao paciente.",
                'audience' => "A plataforma é desenvolvida seguindo as melhores práticas de segurança, com encriptação de dados em repouso e em trânsito, e está a ser preparada para cumprir com as normas de proteção de dados como a LGPD.",
                'image' => "http://127.0.0.1/assets/img/MozGestao.png",
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
                    ['label' => "Impacto Esperado", 'value' => "Redução de 50% em tarefas administrativas"]
                ],
                'cta' => ['text' => "Solicitar Demonstração", 'link' => "#", 'enabled' => true, 'class' => "bg-sky-600 hover:bg-sky-700"]
            ],
            // Projectos Mobile
            'comprasmz' => [
                'title' => "MozCompras: E-commerce Local",
                'tagline' => "Aplicação de e-commerce robusta e intuitiva, desenhada para o mercado moçambicano, com gestão de produtos, pagamentos e logística integrada.",
                'status' => ['text' => "Em Desenvolvimento", 'class' => "bg-yellow-100 text-yellow-800"],
                'about' => "Gestão Clínica Pro é um sistema em nuvem (SaaS) que centraliza todas as operações de uma clínica. Desde o primeiro contacto do paciente até à faturação, a plataforma foi desenhada para ser intuitiva para médicos, rececionistas e administradores, libertando-os de tarefas manuais para que se possam focar no mais importante: o cuidado ao paciente.",
                'audience' => "A plataforma é desenvolvida seguindo as melhores práticas de segurança, com encriptação de dados em repouso e em trânsito, e está a ser preparada para cumprir com as normas de proteção de dados como a LGPD.",
                'image' => "http://127.0.0.1/assets/img/MozCompras.png",
                'features' => [
                    "<strong>Portal do Paciente:</strong> Área onde os pacientes podem marcar consultas, ver resultados de exames e comunicar com a clínica.",
                    "<strong>Prontuário Eletrónico Configurável:</strong> Modelos de anamnese e evolução adaptáveis a cada especialidade médica.",
                    "<strong>Faturação e Gestão Financeira:</strong> Emissão de faturas, controlo de pagamentos e relatórios financeiros."
                ],
                'tech' => [
                    "React Native", "Laravel", "PostgreSQL", "Inertia.js"
                ],
                'metrics' => [
                    ['label' => "Data de Lançamento", 'value' => "Brevemente"],
                    ['label' => "Impacto Esperado", 'value' => "Redução de 50% em tarefas administrativas"]
                ],
                'cta' => ['text' => "Solicitar Demonstração", 'link' => "#", 'enabled' => true, 'class' => "bg-sky-600 hover:bg-sky-700"]
            ],
            'eventosmz' => [
                'title' => "EventosMZ: Plataforma de Eventos",
                'tagline' => "App completa para gestão de eventos, desde o registo de participantes, agenda interativa, notificações em tempo real e bilhética digital.",
                'status' => ['text' => "Em Desenvolvimento", 'class' => "bg-yellow-100 text-yellow-800"],
                'about' => "Gestão Clínica Pro é um sistema em nuvem (SaaS) que centraliza todas as operações de uma clínica. Desde o primeiro contacto do paciente até à faturação, a plataforma foi desenhada para ser intuitiva para médicos, rececionistas e administradores, libertando-os de tarefas manuais para que se possam focar no mais importante: o cuidado ao paciente.",
                'audience' => "A plataforma é desenvolvida seguindo as melhores práticas de segurança, com encriptação de dados em repouso e em trânsito, e está a ser preparada para cumprir com as normas de proteção de dados como a LGPD.",
                'image' => "http://127.0.0.1/assets/img/EventosMoz.png",
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
                    ['label' => "Impacto Esperado", 'value' => "Redução de 50% em tarefas administrativas"]
                ],
                'cta' => ['text' => "Solicitar Demonstração", 'link' => "#", 'enabled' => true, 'class' => "bg-sky-600 hover:bg-sky-700"]
            ],
            'saudetopmz' => [
                'title' => "SaúdeTop: Bem-estar na Mão",
                'tagline' => "Aplicativo de saúde e bem-estar que oferece agendamento de consultas, lembretes de medicação e dicas de saúde personalizadas.",
                'status' => ['text' => "Em Desenvolvimento", 'class' => "bg-yellow-100 text-yellow-800"],
                'about' => "Gestão Clínica Pro é um sistema em nuvem (SaaS) que centraliza todas as operações de uma clínica. Desde o primeiro contacto do paciente até à faturação, a plataforma foi desenhada para ser intuitiva para médicos, rececionistas e administradores, libertando-os de tarefas manuais para que se possam focar no mais importante: o cuidado ao paciente.",
                'audience' => "A plataforma é desenvolvida seguindo as melhores práticas de segurança, com encriptação de dados em repouso e em trânsito, e está a ser preparada para cumprir com as normas de proteção de dados como a LGPD.",
                'image' => "http://127.0.0.1/assets/img/SaudeTop.png",
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
                    ['label' => "Impacto Esperado", 'value' => "Redução de 50% em tarefas administrativas"]
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
