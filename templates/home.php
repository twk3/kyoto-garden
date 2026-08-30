<?php

declare(strict_types=1);

/** @var array $site */

$hasEmail = $site['contact']['email'] !== '';
$hasPhone = $site['contact']['phone'] !== '';
$hasMapsLink = $site['address']['maps_url'] !== '';
$facebookPageUrl = $site['facebook']['page_url'] ?? '';
$facebookPluginUrl = $facebookPageUrl === '' ? '' : 'https://www.facebook.com/plugins/page.php?' . http_build_query([
    'href' => $facebookPageUrl,
    'tabs' => 'timeline',
    'width' => 500,
    'height' => 680,
    'small_header' => 'false',
    'adapt_container_width' => 'true',
    'hide_cover' => 'false',
    'show_facepile' => 'false',
], '', '&', PHP_QUERY_RFC3986);
?>
<div class="top-bar" role="status">This website serves as a placeholder, pending a gift transfer of domains to the local business.</div>
<main id="main">
    <section class="hero" aria-labelledby="hero-title">
        <div class="hero-panel">
            <header class="site-header">
                <a class="brand" href="/" aria-label="<?= e($site['name']) ?> home">
                    <img src="/assets/images/kyoto-garden-logo.jpg" alt="<?= e($site['name']) ?>, Victoria BC">
                </a>

                <nav aria-label="Main navigation">
                    <a href="#about">About</a>
                    <a href="#reviews">Reviews</a>
                    <a href="#visit">Visit</a>
                </nav>
            </header>

            <div class="hero-copy">
                <p class="eyebrow rule-label"><span><?= e($site['announcement']) ?></span></p>
                <h1 id="hero-title">A quiet<br>moment.</h1>
                <p class="hero-japanese" lang="ja">京都の味、心のひととき。</p>
                <p class="hero-description"><?= e($site['description']) ?></p>
                <div class="hero-actions">
                    <a class="button button-primary" href="#visit">Plan your visit</a>
                    <?php if (!empty($site['socials'][0]['url'])): ?>
                        <a class="button button-secondary" href="<?= e($site['socials'][0]['url']) ?>" target="_blank" rel="noopener noreferrer">Instagram <span aria-hidden="true">↗</span></a>
                    <?php endif; ?>
                </div>
            </div>
        </div>

        <div class="hero-media">
            <img src="/assets/images/tea-house-interior.jpg" alt="The warm wood counter and Japanese-inspired interior at Kyoto Garden">
            <div class="hero-location" aria-hidden="true">
                <span lang="ja">京都茶屋</span>
                <small>Kyoto Garden<br>Japanese Tea House</small>
            </div>
        </div>
    </section>

    <section class="intro section" id="about" aria-labelledby="about-title">
        <div>
            <p class="eyebrow">Our café</p>
            <h2 id="about-title">Thoughtfully made.<br>Quietly enjoyed.</h2>
        </div>
        <p>Inspired by the calm and hospitality of Kyoto, our tea house is a place for carefully prepared drinks, Japanese sweets, and time that feels a little less hurried.</p>
    </section>

    <section class="features section" aria-label="What you will find">
        <?php foreach ($site['features'] as $feature): ?>
            <article class="feature-card">
                <p class="eyebrow"><?= e($feature['eyebrow']) ?></p>
                <h3><?= e($feature['title']) ?></h3>
                <p><?= e($feature['text']) ?></p>
            </article>
        <?php endforeach; ?>
    </section>

    <section class="reviews section" id="reviews" aria-labelledby="reviews-title">
        <div class="reviews-heading">
            <p class="eyebrow">From our guests</p>
            <h2 id="reviews-title">Kind words,<br>shared moments.</h2>
            <p>See a glimpse of the café and read what visitors are saying about their time at Kyoto Garden.</p>
            <a class="text-link" href="<?= e($site['google']['reviews_url']) ?>" target="_blank" rel="noopener noreferrer">See all reviews on Google Maps <span aria-hidden="true">↗</span></a>
        </div>

        <div class="google-reviews-wrap">
            <iframe
                class="google-reviews-frame"
                src="/reviews-widget"
                title="Google photos and reviews for <?= e($site['short_name']) ?>"
                loading="lazy"
            ></iframe>
            <p class="reviews-disclosure">Reviews are selected and ordered by relevance by Google. Photos and review content are contributed by Google Maps users and are not verified by Kyoto Garden.</p>
        </div>
    </section>

    <section class="updates section" id="updates" aria-labelledby="updates-title">
        <div class="updates-heading">
            <p class="eyebrow">Fresh from the café</p>
            <h2 id="updates-title">Latest<br>updates.</h2>
            <p>News, seasonal drinks, and a look at what is happening at Kyoto Garden, shared directly from our Facebook Page.</p>
            <?php if ($facebookPageUrl !== ''): ?>
                <a class="text-link" href="<?= e($facebookPageUrl) ?>" target="_blank" rel="noopener noreferrer">Visit us on Facebook <span aria-hidden="true">↗</span></a>
            <?php endif; ?>
        </div>

        <?php if ($facebookPluginUrl !== ''): ?>
            <div class="facebook-page-wrap">
                <iframe
                    class="facebook-page-frame"
                    src="<?= e($facebookPluginUrl) ?>"
                    width="500"
                    height="680"
                    title="Latest posts from <?= e($site['short_name']) ?> on Facebook"
                    loading="lazy"
                    scrolling="no"
                    frameborder="0"
                    allowfullscreen
                    allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"
                ></iframe>
                <p class="facebook-fallback">If the timeline does not appear, <a href="<?= e($facebookPageUrl) ?>" target="_blank" rel="noopener noreferrer">view our latest updates on Facebook</a>.</p>
            </div>
        <?php endif; ?>
    </section>

    <section class="visit section" id="visit" aria-labelledby="visit-title">
        <div class="visit-heading">
            <p class="eyebrow">Come say hello</p>
            <h2 id="visit-title">Visit <?= e($site['short_name']) ?></h2>
        </div>

        <div class="visit-details">
            <div>
                <h3>Find us</h3>
                <address>
                    <?php if ($hasMapsLink): ?><a href="<?= e($site['address']['maps_url']) ?>" target="_blank" rel="noopener noreferrer"><?php endif; ?>
                        <?= e($site['address']['label']) ?><br>
                        <?= e($site['address']['locality']) ?>
                    <?php if ($hasMapsLink): ?></a><?php endif; ?>
                </address>
            </div>

            <div>
                <h3>Hours</h3>
                <dl class="hours">
                    <?php foreach ($site['hours'] as $hours): ?>
                        <div>
                            <dt><?= e($hours['days']) ?></dt>
                            <dd><?= e($hours['time']) ?></dd>
                        </div>
                    <?php endforeach; ?>
                </dl>
            </div>

            <?php if ($hasEmail || $hasPhone): ?>
                <div>
                    <h3>Contact</h3>
                    <ul class="contact-list">
                        <?php if ($hasEmail): ?>
                            <li><a href="mailto:<?= e($site['contact']['email']) ?>"><?= e($site['contact']['email']) ?></a></li>
                        <?php endif; ?>
                        <?php if ($hasPhone): ?>
                            <li><a href="tel:<?= e(phone_href($site['contact']['phone'])) ?>"><?= e($site['contact']['phone']) ?></a></li>
                        <?php endif; ?>
                    </ul>
                </div>
            <?php endif; ?>
        </div>
    </section>
</main>

<footer class="site-footer">
    <ul aria-label="Footer links">
        Website maintained by twkie.net for free in support of local businesses
        <?php foreach ($site['socials'] as $social): ?>
            <?php if ($social['url'] !== ''): ?>
                <li><a href="<?= e($social['url']) ?>" target="_blank" rel="noopener noreferrer"><?= e($social['name']) ?></a></li>
            <?php endif; ?>
        <?php endforeach; ?>
        <li><a href="/privacy">Privacy</a></li>
        <li><a href="/terms">Terms</a></li>
    </ul>
</footer>
