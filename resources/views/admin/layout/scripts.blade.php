<!-- Outros modais (plan-modal, why-choose-us-modal, user-modal, role-modal) teriam uma estrutura similar -->
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const sidebarLinks = document.querySelectorAll('.sidebar-link');
        const pageContents = document.querySelectorAll('.page-content');
        const pageTitle = document.getElementById('page-title');
        const sidebar = document.getElementById('sidebar');
        const sidebarOverlay = document.getElementById('sidebar-overlay');

        // Function to open sidebar on mobile
        window.openSidebar = () => {
            sidebar.classList.add('open');
            sidebarOverlay.classList.add('active');
        };

        // Function to close sidebar on mobile
        window.closeSidebar = () => {
            sidebar.classList.remove('open');
            sidebarOverlay.classList.remove('active');
        };

        // Handle sidebar link clicks
        sidebarLinks.forEach(link => {
            link.addEventListener('click', function(e) {
                e.preventDefault();

                // Remove active class from all links
                sidebarLinks.forEach(item => item.classList.remove('active'));
                // Add active class to the clicked link
                this.classList.add('active');

                // Hide all page contents
                pageContents.forEach(content => content.classList.remove('active'));

                // Show the corresponding page content
                const targetId = this.getAttribute('href').substring(1);
                const targetPage = document.getElementById(targetId);
                if (targetPage) {
                    targetPage.classList.add('active');
                    // Update the header title
                    pageTitle.textContent = this.querySelector('span').textContent;
                }
                
                // Close sidebar on mobile after clicking a link
                if (window.innerWidth < 1024) {
                    closeSidebar();
                }
            });
        });

        // Handle initial page load to show dashboard
        const initialHash = window.location.hash;
        if (initialHash) {
            const initialTargetLink = document.querySelector(`.sidebar-link[href="${initialHash}"]`);
            if (initialTargetLink) {
                initialTargetLink.click();
            } else {
                document.querySelector('.sidebar-link[href="#dashboard"]').click();
            }
        } else {
            document.querySelector('.sidebar-link[href="#dashboard"]').click();
        }
    });

    // Universal function to open modals
    window.openModal = (modalId, mode = 'add', data = {}) => {
        const modal = document.getElementById(modalId);
        const modalTitle = modal.querySelector('h3');
        const form = modal.querySelector('form');

        // document.getElementById(modalId).classList.add('flex');
        // Reset form fields
        form.reset();
        // Clear any previous data attributes
        form.removeAttribute('data-mode');
        form.removeAttribute('data-original-title'); // Example for edit mode

        if (mode === 'edit') {
            modalTitle.textContent = 'Editar ' + modalId.replace('-modal', '').replace('-', ' ').replace(/\b\w/g, char => char.toUpperCase()); // Capitalize first letter of each word
            form.setAttribute('data-mode', 'edit');

            // Populate form fields based on modalId and data
            if (modalId === 'service-modal') {
                document.getElementById('service-input-title').value = data.title || '';
                document.getElementById('service-input-icon').value = data.icon || '';
                document.getElementById('service-input-description').value = data.description || '';
                form.setAttribute('data-original-title', data.title || ''); // Store original title for update logic
            } else if (modalId === 'plan-modal') {
                document.getElementById('plan-input-title').value = data.title || '';
                document.getElementById('plan-input-price').value = data.price || '';
                document.getElementById('plan-input-features').value = data.features || '';
                form.setAttribute('data-original-title', data.title || '');
            } else if (modalId === 'why-choose-us-modal') {
                document.getElementById('why-choose-us-input-title').value = data.title || '';
                document.getElementById('why-choose-us-input-icon').value = data.icon || '';
                document.getElementById('why-choose-us-input-description').value = data.description || '';
                form.setAttribute('data-original-title', data.title || '');
            } else if (modalId === 'page-modal') {
                document.getElementById('page-input-title').value = data.pageTitle || '';
                document.getElementById('page-input-content').value = data.content || '';
                // Page content might need a richer editor in a real application
            } else if (modalId === 'user-modal') {
                document.getElementById('user-input-name').value = data.name || '';
                document.getElementById('user-input-email').value = data.email || '';
                document.getElementById('user-input-role').value = data.role || '';
                document.getElementById('user-input-password').removeAttribute('required'); // Password is not required for edit
                document.getElementById('user-input-password').value = ''; // Clear password field on edit
                form.setAttribute('data-original-email', data.email || '');
            } else if (modalId === 'role-modal') {
                document.getElementById('role-input-name').value = data.roleName || '';
                form.setAttribute('data-original-name', data.roleName || '');
            }
        } else {
            modalTitle.textContent = 'Adicionar ' + modalId.replace('-modal', '').replace('-', ' ').replace(/\b\w/g, char => char.toUpperCase()); // Capitalize first letter of each word
                if (modalId === 'user-modal') {
                document.getElementById('user-input-password').setAttribute('required', 'required'); // Password required for add
            }
        }
        modal.classList.add('flex');
    };

    // Universal function to close modals
    window.closeModal = (modalId) => {
        document.getElementById(modalId).classList.remove('flex');
    };

    // --- Handle Form Submissions (Example Implementations) ---
    function handleServiceSubmit(event) {
        event.preventDefault();
        const form = event.target;
        const mode = form.getAttribute('data-mode');
        const title = document.getElementById('service-input-title').value;
        const icon = document.getElementById('service-input-icon').value;
        const description = document.getElementById('service-input-description').value;

        if (mode === 'edit') {
            const originalTitle = form.getAttribute('data-original-title');
            console.log(`Editar Serviço: Original: ${originalTitle}, Novo: ${title}, Ícone: ${icon}, Descrição: ${description}`);
            alert(`Serviço "${originalTitle}" atualizado para "${title}" (ícone: ${icon}, descrição: ${description})!`);
            // In a real application, you'd send this data to a backend API to update the service.
        } else {
            console.log(`Adicionar Serviço: Título: ${title}, Ícone: ${icon}, Descrição: ${description}`);
            alert(`Serviço "${title}" adicionado (ícone: ${icon}, descrição: ${description})!`);
            // In a real application, you'd send this data to a backend API to create a new service.
        }
        closeModal('service-modal');
    }

    function handlePlanSubmit(event) {
        event.preventDefault();
        const form = event.target;
        const mode = form.getAttribute('data-mode');
        const title = document.getElementById('plan-input-title').value;
        const price = document.getElementById('plan-input-price').value;
        const features = document.getElementById('plan-input-features').value;

        if (mode === 'edit') {
            const originalTitle = form.getAttribute('data-original-title');
            console.log(`Editar Plano: Original: ${originalTitle}, Novo: ${title}, Preço: ${price}, Características: ${features}`);
            alert(`Plano "${originalTitle}" atualizado para "${title}" (preço: ${price}, características: ${features})!`);
        } else {
            console.log(`Adicionar Plano: Título: ${title}, Preço: ${price}, Características: ${features}`);
            alert(`Plano "${title}" adicionado (preço: ${price}, características: ${features})!`);
        }
        closeModal('plan-modal');
    }

    function handleWhyChooseUsSubmit(event) {
        event.preventDefault();
        const form = event.target;
        const mode = form.getAttribute('data-mode');
        const title = document.getElementById('why-choose-us-input-title').value;
        const icon = document.getElementById('why-choose-us-input-icon').value;
        const description = document.getElementById('why-choose-us-input-description').value;

        if (mode === 'edit') {
            const originalTitle = form.getAttribute('data-original-title');
            console.log(`Editar Item "Porque Escolher-nos": Original: ${originalTitle}, Novo: ${title}, Ícone: ${icon}, Descrição: ${description}`);
            alert(`Item "${originalTitle}" atualizado para "${title}" (ícone: ${icon}, descrição: ${description})!`);
        } else {
            console.log(`Adicionar Item "Porque Escolher-nos": Título: ${title}, Ícone: ${icon}, Descrição: ${description}`);
            alert(`Item "${title}" adicionado (ícone: ${icon}, descrição: ${description})!`);
        }
        closeModal('why-choose-us-modal');
    }

    function handlePageContentSubmit(event) {
        event.preventDefault();
        const pageTitle = document.getElementById('page-input-title').value;
        const pageContent = document.getElementById('page-input-content').value;

        console.log(`Atualizar Conteúdo da Página "${pageTitle}": ${pageContent.substring(0, 50)}...`);
        alert(`Conteúdo da página "${pageTitle}" atualizado!`);
        closeModal('page-modal');
    }

    function handleContactSave(event) {
        event.preventDefault();
        const email = document.getElementById('email').value;
        const phone = document.getElementById('phone').value;
        const address = document.getElementById('address').value;

        console.log(`Contato Atualizado: Email: ${email}, Telefone: ${phone}, Localização: ${address}`);
        alert('Informações de contato salvas com sucesso!');
        // In a real application, you'd send this data to a backend API.
    }

    function handleUserSubmit(event) {
        event.preventDefault();
        const form = event.target;
        const mode = form.getAttribute('data-mode');
        const name = document.getElementById('user-input-name').value;
        const email = document.getElementById('user-input-email').value;
        const password = document.getElementById('user-input-password').value;
        const role = document.getElementById('user-input-role').value;

        if (mode === 'edit') {
            const originalEmail = form.getAttribute('data-original-email');
            console.log(`Editar Admin: Original: ${originalEmail}, Novo Nome: ${name}, Novo Email: ${email}, Novo Nível: ${role}`);
            alert(`Admin "${originalEmail}" atualizado para "${name}" (email: ${email}, nível: ${role})!`);
            // In a real application, you'd send this data to a backend API to update the user.
        } else {
            console.log(`Adicionar Admin: Nome: ${name}, Email: ${email}, Senha: ${password ? '*****' : 'Não fornecida'}, Nível: ${role}`);
            alert(`Admin "${name}" adicionado (email: ${email}, nível: ${role})!`);
            // In a real application, you'd send this data to a backend API to create a new user.
        }
        closeModal('user-modal');
    }

    function handleRoleSubmit(event) {
        event.preventDefault();
        const form = event.target;
        const mode = form.getAttribute('data-mode');
        const roleName = document.getElementById('role-input-name').value;

        if (mode === 'edit') {
            const originalName = form.getAttribute('data-original-name');
            console.log(`Editar Nível de Acesso: Original: ${originalName}, Novo Nome: ${roleName}`);
            alert(`Nível de Acesso "${originalName}" atualizado para "${roleName}"!`);
        } else {
            console.log(`Adicionar Nível de Acesso: Nome: ${roleName}`);
            alert(`Nível de Acesso "${roleName}" adicionado!`);
        }
        closeModal('role-modal');
    }

    document.addEventListener('DOMContentLoaded', function(){
        // Seleciona todos os botoes que têm o atributo data-dismiss="alert"
        const dismissButtons = document.querySelectorAll('[data-dismiss="alert"]');

        dismissButtons.forEach(button => {
            button.addEventListener('click', function(){
                // Encontra o elemento pai mais proximo que seja um alerta 
                // (ou seja, o div com as classes de alerta)
                const alertElement = this.closest('[role="alert"]');
                console.log("Clicou");
                if (alertElement) {
                    // Adiciona a classe para iniciar a transição de opacidade para 0
                    alertElement.classList.remove('opacity-100');
                    alertElement.classList.add('opacity-0');

                    // Espera a transição terminar antes de remover o elemento do DOM
                    // A duração da transição (300ms) deve corresponder à classe 'duration-300' no HTML
                    alertElement.addEventListener('transitionend', function() {
                        alertElement.remove(); // Remove o Elemento do DOM
                    }, { once: true }); // Garante que o evento seja executado apenas uma vez
                }
            });
        });

    });
</script>
<script src="{{ url('js/jquery.min.js') }}"></script>
<script src="{{ url('js/custom.js') }}"></script>