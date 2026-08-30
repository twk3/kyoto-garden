<?php

declare(strict_types=1);

/** @var array $site */
/** @var string $googleMapsApiKey */
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex, nofollow">
    <meta name="theme-color" content="#faf7ef">
    <title>Guest reviews · <?= e($site['short_name']) ?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400;500;600&family=DM+Sans:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/assets/css/site.css">
</head>
<body class="reviews-widget-page">
    <?php if ($googleMapsApiKey !== ''): ?>
        <div
            class="google-reviews-shell"
            data-google-places
            data-api-key="<?= e($googleMapsApiKey) ?>"
        >
            <p class="google-reviews-status" data-places-status>Loading guest reviews…</p>
            <gmp-place-details>
                <gmp-place-details-place-request place="<?= e($site['google']['place_id']) ?>"></gmp-place-details-place-request>
                <gmp-place-content-config>
                    <gmp-place-media lightbox-preferred></gmp-place-media>
                    <gmp-place-rating></gmp-place-rating>
                    <gmp-place-reviews></gmp-place-reviews>
                    <gmp-place-attribution light-scheme-color="black" dark-scheme-color="white"></gmp-place-attribution>
                </gmp-place-content-config>
            </gmp-place-details>
        </div>
        <script src="/assets/js/google-places.js" defer></script>
    <?php else: ?>
        <div class="google-reviews-fallback">
            <p>Guest reviews are available on our Google Maps profile.</p>
            <a class="button button-secondary" href="<?= e($site['google']['reviews_url']) ?>" target="_blank" rel="noopener noreferrer">Read Google reviews <span aria-hidden="true">↗</span></a>
        </div>
    <?php endif; ?>
</body>
</html>
