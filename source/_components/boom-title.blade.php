@props([
    'orange' => false,
])

<div {{ $attributes->class(['font-bold', 'text-orange' => $orange]) }}>
    <x-icon-boom-title
        @class([
            'w-[2em] -mb-[.5em]',
            $orange ? 'fill-white' : 'fill-orange',
        ])
        style="transform: translateX(-35%)"
    />
    <div class="grid items-center" style="min-height: 1.2em">
        {{ $slot }}
    </div>
</div>
