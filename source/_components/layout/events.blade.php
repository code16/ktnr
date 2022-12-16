@props([
    'pagination',
    // slots
    'title',
    'link' => null,
])

<x-title>
    {{ $title }}
</x-title>

<div class="px-[var(--padding-x)] [--padding-x:1rem] lg:[--padding-x:2rem]">
    <x-boom-title class="text-3xl md:text-5xl italic mb-16" orange>
        <h1>
            {{ $title }}
        </h1>
    </x-boom-title>

    @if(count($pagination->items))
        @foreach($pagination->items as $event)
            <x-event-item :event="$event" :light="$loop->even" />
        @endforeach
    @else
{{--        Aucun événement pour le moment !--}}
    @endif
</div>

<x-pagination class="mt-12" :pagination="$pagination" />

@if($link)
    <div class="mt-12 text-center">
        <a class="font-bold text-2xl underline" {{ $link->attributes }}>
            {{ $link }}
        </a>
    </div>
@endif
