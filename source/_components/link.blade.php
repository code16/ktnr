@props([
    'href'
])

@if($href)
    <a href="{{ $href }}" {{ $attributes }}>
        {{ $slot }}
    </a>
@else
    {{ $slot }}
@endif
