
@php
/**
 * @var \TightenCo\Jigsaw\PageVariable|\Code16\Jigsaw\Page[] $residents
 */
@endphp

<x-layout active-nav="residents">
    <h1 class="sr-only">
        Les résidents
    </h1>
    @foreach($residents as $resident)
        <div class="grid grid-cols-2 gap-12 mb-24">
            <div>
                <h2 class="text-3xl uppercase text-orange font-bold mb-4">
                    {{ $resident->title }}
                </h2>
                <x-content>
                    {!! $resident->getContent() !!}
                </x-content>
            </div>
            <div>
                @if($resident->cover)
                    <img class="rounded" src="{{ $resident->cover->thumbnail(800, 450) }}"
                        width="800" height="450"
                        alt="{{ strip_tags($resident->title) }}"
                    >
                @endif
            </div>
        </div>
    @endforeach
</x-layout>
