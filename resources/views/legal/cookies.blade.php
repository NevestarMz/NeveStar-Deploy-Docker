@extends('layouts.layout')

@section('title')
    <title>Política de Cookies | nevestar.co.mz</title>
@endsection

@section('content')

<!-- Secção de Cabeçalho -->
<header class="bg-blue-600 py-16">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h1 class="text-4xl sm:text-5xl font-extrabold tracking-tight text-white">Política de Cookies</h1>
        <p class="mt-4 text-lg text-white max-w-3xl mx-auto">
            Esta política detalha como o nevestar.co.mz utiliza cookies e outras tecnologias para melhorar a sua experiência, garantir a segurança e analisar o desempenho.
        </p>
        <div class="mt-8">
            <span class="text-sm text-blue-100">Última atualização: <time datetime="2025-08-20">20 de agosto de 2025</time></span>
        </div>
    </div>
</header>

<!-- Conteúdo Principal -->
<main class="bg-gray-50 py-16">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 max-w-5xl">
        <div class="space-y-12">
            
            <!-- 1. O que são Cookies? -->
            <section id="o-que-sao-cookies">
                <h2 class="text-3xl font-bold text-gray-900">1. O que são Cookies?</h2>
                <p class="mt-4 text-gray-700 leading-relaxed">
                    Cookies são pequenos ficheiros de texto armazenados no seu dispositivo quando visita um site. Eles contêm informações que permitem que o site se "lembre" de si e das suas preferências em visitas futuras. O seu uso é uma prática padrão na maioria dos sites profissionais.
                </p>
                <p class="mt-4 text-gray-700 leading-relaxed">
                    Utilizamos também outras tecnologias, como web beacons, que são pequenas imagens invisíveis que ajudam a analisar o tráfego do site, e armazenamento local (Local Storage) para guardar informações temporárias que melhoram o desempenho.
                </p>
            </section>

            <!-- 2. Tipos de Cookies e Sua Finalidade -->
            <section id="tipos-de-cookies">
                <h2 class="text-3xl font-bold text-gray-900">2. Tipos de Cookies e Sua Finalidade</h2>
                <p class="mt-4 text-gray-700 leading-relaxed">
                    Abaixo encontra uma tabela detalhada dos cookies que utilizamos no nosso site, categorizados pela sua finalidade, provedor e validade.
                </p>
                
                <div class="mt-6 overflow-x-auto rounded-xl border border-gray-200 shadow-sm">
                    <table class="min-w-full text-left text-sm">
                        <thead class="bg-gray-100 text-gray-600 uppercase text-xs font-semibold">
                            <tr>
                                <th class="px-5 py-3">Nome do Cookie</th>
                                <th class="px-5 py-3">Provedor</th>
                                <th class="px-5 py-3">Finalidade</th>
                                <th class="px-5 py-3">Validade</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200 text-gray-700">
                            <tr>
                                <td class="px-5 py-4 font-medium text-gray-900">`nevestar_session`</td>
                                <td class="px-5 py-4">nevestar.co.mz</td>
                                <td class="px-5 py-4">Essencial para manter a sua sessão de utilizador ativa e o carrinho de compras.</td>
                                <td class="px-5 py-4">Sessão</td>
                            </tr>
                            <tr>
                                <td class="px-5 py-4 font-medium text-gray-900">`_ga`</td>
                                <td class="px-5 py-4">Google Analytics</td>
                                <td class="px-5 py-4">Recolhe dados anónimos sobre como os visitantes usam o site. Usado para análise de tráfego e melhoria de desempenho.</td>
                                <td class="px-5 py-4">2 Anos</td>
                            </tr>
                            <tr>
                                <td class="px-5 py-4 font-medium text-gray-900">`_fbp`</td>
                                <td class="px-5 py-4">Facebook</td>
                                <td class="px-5 py-4">Utilizado para fornecer publicidade direcionada e medir o desempenho de campanhas.</td>
                                <td class="px-5 py-4">3 Meses</td>
                            </tr>
                            <tr>
                                <td class="px-5 py-4 font-medium text-gray-900">`cookie_consent`</td>
                                <td class="px-5 py-4">nevestar.co.mz</td>
                                <td class="px-5 py-4">Armazena a sua escolha de consentimento de cookies para visitas futuras.</td>
                                <td class="px-5 py-4">1 Ano</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <!-- Acordeão para categorias -->
                <div class="mt-8 accordion-container">
                    <div class="border border-gray-200 rounded-xl overflow-hidden">
                        <button class="accordion-header w-full flex items-center justify-between p-5 font-medium text-gray-800 hover:bg-gray-100 transition" type="button" data-accordion-target="categories-content">
                            <span>Categorias de Cookies Utilizados</span>
                            <svg class="accordion-icon w-5 h-5 text-gray-500 transform transition-transform duration-300" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M6 9l6 6 6-6"/></svg>
                        </button>
                        <div id="categories-content" class="accordion-content p-5 hidden text-sm text-gray-600">
                            <ul class="list-disc ml-5 space-y-2">
                                <li>Essenciais: Necessários para as funções básicas do site, como autenticação e processamento de compras. Não podem ser desativados nos nossos sistemas.</li>
                                <li>Desempenho e Análise: Permitem-nos contar visitas e fontes de tráfego, ajudando a melhorar o desempenho do nosso site e a entender as preferências dos nossos clientes.</li>
                                <li>Funcionalidade: Usados para personalizar a sua experiência, como memorizar o seu nome de utilizador ou preferências de idioma e moeda.</li>
                                <li>Publicidade: Permitem-nos criar um perfil dos seus interesses para mostrar anúncios relevantes fora do nosso site.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>

            <!-- 3. Cookies de Terceiros -->
            <section id="cookies-terceiros">
                <h2 class="text-3xl font-bold text-gray-900">3. Cookies de Terceiros</h2>
                <p class="mt-4 text-gray-700 leading-relaxed">
                    Para otimizar a sua experiência e fornecer serviços adicionais, o nosso site utiliza cookies de terceiros. Estes cookies são instalados por parceiros, como o Google Analytics e o Facebook Pixel, para nos ajudar a analisar o tráfego, medir a eficácia das campanhas de marketing e exibir anúncios relevantes.
                </p>
            </section>

            <!-- 4. Controlo das Suas Preferências -->
            <section id="controlo-preferencias">
                <h2 class="text-3xl font-bold text-gray-900">4. Controlo das Suas Preferências</h2>
                <p class="mt-4 text-gray-700 leading-relaxed">
                    Você pode gerir e revogar o seu consentimento para o uso de cookies a qualquer momento através do nosso painel de preferências.
                </p>
                <div class="mt-6 flex flex-col sm:flex-row gap-4">
                    <button type="button" id="nv-adjust" class="inline-flex items-center justify-center gap-2 rounded-xl bg-blue-600 px-6 py-3 text-white font-medium hover:bg-blue-700 transition focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-offset-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24" fill="currentColor"><path d="M3 6h18v2H3V6zm0 5h18v2H3v-2zm0 5h12v2H3v-2z"/></svg>
                        Abrir Painel de Preferências
                    </button>
                </div>
                <p class="mt-6 text-sm text-gray-600">
                    Você também pode gerir as suas preferências diretamente nas definições do seu navegador.
                </p>
            </section>
            
            <!-- 5. Base Legal para o Processamento de Dados -->
            <section id="base-legal">
                <h2 class="text-3xl font-bold text-gray-900">5. Base Legal para o Processamento de Dados</h2>
                <p class="mt-4 text-gray-700 leading-relaxed">
                    O processamento dos seus dados pessoais através de cookies é baseado no seu consentimento, exceto para os cookies estritamente necessários, que são essenciais para o funcionamento do nosso site e se baseiam no nosso legítimo interesse de fornecer o serviço.
                </p>
            </section>

            <!-- 6. Contactos e Alterações -->
            <section id="contactos">
                <h2 class="text-3xl font-bold text-gray-900">6. Contactos e Alterações</h2>
                <p class="mt-4 text-gray-700 leading-relaxed">
                    Esta política pode ser atualizada periodicamente. A data no topo da página será sempre a da última atualização. Se tiver dúvidas, por favor, contacte-nos:
                </p>
                <div class="mt-4">
                    <a href="mailto:nevestar@nevestar.co.mz" class="text-blue-600 hover:text-blue-800 font-medium">
                        nevestar@nevestar.co.mz
                    </a>
                </div>
            </section>

        </div>
    </div>
</main>

@endsection

@section('scripts')
<script>
    document.addEventListener('DOMContentLoaded', () => {
        // Seleciona todos os botões que têm o atributo data-accordion-target
        const accordionHeaders = document.querySelectorAll('[data-accordion-target]');

        accordionHeaders.forEach(header => {
            header.addEventListener('click', () => {
                // Obtém o ID do conteúdo do acordeão a partir do atributo
                const targetId = header.getAttribute('data-accordion-target');
                const content = document.getElementById(targetId);
                const icon = header.querySelector('.accordion-icon');

                // Garante que todos os outros acordeões estão fechados
                document.querySelectorAll('.accordion-content').forEach(c => {
                    if (c.id !== targetId && !c.classList.contains('hidden')) {
                        c.classList.add('hidden');
                        c.previousElementSibling.querySelector('.accordion-icon').style.transform = 'rotate(0deg)';
                    }
                });
                
                // Alterna a visibilidade do conteúdo do acordeão clicado
                content.classList.toggle('hidden');

                // Roda o ícone do botão para indicar se está aberto ou fechado
                if (!content.classList.contains('hidden')) {
                    icon.style.transform = 'rotate(180deg)';
                } else {
                    icon.style.transform = 'rotate(0deg)';
                }
            });
        });
    });
</script>
@endsection
