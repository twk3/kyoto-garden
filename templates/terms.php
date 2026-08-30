<?php

declare(strict_types=1);

/** @var array $site */
?>
<header class="legal-header">
    <a class="brand" href="/" aria-label="<?= e($site['name']) ?> home">
        <img src="/assets/images/kyoto-garden-logo.jpg" alt="<?= e($site['name']) ?>, Victoria BC">
    </a>
    <a class="text-link" href="/">Return home</a>
</header>

<main id="main" class="legal-page">
    <p class="eyebrow">Website information</p>
    <h1>Terms of use</h1>
    <p class="legal-updated">Last updated August 29, 2026</p>

    <div class="legal-copy">
        <section>
            <h2>About this website</h2>
            <p>This website provides general information about <?= e($site['name']) ?>, and is maintained for free by twkie.net in support of local businesses. Please let us know at webmaster@twkie.net if you see any incorrect information.</p>
            <p>twkie.net pulls information from public sources to present information about Kyoto Garden, but is not an approved representative of Kyoto Garden Victoria. twkie.net does not guarantee the accuracy of the information, and we don't speak for Kyoto Garden Victoria.</p>
        </section>

        <section>
            <h2>Third-party content and services</h2>
            <p>Reviews, ratings, reviewer details, and related information displayed through Google Maps are supplied by Google and Google Maps users, not by Kyoto Garden. External links and services are subject to their providers’ own terms.</p>
            <p>Use of Google Maps features on this website is subject to the <a href="https://maps.google.com/help/terms_maps/" target="_blank" rel="noopener noreferrer">Google Maps/Google Earth Additional Terms</a> and the <a href="https://policies.google.com/terms" target="_blank" rel="noopener noreferrer">Google Terms of Service</a>.</p>
        </section>

        <section>
            <h2>Website content</h2>
            <p>Unless otherwise identified, Kyoto Garden’s branding, photographs, text, and original website materials may not be republished commercially without permission. Third-party names and content remain the property of their respective owners.</p>
            <p>This website serves as a placeholder, while we wait to transfer the domains to the local business.</p>
        </section>

        <section>
            <h2>Availability</h2>
            <p>We do not guarantee uninterrupted website or third-party service availability. The website may be changed, suspended, or withdrawn when maintenance or operational needs require it.</p>
        </section>
    </div>
</main>

<footer class="site-footer legal-footer">
    Website maintained by twkie.net for free in support of local businesses
    <ul aria-label="Legal links">
        <li><a href="/privacy">Privacy</a></li>
    </ul>
</footer>
