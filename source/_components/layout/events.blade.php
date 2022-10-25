@props([
    'pagination',
    // slots
    'title',
    'link',
])

<h1>
    {{ $title }}
</h1>

@foreach($pagination->items as $event)
    <div class="mb-2">
        {{ $event->title }}
    </div>
@endforeach

<div class="mt-8">
    <x-pagination :pagination="$pagination" />
</div>

<div class="mt-8">
    <a {{ $link->attributes }}>
        {{ $link }}
    </a>
</div>

