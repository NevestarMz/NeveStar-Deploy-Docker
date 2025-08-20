    @extends('layouts.layout')

    @section('content')
    <!-- O conteúdo principal agora é dinâmico -->
    {{-- O conteúdo principal é preenchido com as variáveis da view --}}
    <main class="container mx-auto px-6 py-12 lg:px-20 min-h-[60vh]">
        <section id="project-details" class="bg-white p-8 rounded-2xl shadow-lg overflow-hidden">
            <button onclick="history.back()" class="inline-flex items-center mb-5 justify-center rounded-xl border border-gray-300 bg-white px-6 py-3 font-medium text-gray-800 shadow-sm hover:bg-gray-50 transition">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24" fill="currentColor"><path d="M10 19l-7-7 7-7v14zm3-14h2v14h-2V5z"/></svg>
                Voltar à página anterior
            </button>
            <div class="grid grid-cols-1 gap-12 items-start">
                <div>
                    <div class="flex justify-between items-center mb-4">
                        <h2 id="project-title" class="text-3xl font-bold text-gray-900">{{ $project->title }}</h2>
                        <span id="project-status" class="text-sm font-medium px-3 py-1 rounded-full {{ $project->status['class'] }}">{{ $project->status['text'] }}</span>
                    </div>
                    <p id="project-tagline" class="font-medium mb-6">{{ $project->tagline }}</p>
                    <img id="project-image" 
                         src="{{ $project->image }}" 
                         alt="Imagem de destaque do projeto" 
                         class="rounded-xl shadow-md cursor-pointer hover:shadow-2xl hover:scale-105 transition-all duration-300 w-full lg:w-auto m-auto"
                         onclick="openModal(this.src)">
                </div>

                <div class="space-y-6">
                    <div>
                        <h3 class="text-xl font-semibold mb-3 text-gray-800 border-b-2 border-blue-200 pb-2">Sobre o Projeto</h3>
                        <p id="project-about" class="text-gray-600 leading-relaxed">{{ $project->about }}</p>
                    </div>
                    <div>
                        <h3 class="text-xl font-semibold mb-3 text-gray-800 border-b-2 border-blue-200 pb-2">Público-Alvo</h3>
                        <p id="project-audience" class="text-gray-600 leading-relaxed">{{ $project->audience }}</p>
                    </div>
                    <div>
                        <h3 class="text-xl font-semibold mb-4 text-gray-800 border-b-2 border-blue-200 pb-2">Funcionalidades Detalhadas</h3>
                        <ul id="project-features" class="space-y-3 text-gray-700">
                            @foreach ($project->features as $feature)
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-blue-500 mr-2 mt-1 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                                <span>{!! $feature !!}</span>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    <div>
                        <h3 class="text-xl font-semibold mb-3 text-gray-800 border-b-2 border-blue-200 pb-2">Tecnologias Utilizadas</h3>
                        <div id="project-tech" class="flex flex-wrap gap-3">
                            @foreach ($project->tech as $tech)
                            <span class="bg-gray-200 text-gray-700 text-sm font-medium px-3 py-1 rounded-full">{{ $tech }}</span>
                            @endforeach
                        </div>
                    </div>
                    <div>
                        <h3 class="text-xl font-semibold mb-3 text-gray-800 border-b-2 border-blue-200 pb-2">Métricas e Impacto</h3>
                        <div id="project-metrics" class="grid grid-cols-2 gap-6">
                            @foreach ($project->metrics as $metric)
                            <div>
                                <span class="text-sm text-gray-500 block">{{ $metric['label'] }}</span>
                                @if (isset($metric['rating']))
                                <div class="flex items-center">
                                    <p class="text-lg font-semibold text-gray-800 mr-2">{{ $metric['value'] }}</p>
                                    <div class="flex text-yellow-400">
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                                    </div>
                                </div>
                                @else
                                <p class="text-lg font-semibold text-gray-800">{{ $metric['value'] }}</p>
                                @endif
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div id="project-cta-container" class="pt-4">
                        <a href="{{ $project->cta['link'] }}" 
                           class="inline-block text-white font-semibold px-8 py-3 rounded-lg transition-all duration-300 shadow-lg hover:shadow-xl transform hover:-translate-y-1 {{ $project->cta['class'] }} @if (!$project->cta['enabled']) cursor-not-allowed @endif">
                            {{ $project->cta['text'] }}
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Modal para Visualização de Imagem -->
    <div id="imageModal" class="fixed inset-0 bg-black bg-opacity-80 flex justify-center items-center p-4 z-50 opacity-0 pointer-events-none" onclick="closeModal()">
        <img id="modalImage" src="" alt="Visualização ampliada" class="modal-image rounded-lg shadow-2xl" onclick="event.stopPropagation()">
        <button class="absolute top-4 right-4 text-white text-4xl font-bold hover:text-gray-300" onclick="closeModal()">&times;</button>
    </div>

    @endsection
    <script>
        // Função para preencher a página com os dados do projeto
        function renderProjectDetails(projectId) {
            const project = projectsData[projectId];
            const projectDetailsSection = document.getElementById('project-details');
            const welcomeMessage = document.getElementById('welcome-message');

            if (!project) {
                // Se o ID não for válido, exibe a mensagem de boas-vindas
                projectDetailsSection.classList.add('hidden');
                welcomeMessage.classList.remove('hidden');
                document.title = "Detalhes do Projeto NeveStar";
                return;
            }

            // Exibe a seção de detalhes e esconde a mensagem de boas-vindas
            projectDetailsSection.classList.remove('hidden');
            welcomeMessage.classList.add('hidden');

            // Atualiza os elementos HTML com os dados do projeto
            document.getElementById('project-title').textContent = project.title;
            document.getElementById('project-tagline').textContent = project.tagline;
            document.getElementById('project-status').textContent = project.status.text;
            document.getElementById('project-status').className = `text-sm font-medium px-3 py-1 rounded-full ${project.status.class}`;
            document.getElementById('project-about').textContent = project.about;
            document.getElementById('project-audience').textContent = project.audience;
            document.getElementById('project-image').src = project.image;

            // Altera o título da página
            document.title = `Detalhes do Projeto - ${project.title}`;

            // Preenche a lista de funcionalidades
            const featuresList = document.getElementById('project-features');
            featuresList.innerHTML = '';
            project.features.forEach(feature => {
                const li = document.createElement('li');
                li.className = "flex items-start";
                li.innerHTML = `
                    <svg class="w-5 h-5 text-blue-500 mr-2 mt-1 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                    <span>${feature}</span>`;
                featuresList.appendChild(li);
            });

            // Preenche as tecnologias
            const techContainer = document.getElementById('project-tech');
            techContainer.innerHTML = '';
            project.tech.forEach(tech => {
                const span = document.createElement('span');
                span.className = "bg-gray-200 text-gray-700 text-sm font-medium px-3 py-1 rounded-full";
                span.textContent = tech;
                techContainer.appendChild(span);
            });

            // Preenche as métricas
            const metricsContainer = document.getElementById('project-metrics');
            metricsContainer.innerHTML = '';
            project.metrics.forEach(metric => {
                const div = document.createElement('div');
                let valueContent = `<p class="text-lg font-semibold text-gray-800">${metric.value}</p>`;
                if (metric.rating) {
                    valueContent = `
                        <div class="flex items-center">
                            <p class="text-lg font-semibold text-gray-800 mr-2">${metric.value}</p>
                            <div class="flex text-yellow-400">
                                <!-- Ícones de estrela SVG, pode ser mais fácil de gerar dinamicamente se necessário -->
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                            </div>
                        </div>`;
                }
                div.innerHTML = `
                    <span class="text-sm text-gray-500 block">${metric.label}</span>
                    ${valueContent}
                `;
                metricsContainer.appendChild(div);
            });

            // Preenche o botão de ação (CTA)
            const ctaContainer = document.getElementById('project-cta-container');
            ctaContainer.innerHTML = `
                <a href="${project.cta.link}" 
                   class="inline-block text-white font-semibold px-8 py-3 rounded-lg transition-all duration-300 shadow-lg hover:shadow-xl transform hover:-translate-y-1 ${project.cta.class} ${!project.cta.enabled ? 'cursor-not-allowed' : ''}">
                    ${project.cta.text}
                </a>`;
        }

        // Função para detetar o ID do projeto a partir do hash da URL e carregar os dados
        function loadProjectFromHash() {
            const projectId = window.location.hash.substring(1); // Remove o '#'
            renderProjectDetails(projectId);
        }

        // Adiciona um ouvinte de evento para quando o hash da URL muda
        window.addEventListener('hashchange', loadProjectFromHash);

        // Carrega o projeto inicial quando a página é carregada pela primeira vez
        document.addEventListener("DOMContentLoaded", () => {
            // Script para menu mobile
            const menuBtn = document.getElementById('menu-btn');
            const mobileMenu = document.getElementById('mobile-menu');
            menuBtn.addEventListener('click', () => {
                mobileMenu.classList.toggle('hidden');
            });

            // Carrega o conteúdo do projeto
            loadProjectFromHash();
        });

        // Script para o Modal de Imagem (mantido do código anterior)
        const imageModal = document.getElementById('imageModal');
        const modalImage = document.getElementById('modalImage');

        function openModal(src) {
            console.log("Clicou na imagem.");
            console.log();
            modalImage.src = src;
            imageModal.classList.remove('opacity-0', 'pointer-events-none');
            document.body.style.overflow = 'hidden';
        }

        function closeModal() {
            imageModal.classList.add('opacity-0', 'pointer-events-none');
            document.body.style.overflow = 'auto';
        }

        document.addEventListener('keydown', function(event) {
            if (event.key === 'Escape') {
                closeModal();
            }
        });
    </script>