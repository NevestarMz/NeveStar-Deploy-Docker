@extends('layouts.layout')

@section('title')
    <title>Sobre Nós - NeveStar | A Sua Parceira em Tecnologia em Moçambique</title>
@endsection

@section('meta_description', 'Conheça a NeveStar: nossa história, missão, valores e a equipa por trás das soluções tecnológicas e inovadoras que impulsionam o seu negócio em Moçambique. Contacte-nos!')

@section('structured-data')
<script type="application/ld+json">
    {
        "@@context": "https://schema.org",
        "@@type": "AboutPage",
        "name": "Sobre Nós",
        "url": "https://nevestar.co.mz/about",
        "description": "Conheça a NeveStar: nossa história, missão, valores e a equipa por trás das soluções tecnológicas e inovadoras que impulsionam o seu negócio em Moçambique. Contacte-nos!",
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

    <section class="bg-gradient-to-r from-blue-600 to-blue-800 text-white py-24 md:py-40 text-center">
        <div class="container mx-auto px-6 flex flex-col items-center">
            <i class="fas fa-users-gear about-hero-icon text-6xl"></i> {{-- Ícone representativo para 'Sobre Nós' --}}
            <h1 class="text-3xl md:text-5xl font-extrabold leading-tight mb-6">Sobre a NeveStar - Construindo o Futuro Digital de Moçambique</h1>
            <p class="text-lg md:text-2xl max-w-4xl mx-auto mb-10 opacity-90">
                Descubra a história, a paixão e o compromisso da nossa equipa em transformar ideias em soluções tecnológicas inovadoras para empresas e indivíduos em Moçambique.
            </p>
            <a href="#contact-us" class="bg-white text-blue-800 px-8 py-4 rounded-full text-lg font-semibold hover:bg-gray-100 transition duration-300 shadow-lg animate-zoom-in delay-300">Fale com a Nossa Equipa</a>
        </div>
    </section>

    <section class="py-20 md:py-32 bg-gray-50 animated-section">
        <div class="container mx-auto px-4 flex flex-col items-center">
            <div class="max-w-5xl mx-auto text-center">
                <h2 class="text-3xl md:text-5xl font-bold text-gray-900 mb-12">Nossa História, Nossa Missão</h2>

                <p class="text-xl text-gray-700 mb-8 leading-relaxed">
                    A NeveStar nasceu da paixão por tecnologia e do desejo de impulsionar o crescimento digital em Moçambique. Desde o nosso início, dedicamo-nos a criar soluções inovadoras que não apenas atendem, mas superam as expectativas dos nossos clientes. Acreditamos que a tecnologia é a chave para desbloquear um futuro mais eficiente e conectado para todos.
                </p>
                <p class="text-xl text-gray-700 mb-12 leading-relaxed">
                    Nossa missão é ser a parceira tecnológica de eleição para empresas e indivíduos em Moçambique, oferecendo software, mobile, web e consultoria de alta qualidade que traduzem desafios em oportunidades, promovendo a inovação e o sucesso.
                </p>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mt-16">
                    <div class="card p-8 text-center flex flex-col items-center">
                        <i class="fas fa-lightbulb text-blue-600 text-5xl mb-4"></i>
                        <h3 class="text-2xl font-semibold text-gray-900 mb-3">Inovação</h3>
                        <p class="text-gray-700">Exploramos constantemente novas tecnologias para oferecer soluções criativas e de ponta.</p>
                    </div>
                    <div class="card p-8 text-center flex flex-col items-center">
                        <i class="fas fa-handshake text-blue-600 text-5xl mb-4"></i>
                        <h3 class="text-2xl font-semibold text-gray-900 mb-3">Parceria</h3>
                        <p class="text-gray-700">Construímos relacionamentos duradouros, trabalhando de perto com os clientes para atingir objetivos comuns.</p>
                    </div>
                    <div class="card p-8 text-center flex flex-col items-center">
                        <i class="fas fa-award text-blue-600 text-5xl mb-4"></i>
                        <h3 class="text-2xl font-semibold text-gray-900 mb-3">Excelência</h3>
                        <p class="text-gray-700">Comprometemo-nos com os mais altos padrões de qualidade em cada projeto que entregamos.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 md:py-32 bg-white animated-section">
        <div class="container mx-auto px-4 flex flex-col items-center">
            <h2 class="text-3xl md:text-5xl font-bold text-gray-900 mb-16">A Força da NeveStar - Nossos Especialistas</h2>
            <p class="text-xl text-gray-700 mb-12 max-w-4xl mx-auto">
                Nossa equipa é composta por profissionais apaixonados e altamente qualificados em diversas áreas da tecnologia. Combinamos experiência e criatividade para entregar soluções que fazem a diferença.
            </p>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
                <div class="bg-gray-50 p-8 rounded-lg shadow-md flex flex-col items-center card-hover-effect">
                    <img src="{{ asset('assets/team-member/rivaldo_perfil.png') }}" alt="Nome do Membro 1" class="w-32 h-32 rounded-full object-cover mb-6 border-4 border-blue-600">
                    <h3 class="text-2xl font-semibold text-gray-900 mb-2">Rivaldo António</h3>
                    <p class="text-blue-600 font-medium mb-3">CEO & Desenvolvedor de Software</p>
                    <p class="text-gray-700 text-center">Com mais de 3 anos de experiência, Rivaldo lidera a visão estratégica e arquitetura as soluções da NeveStar.</p>
                    <div class="flex space-x-4 mt-4">
                        <a href="#" class="text-gray-600 hover:text-blue-600"><i class="fab fa-linkedin text-xl"></i></a>
                        <a href="#" class="text-gray-600 hover:text-blue-600"><i class="fab fa-github text-xl"></i></a>
                    </div>
                </div>
                <div class="bg-gray-50 p-8 rounded-lg shadow-md flex flex-col items-center card-hover-effect">
                    <img src="{{ asset('assets/team-member/design.jpg') }}" alt="Nome do Membro 2" class="w-32 h-32 rounded-full object-cover mb-6 border-4 border-blue-600">
                    <h3 class="text-2xl font-semibold text-gray-900 mb-2">Carlos Mendes</h3>
                    <p class="text-blue-600 font-medium mb-3">Lead UX/UI Designer</p>
                    <p class="text-gray-700 text-center">Jonas garante que todas as nossas interfaces sejam intuitivas, bonitas e proporcionem a melhor experiência ao utilizador.</p>
                    <div class="flex space-x-4 mt-4">
                        <a href="#" class="text-gray-600 hover:text-blue-600"><i class="fab fa-linkedin text-xl"></i></a>
                        <a href="#" class="text-gray-600 hover:text-blue-600"><i class="fab fa-behance text-xl"></i></a>
                    </div>
                </div>
                <div class="bg-gray-50 p-8 rounded-lg shadow-md flex flex-col items-center card-hover-effect">
                    <img src="{{ asset('assets/team-member/dev.jpeg') }}" alt="Nome do Membro 3" class="w-32 h-32 rounded-full object-cover mb-6 border-4 border-blue-600">
                    <h3 class="text-2xl font-semibold text-gray-900 mb-2">Jonas Bento</h3>
                    <p class="text-blue-600 font-medium mb-3">Especialista em Desenvolvimento Software Mobile</p>
                    <p class="text-gray-700 text-center">Carlos é o nosso guru em mobile, transformando ideias complexas em aplicações móveis fluidas e de alta performance.</p>
                    <div class="flex space-x-4 mt-4">
                        <a href="#" class="text-gray-600 hover:text-blue-600"><i class="fab fa-linkedin text-xl"></i></a>
                        <a href="#" class="text-gray-600 hover:text-blue-600"><i class="fab fa-twitter text-xl"></i></a>
                    </div>
                </div>
                <div class="bg-gray-50 p-8 rounded-lg shadow-md flex flex-col items-center card-hover-effect">
                    <img src="{{ asset('assets/team-member/especialista.jpg') }}" alt="Nome do Membro 3" class="w-32 h-32 rounded-full object-cover mb-6 border-4 border-blue-600">
                    <h3 class="text-2xl font-semibold text-gray-900 mb-2">Pedro João</h3>
                    <p class="text-blue-600 font-medium mb-3">Especialista em Desenvolvimento Web</p>
                    <p class="text-gray-700 text-center">Pedro é o nosso cabeça em desenvolvimento Web, transformando ideias complexas em aplicações Web parudas e de alta performance.</p>
                    <div class="flex space-x-4 mt-4">
                        <a href="#" class="text-gray-600 hover:text-blue-600"><i class="fab fa-linkedin text-xl"></i></a>
                        <a href="#" class="text-gray-600 hover:text-blue-600"><i class="fab fa-twitter text-xl"></i></a>
                    </div>
                </div>
                {{-- Adicione mais membros da equipa conforme necessário --}}
            </div>
        </div>
    </section>

    <section class="py-16 md:py-24 bg-blue-100 animated-section">
        <div class="container mx-auto px-4 flex flex-col items-center">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-12 animate-fade-in-up">Nossos Valores Fundamentais</h2>
            <p class="text-lg text-gray-700 mb-16 max-w-4xl mx-auto">
                Na NeveStar, cada projeto é impulsionado por um conjunto de valores que guiam a nossa forma de trabalhar e o nosso compromisso com o seu sucesso.
            </p>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="p-6 rounded-lg bg-white text-center card-hover-effect animate-fade-in-up delay-100">
                    <i class="fas fa-handshake-angle text-blue-600 text-5xl mb-4"></i> {{-- Ícone adaptado --}}
                    <h3 class="text-xl font-semibold mb-2">Transparência</h3>
                    <p class="text-gray-600">Comunicamos de forma clara e honesta em todas as etapas do projeto.</p>
                </div>
                <div class="p-6 rounded-lg bg-white text-center card-hover-effect animate-fade-in-up delay-200">
                    <i class="fas fa-users-viewfinder text-blue-600 text-5xl mb-4"></i> {{-- Ícone adaptado --}}
                    <h3 class="text-xl font-semibold mb-2">Foco no Cliente</h3>
                    <p class="text-gray-600">Suas necessidades são nossa prioridade, garantindo soluções que geram valor real.</p>
                </div>
                <div class="p-6 rounded-lg bg-white text-center card-hover-effect animate-fade-in-up delay-300">
                    <i class="fas fa-certificate text-blue-600 text-5xl mb-4"></i> {{-- Ícone adaptado --}}
                    <h3 class="text-xl font-semibold mb-2">Qualidade</h3>
                    <p class="text-gray-600">Excelência em cada linha de código e cada interação, do início ao fim.</p>
                </div>
                <div class="p-6 rounded-lg bg-white text-center card-hover-effect animate-fade-in-up delay-400">
                    <i class="fas fa-earth-africa text-blue-600 text-5xl mb-4"></i> {{-- Ícone adaptado --}}
                    <h3 class="text-xl font-semibold mb-2">Impacto Local</h3>
                    <p class="text-gray-600">Compromisso com o desenvolvimento tecnológico e económico de Moçambique.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="contact-us" class="bg-blue-700 text-white py-20 md:py-28 text-center animated-section">
        <div class="container mx-auto px-4 flex flex-col items-center">
            <h2 class="text-3xl md:text-5xl font-bold mb-8 leading-tight">Vamos Construir Algo Incrível Juntos!</h2>
            <p class="text-lg md:text-xl mb-10 max-w-3xl mx-auto opacity-90">
                Seja para discutir um novo projeto, tirar dúvidas ou simplesmente conhecer mais sobre como a NeveStar pode ajudar, estamos prontos para ouvir você.
            </p>
            <a href="{{ route('pages.contact') }}" class="bg-white text-blue-800 px-8 py-4 rounded-full text-lg font-semibold hover:bg-gray-100 transition duration-300 shadow-lg animate-zoom-in delay-300">Entre em Contacto Agora</a>
        </div>
    </section>

@endsection