<!DOCTYPE html>
<html lang="{{ $page->locale ?? 'fr' }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="{{ $page->description ?? $page->siteDescription }}">

        <meta property="og:title" content="{{ $page->title ? $page->title . ' - ' : '' }}{{ $page->siteName }}"/>
        <meta property="og:type" content="{{ $page->type ?? 'website' }}" />
        <meta property="og:url" content="{{ $page->getUrl() }}"/>
        <meta property="og:description" content="{{ $page->description ?? $page->siteDescription }}" />

        <title>{{ $page->title ? $page->title . ' - ' : '' }}{{ $page->siteName }}</title>
        <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
        <script defer src="{{ mix('js/main.js', 'assets/build') }}"></script>

        <link rel="preload" href="/assets/fonts/CenturyGothic.woff2" as="font" type="font/woff2" crossorigin>
        <link rel="preload" href="/assets/fonts/CenturyGothic-Bold.woff2" as="font" type="font/woff2" crossorigin>

        @if(!$page->production)
            <script src="https://cdn.tailwindcss.com"></script>
            <script>
                tailwind.config = {
                    theme: {!! \Illuminate\Support\Str::of(file_get_contents(__DIR__ . '/../tailwind.config.js'))->after('theme:')->before('plugins:') !!}
                }
            </script>
        @endif
    </head>
    <body class="bg-black text-white font-sans antialiased">
        <div class="flex flex-col min-h-screen">
            <x-header :active-nav="$activeNav ?? null" />

            <div class="flex-grow">
                <x-container>
                    {{ $slot }}
                </x-container>
            </div>
            <x-footer />
        </div>
    </body>
</html>
