@extends('layouts.layout')

@section('title')
    <title>Contacto - NeveStar | Fale Connosco em Moçambique</title>
@endsection

@section('meta_description', 'Entre em contacto com a NeveStar para soluções tecnológicas em Moçambique. Estamos prontos para atender suas dúvidas, oferecer orçamentos e iniciar seu projeto. Telefone, Email, Localização.')

@section('structured-data')
<script type="application/ld+json">
    {
        "@@context": "https://schema.org",
        "@@type": "ContactPage",
        "name": "Contacte-nos",
        "url": "https://nevestar.co.mz/contact",
        "description": "Entre em contacto com a NeveStar para obter suporte ou solicitar serviços em Moçambique.",
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

    <section class="relative min-h-screen flex items-center justify-center overflow-hidden text-white py-24 md:py-40 text-center">
        <div id="contact" class="absolute inset-0 z-0"> 
            <div class="absolute inset-0 bg-gradient-to-r from-blue-700/85 via-blue-700/75 to-blue-800/65"></div>
        </div>
        <div class="container relative mx-auto px-4 flex flex-col items-center">
            <!-- <i class="fas fa-headset contact-hero-icon text-6xl"></i> {{-- Ícone representativo para 'Contacto' --}} -->
            <h1 class="text-3xl md:text-5xl font-extrabold leading-tight mb-6">Fale Connosco - A NeveStar Está Pronta para Ouvir Você</h1>
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
                        <p class="text-gray-700 mb-4">Envie-nos um email para suporte técnico, parcerias ou dúvidas gerais. A nossa equipa analisará cada mensagem detalhadamente e responderemos com a máxima brevidade possível.</p>
                        <!-- <a href="mailto:contacto@nevestar.co.mz" class="text-blue-600 hover:underline font-medium text-lg">contacto@nevestar.co.mz</a> -->
                        <a href="mailto:contacto@nevestar.co.mz" class="text-blue-600 hover:underline font-medium text-lg">nevestar@nevestar.co.mz</a>
                    </div>
                    <div class="card p-8 text-center flex flex-col items-center">
                        <i class="fas fa-phone-alt text-blue-600 text-5xl mb-4"></i>
                        <h3 class="text-2xl font-semibold text-gray-900 mb-3">Telefone & WhatsApp</h3>
                        <p class="text-gray-700 mb-4">Fale com a nossa equipa para um atendimento rápido e personalizado. Estamos disponíveis para chamadas e mensagens de segunda a sexta-feira, das 08:00h às 17:00h.</p>
                        <a href="tel:+258850492263" class="text-blue-600 hover:underline font-medium text-lg mb-2">+258 85 049 2263</a>
                        <a href="https://wa.me/258850492263" target="_blank" class="text-green-500 hover:underline font-medium text-lg flex items-center">
                            <i class="fab fa-whatsapp mr-2"></i> Enviar WhatsApp
                        </a>
                    </div>
                    <div class="card p-8 text-center flex flex-col items-center">
                        <i class="fas fa-map-marker-alt text-blue-600 text-5xl mb-4"></i>
                        <h3 class="text-2xl font-semibold text-gray-900 mb-3">Localização</h3>
                        <p class="text-gray-700 mb-4">Visite-nos em nosso escritório principal em Benfica, Bairro Jorge Dimitrov  - KaMubukwana, Maputo.</p>
                        <address class="not-italic text-gray-700 mb-2">
                            Av. 4 de outubro, Rua Teodoro Gonçalves de Silva, <br>
                            Benfica - Maputo, Moçambique
                        </address>
                        <a href="https://maps.app.goo.gl/FF8d7PdBAatN6ypS7" target="_blank" class="text-blue-600 hover:underline font-medium text-lg flex items-center">
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
            <div class="max-w-3xl md:max-w-2xl mx-auto bg-gradient-to-br from-indigo-50 to-white p-8 rounded-lg shadow-lg">
                <h3 class="text-gray-500 font-bold text-xl mb-6 text-center">Preencha o formulário e em breve retornaremos.</h3>
                <form id="contactForm" method="POST" class="space-y-6">
                    @csrf {{-- Necessário para formulários Laravel --}}
                    <div class="space-y-4">
                        <div>
                            
                            <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Nome Completo</label>
                            <div class="relative mt-1 rounded-md shadow-sm">
                                <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                                    <i class="fas fa-user text-gray-400"></i>
                                </div>
                                <input type="text" id="name" name="name" placeholder="Seu nome" class="mt-1 block w-full pl-9 pr-2 py-2 border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors duration-200" required>
                            </div>
                        </div>
                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Endereço E-mail</label>
                            <div class="relative mt-1 rounded-md shadow-sm">
                                <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                                    <i class="fas fa-envelope text-gray-400"></i>
                                </div>
                                <input type="email" id="email" name="email" placeholder="email@exemplo.com" class="mt-1 block w-full pl-9 pr-2 py-2 border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors duration-200" required>
                            </div>
                        </div>
                        <div>
                            <label for="phone" class="block text-sm font-medium text-gray-700 mb-1">Telefone (Opcional)</label>
                            <div class="relative mt-1 rounded-md shadow-sm">
                                <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                                    <i class="fas fa-phone text-gray-400"></i>
                                </div>
                                <input type="tel" id="phone" name="phone" placeholder="+258 8X XXX XXXX" class="mt-1 block w-full pl-9 pr-2 py-2 border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors duration-200">
                            </div>
                        </div>
                        <div>
                            <label for="subject" class="block text-sm font-medium text-gray-700 mb-1">Assunto</label>
                            <div class="relative mt-1 rounded-md shadow-sm">
                            <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                                <i class="fas fa-tag text-gray-400"></i>
                            </div>
                                <input type="text" id="subject" name="subject" placeholder="Assunto da mensagem" class="mt-1 block w-full pl-9 pr-2 py-2 border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors duration-200" required>
                            </div>
                        </div>
                        <div>
                            <label for="message" class="block text-sm font-medium text-gray-700 mb-1">Sua Mensagem</label>
                            <textarea id="message" name="message" rows="4" placeholder="Escreva sua mensagem aqui..." class="mt-1 block w-full px-4 py-2 border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors duration-200" required></textarea>
                        </div>
                    </div>
                    
                    <div class="mt-6">
                        <button type="submit" class="w-full bg-blue-600 text-white font-semibold py-3 px-4 rounded-lg shadow-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition-all duration-300 transform hover:scale-105">
                            Enviar Mensagem
                        </button>
                    </div>
                </form>
                <!-- Modal de Confirmação -->
                <div id="successModal" class="hidden absolute inset-0 bg-gray-600 bg-opacity-50 overflow-y-auto h-full w-full flex items-center justify-center">
                    <div class="bg-white p-8 rounded-lg shadow-xl max-w-sm mx-auto text-center">
                        <svg class="mx-auto h-16 w-16 text-green-500 mb-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2l4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Mensagem Enviada!</h3>
                        <p class="text-gray-500 mb-4">Agradecemos o seu contacto. Retornaremos em breve. Por favor verifique a sua caixa de E-mais!</p>
                        <button id="closeModal" class="bg-indigo-600 text-white font-semibold py-2 px-4 rounded-lg hover:bg-indigo-700 transition-colors duration-200">
                            Fechar
                        </button>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <section class="py-16 md:py-24 bg-blue-100 animated-section">
        <div class="container mx-auto px-6 text-center">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-12">Onde Nos Encontrar</h2>
            <div class="bg-white rounded-lg shadow-lg overflow-hidden h-96">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3589.453071597061!2d32.56054869999999!3d-25.8874724!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1ee691db49e1c555%3A0x32abc59f44618e8f!2sNevestar!5e0!3m2!1spt-PT!2smz!4v1768976253731!5m2!1spt-PT!2smz" 
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
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const form = document.getElementById('contactForm');
            const successModal = document.getElementById('successModal');
            const closeModalBtn = document.getElementById('closeModal');
            const phoneInput = document.getElementById('phone');

            phoneInput.addEventListener('input', (e) => {
                let value = e.target.value.replace(/\D/g, ''); // Remove todos os caracteres não numéricos
                
                let formattedValue = '';
                const countryCode = '258';
                
                // Remove o código do país se já estiver na string
                if (value.startsWith(countryCode)) {
                    value = value.substring(countryCode.length);
                }
                
                // Formata os números restantes
                if (value.length > 0) {
                    formattedValue += value.substring(0, 2);
                }
                if (value.length > 2) {
                    formattedValue += ' ' + value.substring(2, 5);
                }
                if (value.length > 5) {
                    formattedValue += ' ' + value.substring(5, 9);
                }

                e.target.value = `+${countryCode} ${formattedValue}`.trim();
            });

            form.addEventListener('submit', function(event) {
                event.preventDefault();
                
                // Simula o envio do formulário (você pode substituir por uma chamada de API real)
                console.log('Formulário submetido!');
                
                // Exibe o modal de sucesso
                successModal.classList.remove('hidden');
            });

            closeModalBtn.addEventListener('click', function() {
                // Oculta o modal e reseta o formulário
                successModal.classList.add('hidden');
                form.reset();
            });
        });
    </script>

@endsection