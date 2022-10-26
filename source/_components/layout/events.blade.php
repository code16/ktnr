@props([
    'pagination',
    // slots
    'title',
    'link' => null,
])

<div class="px-8">
    <div class="relative mb-16">
        <img class="absolute top-0 left-0 -translate-y-3/4 -translate-x-1/3"
            src="/assets/img/boom-title.png" width="100" role="presentation" alt="">

        <h1 class="text-5xl text-orange font-bold italic">
            {{ $title }}
        </h1>
    </div>

    @foreach($pagination->items as $event)
        <x-event-item :event="$event" :light="$loop->even" />
    @endforeach
</div>

<x-pagination class="mt-12" :pagination="$pagination" />

@if($link)
    <div class="mt-12 text-center">
        <a class="font-bold text-2xl underline" {{ $link->attributes }}>
            {{ $link }}
        </a>
    </div>
@endif
