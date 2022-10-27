@props([
    'pagination',
    // slots
    'title',
    'link' => null,
])

<div class="px-[var(--padding-x)] [--padding-x:1rem] lg:[--padding-x:2rem]">
    <x-boom-title orange>
        <h1>
            {{ $title }}
        </h1>
    </x-boom-title>

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
