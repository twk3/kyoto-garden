# Kyoto Garden Café

A small, dependency-free PHP landing page for a local café. The site uses plain
PHP templates, a small browser script for Google Places, and no database or
package manager.

## Requirements

- PHP 8.2 or newer (designed for PHP 8.5)
- Apache with `mod_rewrite` in production, or PHP's built-in server locally

## Local development

From the project directory, run:

```bash
php -S localhost:8080 -t public public/router.php
```

Then open <http://localhost:8080>.

## Customizing the site

Edit [`config/site.php`](config/site.php). It contains the café name, summary,
hours, contact details, social links, and Facebook Page URL. Replace every value
marked `TODO` before publishing.

Styles are in [`public/assets/css/site.css`](public/assets/css/site.css).

## Google reviews

Copy [`config/local.example.php`](config/local.example.php) to
`config/local.php` and add the browser API key there. The local file is ignored
by Git so the key is not committed.

The key must have **Maps JavaScript API** and **Places API (New)** enabled. Keep
it restricted to your website referrers, for example:

```text
http://localhost:8080/*
https://example.com/*
https://www.example.com/*
```

Replace the example production domains with the real domain before deployment.
Google Places UI Kit selects and orders the displayed reviews by relevance; it
does not guarantee the three newest reviews.

The landing page lazy-loads the Places component from `/reviews-widget`. That
widget URL is disallowed in `public/robots.txt`, while the main landing page
remains crawlable. Compliant crawlers can index the café content without
instantiating a billable Places component.

## Facebook updates

The latest-updates section uses Facebook's official Page Plugin to display the
public Page timeline. It does not require an API key, access token, or cron job.
Set `facebook.page_url` in [`config/site.php`](config/site.php) to a public
Facebook Page URL. Facebook controls the timeline content and presentation, and
the embed may be hidden by browser privacy settings or content blockers.

## DreamHost deployment

1. Upload or clone this project outside the domain's public web directory.
2. In **Manage Websites**, set the domain's web directory to this project's
   `public` directory.
3. Ensure the domain is using PHP 8.5.
4. Visit the domain and verify the links, address, hours, and mobile layout.

The included `public/.htaccess` routes page requests through `index.php`, blocks
directory listings, and adds a few safe response headers. Files in `config/`,
`src/`, and `templates/` remain outside the publicly accessible directory.

## Structure

```text
config/site.php          Café content and links
config/local.example.php API-key configuration example
public/index.php         Front controller
public/router.php        Local-development router
public/.htaccess         Apache rules
public/assets/           Public styles, scripts, and images
src/helpers.php          Small rendering helpers
templates/layout.php     Shared HTML shell
templates/home.php       Landing-page content
templates/reviews-widget.php  Lazy-loaded Google reviews frame
templates/privacy.php    Privacy information
templates/terms.php      Terms of use
```
