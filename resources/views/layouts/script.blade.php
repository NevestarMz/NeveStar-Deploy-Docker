<script>
    (function () {
    // ===== Config =====
    const KEY = 'nv_cookie_consent_v1'; // mude versão para resetar em produção
    const ROUTE = "{{ Route::has('cookies.accept') ? route('cookies.accept') : null }}";

    // ===== Helpers =====
    const $ = (sel) => document.querySelector(sel);
    const banner = $('#cookie-banner');
    const settings = $('#nv-cookie-settings'); // Modal de preferências
    const btnAcceptAll = $('#nv-accept-all');
    const btnAcceptSome = $('#nv-accept-some');
    const btnCustomize = $('#nv-adjust');
    const btnSave = $('#nv-save-preferences');
    const btnCancel = $('#nv-cancel-preferences');

    const analytics = $('#nv-analytics');
    const functional = $('#nv-functional');
    const marketing = $('#nv-marketing');

    if (!banner) return;

    // ===== Funções =====
    async function sendToBackend(preferences) {
        if (!ROUTE) return;
        try {
            const csrf = document.querySelector('meta[name="csrf-token"]')?.getAttribute('content');
            await fetch(ROUTE, {
                method: 'POST',
                headers: {
                    'Accept': 'application/json',
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': csrf || ''
                },
                body: JSON.stringify({ preferences })
            });
        } catch (err) {
            console.warn('NeveStar Cookies: backend indisponível', err);
        }
    }

    function persistConsent(preferences) {
        try {
            localStorage.setItem(KEY, JSON.stringify(preferences));
        } catch (e) {
            document.cookie = KEY + '=' + encodeURIComponent(JSON.stringify(preferences)) + ';path=/;max-age=' + (60*60*24*365);
        }
        banner.classList.add('hidden');
        settings?.classList.add('hidden');
        sendToBackend(preferences);

        // Carrega GA4 se analytics foi aceito
        if (preferences.includes('analytics')) {
            const script = document.createElement('script');
            script.async = true;
            script.src = "https://www.googletagmanager.com/gtag/js?id=G-PW4KWHND6J";
            document.head.appendChild(script);

            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());
            gtag('config', 'G-PW4KWHND6J');
        }
    }

    function loadPreferences() {
        const saved = JSON.parse(localStorage.getItem(KEY) || '[]');
        analytics.checked = saved.includes('analytics');
        functional.checked = saved.includes('functional');
        marketing.checked = saved.includes('marketing');
    }

    // ===== Eventos =====
    const onReady = () => {
        try {
            const saved = localStorage.getItem(KEY);
            if (saved) {
                banner.classList.add('hidden');
                return;
            }

            banner.classList.remove('hidden');

            btnCustomize?.addEventListener('click', () => {
                settings?.classList.toggle('hidden');
                settings?.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
                loadPreferences();
            });

            btnAcceptAll?.addEventListener('click', () => {
                persistConsent(['necessary', 'analytics', 'functional', 'marketing']);
            });

            btnAcceptSome?.addEventListener('click', () => {
                persistConsent(['necessary', 'analytics']); // Exemplo: apenas analytics + necessary
            });

            btnSave?.addEventListener('click', () => {
                const prefs = ['necessary'];
                if (analytics?.checked) prefs.push('analytics');
                if (functional?.checked) prefs.push('functional');
                if (marketing?.checked) prefs.push('marketing');
                persistConsent(prefs);
            });

            btnCancel?.addEventListener('click', () => {
                settings?.classList.add('hidden');
            });
        } catch (e) {
            console.warn('NeveStar Cookies: erro ao iniciar', e);
        }
    };

    // ===== Inicialização =====
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', onReady);
    } else {
        onReady();
    }
    window.addEventListener('turbo:load', onReady);
    document.addEventListener('livewire:navigated', onReady);
})();
</script>