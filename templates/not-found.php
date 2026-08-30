<?php

declare(strict_types=1);

/** @var array $site */
?>
<main id="main" class="error-page">
    <a class="brand" href="/">
        <span><?= e($site['short_name']) ?></span>
    </a>
    <div>
        <p class="eyebrow">404 · Page not found</p>
        <h1>That page isn’t on the menu.</h1>
        <p>The address may have changed, or the page may no longer exist.</p>
        <a class="button button-primary" href="/">Return home</a>
    </div>
</main>

