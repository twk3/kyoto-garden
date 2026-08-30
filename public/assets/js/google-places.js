(() => {
    const shell = document.querySelector('[data-google-places]');

    if (!shell) {
        return;
    }

    const apiKey = shell.dataset.apiKey;
    const status = shell.querySelector('[data-places-status]');
    const details = shell.querySelector('gmp-place-details');

    delete shell.dataset.apiKey;

    const showError = () => {
        shell.classList.add('has-error');
        if (status) {
            status.textContent = 'Reviews could not be loaded. Please read them on Google Maps.';
        }
    };

    window.initKyotoGardenPlaces = async () => {
        try {
            details?.addEventListener('gmp-error', showError, { once: true });

            await google.maps.importLibrary('places');
            shell.classList.add('is-loaded');
        } catch (error) {
            showError();
        }
    };

    const script = document.createElement('script');
    const parameters = new URLSearchParams({
        key: apiKey,
        loading: 'async',
        libraries: 'places',
        v: 'weekly',
        callback: 'initKyotoGardenPlaces',
    });

    script.src = `https://maps.googleapis.com/maps/api/js?${parameters.toString()}`;
    script.async = true;
    script.onerror = showError;
    document.head.append(script);
})();
