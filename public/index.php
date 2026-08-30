<?php

declare(strict_types=1);

require dirname(__DIR__) . '/src/helpers.php';

$site = require dirname(__DIR__) . '/config/site.php';
$localConfigFile = dirname(__DIR__) . '/config/local.php';
$localConfig = is_file($localConfigFile) ? require $localConfigFile : [];
$googleMapsApiKey = is_array($localConfig) && is_string($localConfig['google_maps_api_key'] ?? null)
    ? trim($localConfig['google_maps_api_key'])
    : '';
$path = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH) ?: '/';

if ($path === '/reviews-widget' || $path === '/reviews-widget/') {
    header('X-Robots-Tag: noindex, nofollow');
    require dirname(__DIR__) . '/templates/reviews-widget.php';
    exit;
}

if ($path === '/' || $path === '/index.php') {
    render('home', [
        'site' => $site,
        'pageTitle' => $site['name'],
        'metaDescription' => $site['description'],
    ]);
    exit;
}

if ($path === '/privacy' || $path === '/privacy/') {
    render('privacy', [
        'site' => $site,
        'pageTitle' => 'Privacy · ' . $site['short_name'],
        'metaDescription' => 'Privacy information for the Kyoto Garden website.',
    ]);
    exit;
}

if ($path === '/terms' || $path === '/terms/') {
    render('terms', [
        'site' => $site,
        'pageTitle' => 'Terms · ' . $site['short_name'],
        'metaDescription' => 'Terms of use for the Kyoto Garden website.',
    ]);
    exit;
}

http_response_code(404);
render('not-found', [
    'site' => $site,
    'pageTitle' => 'Page not found',
    'metaDescription' => 'The requested page could not be found.',
]);
