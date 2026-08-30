<?php

declare(strict_types=1);

return [
    'name' => 'Kyoto Garden Japanese Tea House',
    'short_name' => 'Kyoto Garden',
    'tagline' => 'A quiet moment in the heart of Victoria.',
    'description' => 'A Kyoto-inspired Japanese tea house serving tea, coffee, sweets, and a thoughtfully curated selection in Victoria, BC.',
    'announcement' => 'Japanese Tea House · Victoria, BC',

    'address' => [
        'label' => '1200 Broad Street',
        'locality' => 'Victoria, BC',
        'maps_url' => 'https://www.google.com/maps/search/?api=1&query=Kyoto+Garden+Japanese+Tea+House&query_place_id=ChIJpzOOgOZ1j1QR45td35FduY8',
    ],

    'contact' => [
        'email' => '', // TODO: Add an email address, for example hello@example.com.
        'phone' => '', // TODO: Add a phone number, for example +1 604 555 0100.
    ],

    'hours' => [
        ['days' => 'Monday–Friday', 'time' => '10:00 am–7:00 pm'],
        ['days' => 'Saturday–Sunday', 'time' => '10:00 am–7:00 pm'],
    ],

    'socials' => [
        ['name' => 'Instagram', 'url' => 'https://www.instagram.com/kyotogardenvictoria/'],
        ['name' => 'Facebook', 'url' => 'https://www.facebook.com/profile.php?id=61589390054506'],
    ],

    'facebook' => [
        // This must be a public Facebook Page URL for the Page Plugin timeline.
        'page_url' => 'https://www.facebook.com/profile.php?id=61589390054506',
    ],

    'google' => [
        'place_id' => 'ChIJpzOOgOZ1j1QR45td35FduY8',
        'reviews_url' => 'https://www.google.com/maps/search/?api=1&query=Kyoto+Garden+Japanese+Tea+House&query_place_id=ChIJpzOOgOZ1j1QR45td35FduY8',
    ],

    'features' => [
        [
            'eyebrow' => '01 · Tea',
            'title' => 'Prepared with care',
            'text' => 'Japanese tea, matcha, and carefully made drinks for a moment of calm.',
        ],
        [
            'eyebrow' => '02 · Sweets',
            'title' => 'Kyoto-inspired flavours',
            'text' => 'A thoughtful selection of sweets and light fare to enjoy alongside your tea.',
        ],
        [
            'eyebrow' => '03 · Space',
            'title' => 'Stay for a while',
            'text' => 'A warm, unhurried Japanese-inspired space in the heart of Victoria.',
        ],
    ],

];
