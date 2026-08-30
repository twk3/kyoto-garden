<?php

declare(strict_types=1);

/** @var array $site */
/** @var string $pageTitle */
/** @var string $metaDescription */
/** @var string $content */
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?= e($metaDescription) ?>">
    <meta name="theme-color" content="#29301f">
    <title><?= e($pageTitle) ?></title>
    <link rel="icon" href="/assets/favicon.svg?v=4" type="image/svg+xml">
    <link rel="icon" href="/assets/favicon-32.png?v=4" type="image/png" sizes="32x32">
    <link rel="apple-touch-icon" href="/assets/apple-touch-icon.png?v=4">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400;500;600&family=DM+Sans:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/assets/css/site.css">
</head>
<body>
    <a class="skip-link" href="#main">Skip to content</a>
    <?= $content ?>
</body>
</html>
