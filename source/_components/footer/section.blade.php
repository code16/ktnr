@props([
    // slots
    'title'
])

<div>
    <h2 class="uppercase font-bold text-lg mb-3">
        {{ $title }}
    </h2>

    <div class="text-sm">
        {{ $slot }}
    </div>
</div>

