<?php

return [
    'baseUrl' => '',
    'production' => false,
    'siteName' => 'Novak', // todo
    'siteDescription' => 'Website description.', // todo
    
    'collections' => [
        'pages' => [], // pages collection aimed to be queried in specific blade file. (e.g $pages->firstWhere('key', 'home'))
        'posts' => [
            'path' => 'posts',
            'extends' => '_layouts.post',
            'section' => 'content',
        ],
    ],
    
    'jocko_api' => [
        'url' => env('JOCKO_API_URL'),
        'token' => env('JOCKO_API_TOKEN'),
    ],
];
