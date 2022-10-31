@props([
    'resident'
])

@if($resident)
    <x-link href="{{ $resident->url }}" class="transition-transform hover:scale-110" target="_blank">
        <img {{ $attributes }} src="/assets/img/residents/{{ $resident->key }}.png" alt="{{ strip_tags($resident->title) }}">
    </x-link>
@endif
