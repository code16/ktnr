<?php

function isPastEvent($event): bool
{
    return \Carbon\Carbon::parse($event->ends_at)->isBefore(\Carbon\Carbon::now());
}

return [
    'cache' => true,
    'baseUrl' => '',
    'production' => false,
    'siteName' => 'La Caténaire',
    'siteDescription' => "Lieu de travail, de production et collaboration, la Caténaire regroupe une agence d'architecture, une agence de coordination et d'édition, une radio, l'association Quatre 4.0/L'Ososphère et l'association Créative Vintage.",
    
    // coming from jocko
    'opening_hours' => null,
    'address' => null,
    'facebook_url' => null,
    'instagram_url' => null,
    'linkedin_url' => null,
    'contact_email' => null,
    'contact_phone' => null,
    
    'collections' => [
        'pages' => [], // pages collection aimed to be queried in specific blade file. (e.g $pages->firstWhere('key', 'home'))
        'events' => [
            'filter' => fn ($event) => !isPastEvent($event),
        ],
        'pastEvents' => [
            'collectionKey' => 'events',
            'filter' => fn ($event) => isPastEvent($event),
        ],
        'residents' => [],
        'spaces' => [
            'path' => 'espace/{slug}',
            'extends' => '_layouts.space',
            'section' => 'content',
        ],
    ],
    
    'jocko_api' => [
        'url' => env('JOCKO_API_URL'),
        'token' => env('JOCKO_API_TOKEN', ''),
        'cache' => env('JOCKO_API_CACHE', false),
    ],
];
