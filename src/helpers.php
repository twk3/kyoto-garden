<?php

declare(strict_types=1);

/** Escape a value before placing it in HTML. */
function e(string $value): string
{
    return htmlspecialchars($value, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
}

/** Render a template inside the shared page layout. */
function render(string $template, array $data = []): void
{
    $templateFile = dirname(__DIR__) . '/templates/' . $template . '.php';

    if (!is_file($templateFile)) {
        throw new RuntimeException(sprintf('Template "%s" was not found.', $template));
    }

    extract($data, EXTR_SKIP);

    ob_start();
    require $templateFile;
    $content = (string) ob_get_clean();

    require dirname(__DIR__) . '/templates/layout.php';
}

/** Return a phone number stripped down for a tel: link. */
function phone_href(string $phone): string
{
    return preg_replace('/[^0-9+]/', '', $phone) ?? '';
}

