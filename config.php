<?php

function isPastEvent($event): bool
{
    return \Carbon\Carbon::parse($event->ends_at)->isBefore(\Carbon\Carbon::now());
}

return [
    'baseUrl' => '',
    'production' => false,
    'siteName' => 'La Caténaire',
    'siteDescription' => "Lieu de travail, de production et collaboration, la Caténaire regroupe une agence d'architecture, une agence de coordination et d'édition, une radio, l'association Quatre 4.0/L'Ososphère et l'association Créative Vintage.",
    
    'opening_hours' => null, // coming from jocko
    'address' => null, // coming from jocko
    'facebook_url' => null, // coming from jocko
    'instagram_url' => null, // coming from jocko
    'linkedin_url' => null, // coming from jocko
    'contact_text' => null, // coming from jocko
    
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
