@props([
    'interval' => null,
])

<div {{ $attributes->class('relative') }}
    x-data="scrollCarousel({
        interval: @js($interval)
    })"
>
    {{ $slot }}
</div>
