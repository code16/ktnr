
@php
/**
 * @var \TightenCo\Jigsaw\PageVariable|\Code16\Jigsaw\Page[] $residents
 */
@endphp

<x-layout active-nav="residents">
    <x-title>
        Les résidents
    </x-title>

    <div class="px-4 md:px-0">
        <x-boom-title class="md:sr-only text-3xl sm:text-5xl italic mb-16">
            <h1>
                Les résidents
            </h1>
        </x-boom-title>
        <div class="space-y-24">
            @foreach($residents as $resident)
                <div class="grid md:grid-cols-2 gap-6 md:gap-12">
                    <div class="order-1 md:order-none">
                        <x-boom-title class="text-xl sm:text-3xl lg:text-4xl uppercase mb-4" orange>
                            <h2>
                                {{ $resident->title }}
                            </h2>
                        </x-boom-title>
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
        </div>
    </div>
</x-layout>
