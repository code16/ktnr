@props([
    'orange' => false,
])

<div {{ $attributes->class([
    'relative text-5xl font-bold italic mb-16',
    'text-orange' => $orange
]) }}>
    <x-icon-boom-title
        @class([
            'w-[2em] -mb-[.5em]',
            $orange ? 'fill-white' : 'fill-orange',
        ])
        style="transform: translateX(-35%)"
    />
    <div>
        {{ $slot }}
    </div>
</div>
