@props([
    // slots
    'title'
])

<div>
    <h2 class="uppercase font-bold mb-4">
        {{ $title }}
    </h2>

    <div>
        {{ $slot }}
    </div>
</div>

