import './bootstrap';

window.confirmDelete = function (id) {
    Swal.fire({
        title: "Tem certeza?",
        text: "Essa ação não pode ser desfeita!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#d33",
        cancelButtonColor: "#3085d6",
        confirmButtonText: "Sim, excluir!",
        cancelButtonText: "Cancelar"
    }).then((result) => {
        if (result.isConfirmed) {
            document.getElementById('delete-form-' + id).submit();
        }
    })
}

// Update current year in footer
document.getElementById('current-year').textContent = new Date().getFullYear();

// Toggle Mobile Menu
function toggleMobileMenu() {
    const mobileMenu = document.getElementById('mobile-menu');
    mobileMenu.classList.toggle('hidden');
}
document.getElementById('menu-button').addEventListener('click', toggleMobileMenu);

// Close mobile menu when a link is clicked
document.querySelectorAll('#mobile-menu a').forEach(link => {
    link.addEventListener('click', () => {
        const mobileMenu = document.getElementById('mobile-menu');
        if (!mobileMenu.classList.contains('hidden')) {
            mobileMenu.classList.add('hidden');
        }
    });
});

// Header Shadow on Scroll
const header = document.querySelector('.header');
window.addEventListener('scroll', () => {
    if (window.scrollY > 50) { // Add shadow after scrolling 50px
        header.classList.add('shadow-lg');
    } else {
        header.classList.remove('shadow-lg');
    }
});

// Intersection Observer for scroll animations
const animatedSections = document.querySelectorAll('.animated-section');

const observerOptions = {
    root: null, // viewport as root
    rootMargin: '0px',
    threshold: 0.1 // 10% of the section must be visible
};

const sectionObserver = new IntersectionObserver((entries, observer) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.add('is-visible');
            // Optional: uncomment to animate only once
            // observer.unobserve(entry.target);
        } else {
            // Optional: remove for repeat animation on scroll out/in
            // entry.target.classList.remove('is-visible');
        }
    });
}, observerOptions);

animatedSections.forEach(section => {
    sectionObserver.observe(section);
});

// Services Submenu Toggle for Desktop and Mobile
const desktopArrow = document.getElementById('desktopArrow'); // NOVO: Ícone de seta do desktop

// Desktop Services Submenu
const servicosBtnDesktop = document.getElementById('servicosBtnDesktop');
const servicosSubmenuDesktop = document.getElementById('servicosSubmenuDesktop');

if (servicosBtnDesktop && servicosSubmenuDesktop && desktopArrow) {
    // Toggle visibility on click
    servicosBtnDesktop.addEventListener('click', function() {
        servicosSubmenuDesktop.classList.toggle('hidden');
        desktopArrow.classList.toggle('rotate-180');
    });

    // Close when clicking outside
    document.addEventListener('click', function(event) {
        if (!servicosBtnDesktop.contains(event.target) && !servicosSubmenuDesktop.contains(event.target)) {
            servicosSubmenuDesktop.classList.add('hidden');
            desktopArrow.classList.remove('rotate-180');
        }
    });

    // Close when a submenu item is clicked
    servicosSubmenuDesktop.querySelectorAll('a').forEach(item => {
        item.addEventListener('click', function() {
            servicosSubmenuDesktop.classList.add('hidden');
        });
    });
}

// Mobile Services Submenu
const servicosBtnMobile = document.getElementById('servicosBtnMobile');
const servicosSubmenuMobile = document.getElementById('servicosSubmenuMobile');
const mobileArrow = document.getElementById('mobileArrow');

if (servicosBtnMobile && servicosSubmenuMobile && mobileArrow) {
    servicosBtnMobile.addEventListener('click', function() {
        servicosSubmenuMobile.classList.toggle('hidden');
        mobileArrow.classList.toggle('rotate-180');
    });

    // Close mobile menu and submenu when any link inside it is clicked
    // This covers all main menu links and submenu links
    mobileMenu.querySelectorAll('a').forEach(link => {
        link.addEventListener('click', function() {
            mobileMenu.classList.add('hidden');
            servicosSubmenuMobile.classList.add('hidden');
            mobileArrow.classList.remove('rotate-180');
        });
    });
}

// Optional: Close mobile menu when resizing to desktop
window.addEventListener('resize', function() {
    if (window.innerWidth >= 768) { // Tailwind's 'md' breakpoint
        mobileMenu.classList.add('hidden');
        servicosSubmenuMobile.classList.add('hidden');
        if (mobileArrow) {
            mobileArrow.classList.remove('rotate-180');
        }
    }
});

// Dados dos casos de sucesso
const cases = {
    'construtora-futura': {
        title: 'MozConstrua',
        description: 'A Construtora Futura enfrentava desafios na coordenação de projetos e no controle de custos. Implementamos um ERP customizado que integrou todas as fases da construção, desde o planejamento até a entrega. Isso permitiu uma visão 360° das operações, otimizando o uso de recursos e reduzindo desperdícios.',
        image: 'http://127.0.0.1/services/software/assets/img/MozConstrua.png',
        results: [
            'Redução de 15% nos custos operacionais.',
            'Aumento de 20% na eficiência da gestão de projetos.',
            'Melhora na precisão do controle de estoque de materiais.'
        ],
        technologies: 'SAP ERP, Microsoft SQL Server, Power BI'
    },
    'agrotech': {
        title: 'AgroTech ERP',
        description: 'Para a AgroTech, uma grande agroindústria, o desafio era gerenciar a complexa cadeia de suprimentos e a produção sazonal. Nossa solução ERP trouxe automação para o planejamento de safra, gestão de insumos e rastreabilidade de produtos, garantindo a qualidade e a conformidade.',
        image: 'https://placehold.co/600x400/E6F3F7/333333?text=Detalhes+AgroTech+ERP',
        results: [
            'Otimização de 25% na gestão de estoque de insumos.',
            'Redução de 10% no tempo de processamento de pedidos.',
            'Melhora na rastreabilidade dos produtos do campo à mesa.'
        ],
        technologies: 'Oracle ERP Cloud, Salesforce, Tableau'
    },
    'logistica-prime': {
        title: 'Logística Prime ERP',
        description: 'A Logística Prime precisava de um sistema robusto para gerenciar sua vasta frota e operações de transporte. Nosso ERP unificou a gestão de frotas, otimização de rotas, controle de armazéns e a contabilidade, resultando em maior agilidade e redução de custos logísticos.',
        image: 'https://placehold.co/600x400/F8F0E3/333333?text=Detalhes+Log%C3%ADstica+Prime+ERP',
        results: [
            'Aumento de 18% na eficiência das entregas.',
            'Redução de 12% nos custos de combustível e manutenção da frota.',
            'Melhora na visibilidade e controle de todas as operações logísticas.'
        ],
        technologies: 'Microsoft Dynamics 365, Azure, Qlik Sense'
    }
};

// Seleciona os elementos do DOM
const detailsButtons = document.querySelectorAll('.details-button');
const modal = document.getElementById('detailsModal');
const closeButton = document.querySelector('.close-button');
const modalTitle = document.getElementById('modalTitle');
const modalDescription = document.getElementById('modalDescription');
const modalImageContainer = document.getElementById('modalImageContainer');
const modalResults = document.getElementById('modalResults');
const modalTechnologies = document.getElementById('modalTechnologies');

// Adiciona um ouvinte de evento para cada botão "Ver Detalhes"
detailsButtons.forEach(button => {
    button.addEventListener('click', () => {
        const caseId = button.dataset.case; // Obtém o ID do caso do atributo data-case
        const caseData = cases[caseId]; // Pega os dados correspondentes

        if (caseData) {
            // Preenche o modal com os dados do caso
            modalTitle.textContent = caseData.title;
            modalDescription.textContent = caseData.description;

            // Adiciona a imagem ao modal
            modalImageContainer.innerHTML = `<img src="${caseData.image}" alt="${caseData.title}" class="w-full rounded-lg shadow-md">`;

            // Limpa e preenche os resultados chave
            modalResults.innerHTML = '';
            caseData.results.forEach(result => {
                const li = document.createElement('li');
                li.textContent = result;
                modalResults.appendChild(li);
            });

            modalTechnologies.textContent = caseData.technologies;

            // Exibe o modal
            modal.style.display = 'flex';
        }
    });
});

// Adiciona um ouvinte de evento para fechar o modal ao clicar no botão 'x'
closeButton.addEventListener('click', () => {
    modal.style.display = 'none';
});

// Adiciona um ouvinte de evento para fechar o modal ao clicar fora do conteúdo do modal
window.addEventListener('click', (event) => {
    if (event.target == modal) {
        modal.style.display = 'none';
    }
});