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

