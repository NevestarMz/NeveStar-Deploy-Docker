@extends('layouts.layout')

@section('title')
    <title>Contacto - NeveStar | Fale Connosco em Moçambique</title>
@endsection

@section('meta_description', 'Entre em contacto com a NeveStar para soluções tecnológicas em Moçambique. Estamos prontos para atender suas dúvidas, oferecer orçamentos e iniciar seu projeto. Telefone, Email, Localização.')

@section('content')

    <section class="bg-gradient-to-r from-blue-600 to-blue-800 text-white py-24 md:py-40 text-center animated-section">
        <div class="container mx-auto px-6 flex flex-col items-center">
            <i class="fas fa-headset contact-hero-icon text-6xl"></i> {{-- Ícone representativo para 'Contacto' --}}
            <h1 class="text-4xl md:text-6xl font-extrabold leading-tight mb-8">Fale Connosco - A NeveStar Está Pronta para Ouvir Você</h1>
            <p class="text-lg md:text-2xl max-w-4xl mx-auto mb-10 opacity-90">
                Tem dúvidas, precisa de um orçamento ou quer começar um novo projeto? A nossa equipa está à disposição para ajudar.
            </p>
            <a href="#contact-methods" class="bg-white text-blue-800 px-8 py-4 rounded-full text-lg font-semibold hover:bg-gray-100 transition duration-300 shadow-lg animate-zoom-in delay-300">Nossas Formas de Contacto</a>
        </div>
    </section>

    <section id="contact-methods" class="py-20 md:py-32 bg-gray-50 animated-section">
        <div class="container mx-auto px-6">
            <div class="max-w-5xl mx-auto text-center">
                <h2 class="text-3xl md:text-5xl font-bold text-gray-900 mb-16">Como Podemos Ajudar Você?</h2>
                
                <p class="text-xl text-gray-700 mb-12 leading-relaxed">
                    Estamos ansiosos para discutir seu projeto e como a NeveStar pode impulsionar o seu sucesso. Escolha a forma de contacto que mais lhe convém.
                </p>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10 mt-16">
                    <div class="card p-8 text-center flex flex-col items-center">
                        <i class="fas fa-envelope text-blue-600 text-5xl mb-4"></i>
                        <h3 class="text-2xl font-semibold text-gray-900 mb-3">Email</h3>
                        <p class="text-gray-700 mb-4">Envie-nos um email a qualquer momento e responderemos o mais breve possível.</p>
                        <!-- <a href="mailto:contacto@nevestar.co.mz" class="text-blue-600 hover:underline font-medium text-lg">contacto@nevestar.co.mz</a> -->
                        <a href="mailto:contacto@nevestar.co.mz" class="text-blue-600 hover:underline font-medium text-lg">nevestar@nevestar.co.mz</a>
                    </div>
                    <div class="card p-8 text-center flex flex-col items-center">
                        <i class="fas fa-phone-alt text-blue-600 text-5xl mb-4"></i>
                        <h3 class="text-2xl font-semibold text-gray-900 mb-3">Telefone & WhatsApp</h3>
                        <p class="text-gray-700 mb-4">Fale diretamente com a nossa equipa para um atendimento rápido.</p>
                        <a href="tel:+258850492263" class="text-blue-600 hover:underline font-medium text-lg mb-2">+258 85 049 2263</a>
                        <a href="https://wa.me/258850492263" target="_blank" class="text-green-500 hover:underline font-medium text-lg flex items-center">
                            <i class="fab fa-whatsapp mr-2"></i> Enviar WhatsApp
                        </a>
                    </div>
                    <div class="card p-8 text-center flex flex-col items-center">
                        <i class="fas fa-map-marker-alt text-blue-600 text-5xl mb-4"></i>
                        <h3 class="text-2xl font-semibold text-gray-900 mb-3">Localização</h3>
                        <p class="text-gray-700 mb-4">Visite-nos em nosso escritório principal em Agostinho Neto - Maxixe, Moçambique.</p>
                        <address class="not-italic text-gray-700 mb-2">
                            EN. 6, Nhaguiviga, 3ª Rua<br>
                            Inhambane, Maxixe, Moçambique
                        </address>
                        <a href="https://www.google.com/maps/place/NeveStar/@-24.0355304,35.2790363,17z/data=!3m1!4b1!4m6!3m5!1s0x1f21d55c48166309:0xfa8c8ab1baa60467!8m2!3d-24.0355353!4d35.2816166!16s%2Fg%2F11xkdrzn7y!5m2!1e2!1e4?entry=ttu&g_ep=EgoyMDI1MDYwOS4wIKXMDSoASAFQAw%3D%3D" target="_blank" class="text-blue-600 hover:underline font-medium text-lg flex items-center">
                            <i class="fas fa-route mr-2"></i> Ver no Mapa
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 md:py-32 bg-white animated-section">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl md:text-5xl font-bold text-gray-900 mb-16 text-center">Envie-nos Uma Mensagem</h2>
            <div class="max-w-3xl mx-auto bg-gray-50 p-8 rounded-lg shadow-lg">
                <form action="#" method="POST" class="space-y-6">
                    @csrf {{-- Necessário para formulários Laravel --}}
                    <div>
                        <label for="name" class="block text-gray-700 text-lg font-semibold mb-2">Seu Nome Completo</label>
                        <input type="text" id="name" name="name" required class="w-full px-4 py-3 rounded-md border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-600 text-gray-900">
                    </div>
                    <div>
                        <label for="email" class="block text-gray-700 text-lg font-semibold mb-2">Seu Melhor Email</label>
                        <input type="email" id="email" name="email" required class="w-full px-4 py-3 rounded-md border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-600 text-gray-900">
                    </div>
                    <div>
                        <label for="phone" class="block text-gray-700 text-lg font-semibold mb-2">Telefone (Opcional)</label>
                        <input type="tel" id="phone" name="phone" class="w-full px-4 py-3 rounded-md border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-600 text-gray-900">
                    </div>
                    <div>
                        <label for="subject" class="block text-gray-700 text-lg font-semibold mb-2">Assunto</label>
                        <input type="text" id="subject" name="subject" required class="w-full px-4 py-3 rounded-md border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-600 text-gray-900">
                    </div>
                    <div>
                        <label for="message" class="block text-gray-700 text-lg font-semibold mb-2">Sua Mensagem</label>
                        <textarea id="message" name="message" rows="6" required class="w-full px-4 py-3 rounded-md border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-600 text-gray-900"></textarea>
                    </div>
                    <button type="submit" class="bg-blue-600 text-white px-8 py-4 rounded-md text-lg font-semibold hover:bg-blue-700 transition duration-300 shadow-lg w-full">Enviar Mensagem</button>
                </form>
            </div>
        </div>
    </section>

    <section class="py-16 md:py-24 bg-blue-100 animated-section">
        <div class="container mx-auto px-6 text-center">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-12">Onde Nos Encontrar</h2>
            <div class="bg-white rounded-lg shadow-lg overflow-hidden h-96">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29150.933821364997!2d35.24463419999999!3d-24.0357644!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1f21d55c48166309%3A0xfa8c8ab1baa60467!2sNeveStar!5e0!3m2!1spt-PT!2smz!4v1749677661534!5m2!1spt-PT!2smz" 
                    width="100%" 
                    height="100%" 
                    style="border:0;" 
                    allowfullscreen="" 
                    loading="lazy" 
                    referrerpolicy="no-referrer-when-downgrade">

                </iframe>
            </div>
            <p class="text-gray-700 mt-8 text-lg">
                Para um atendimento personalizado, agende uma visita ao nosso escritório.
            </p>
        </div>
    </section>

    <section class="bg-blue-700 text-white py-16 md:py-20 text-center animated-section">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl md:text-4xl font-bold mb-6">Pronto para Começar?</h2>
            <p class="text-lg mb-8 max-w-2xl mx-auto">
                Sua próxima inovação começa com uma conversa. Fale com os nossos especialistas!
            </p>
            <a href="mailto:contacto@nevestar.co.mz" class="bg-white text-blue-700 px-8 py-4 rounded-full text-lg font-semibold hover:bg-gray-100 transition duration-300 shadow-lg">Envie um Email Direto</a>
        </div>
    </section>

@endsection