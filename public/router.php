<?php

declare(strict_types=1);

$requestPath = rawurldecode(parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH) ?: '/');
$publicRoot = __DIR__ . DIRECTORY_SEPARATOR;
$requestedFile = realpath(__DIR__ . $requestPath);

if (
    $requestPath !== '/'
    && $requestedFile !== false
    && str_starts_with($requestedFile, $publicRoot)
    && is_file($requestedFile)
) {
    return false;
}

require __DIR__ . '/index.php';
