<!DOCTYPE html>
<html lang="{{ $page->locale ?? 'fr' }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        @php($title ??= $page->title)
        @php($title = ($title ? trim($title) . ' - ' : '') . $page->siteName)
        @php($description ??= $page->content ? \Illuminate\Support\Str::limit(strip_tags($page->content), 300) : $page->siteDescription)

        <title>{{ $title }}</title>

        <meta name="description" content="{{ $description }}">

        <meta property="og:title" content="{{ $title }}"/>
        <meta property="og:type" content="{{ $page->type ?? 'website' }}" />
        <meta property="og:url" content="{{ $page->getUrl() }}"/>
        <meta property="og:description" content="{{ $description }}" />

        <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">

{{--        <link rel="icon" href="/assets/favicons/favicon.png" type="image/png">--}}

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
        <div class="flex flex-col min-h-screen overflow-x-hidden">
            <x-header :active-nav="$activeNav" />

            <div class="flex-grow pb-24 md:pb-32">
                @if($container)
                    <x-container>
                        {{ $slot }}
                    </x-container>
                @else
                    {{ $slot }}
                @endif
            </div>

            <x-marquee-bar />
            <x-footer />
        </div>
        @stack('script')
        <script src="{{ mix('js/main.js', 'assets/build') }}"></script>
    </body>
</html>
