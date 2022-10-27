@php
/**
 * @var \Code16\Jigsaw\Page $page
 * @var \TightenCo\Jigsaw\PageVariable|\Code16\Jigsaw\Page[] $events
 */
@endphp

<x-layout :page="$page = $pages->firstWhere('key', 'home')" :container="false">
    @if(count($events))
        <x-ui.carousel
            class="overflow-hidden bg-white bg-opacity-5"
            :interval="4000"
        >
            <x-ui.carousel.scroller>
                @foreach($events->take(4) as $event)
                    <x-ui.carousel.item>
                        <div class="relative h-[424px]">
                            @if($event->cover)
                                <img class="absolute inset-0 object-cover w-full"
                                    src="{{ $event->cover->thumbnail(1920) }}"
                                    srcset="{{ $event->cover->responsiveSrcSet() }}"
                                    alt="{{ strip_tags($event->title) }}"
                                    loading="lazy"
                                >
                            @endif
                            <x-icon-boom class="absolute top-0 left-0 -translate-y-1/2 -translate-x-1/3" width="500" />
                            <div class="relative flex items-end h-full p-8">
                                <div class="ml-48 text-5xl uppercase" style="text-shadow: 0 0 1em rgb(0 0 0 / 50%)">
                                    <h2 class="font-bold" style="max-width: 15em">
                                        <x-link class="after:absolute after:inset-0 hover:underline" :href="$event->url" target="_blank">
                                            {!! $event->title !!}
                                        </x-link>
                                    </h2>
                                    <div>
                                        {{ $event->date_label }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </x-ui.carousel.item>
                @endforeach
            </x-ui.carousel.scroller>
            <button class="absolute right-0 top-0 h-full w-1/6 flex items-center justify-end px-4"
                @click="slideNext()"
            >
                <x-icon-arrow-large-right class="w-12" />
            </button>
        </x-ui.carousel>
    @endif

    <x-container>
        <div class="mt-24">
            <h2 class="text-orange font-bold uppercase text-7xl text-center mb-16">
                Résidents
            </h2>

            <div class="flex flex-wrap gap-12 items-center justify-center">
                <img width="200" src="/assets/img/residents/candide.png" alt="Candide">
                <img width="150" src="/assets/img/residents/cnb.png" alt="CNB archi">
                <img width="150" src="/assets/img/residents/creative-vintage.png" alt="Creative Vintage">
                <img width="150" src="/assets/img/residents/radio-en-construction.png" alt="Radio en construction">
                <img width="200" src="/assets/img/residents/ososphere.png" alt="L'ososphère">
            </div>
        </div>

        <div class="grid grid-cols-2 gap-48 mt-32 mb-16">
            <div>
                <h2 class="text-orange font-bold uppercase text-7xl mb-16">
                    La caténaire,<br>
                    <small class="text-[.7em]">c’est quoi&nbsp;?</small>
                </h2>
                <x-content class="text-lg">
                    {!! $page->getContent() !!}
                </x-content>
            </div>
            <div class="flex justify-end">
                @if($page->cover)
                    <div class="relative">
                        <x-icon-boom class="absolute top-0 left-0 w-[45%] -translate-x-1/2 -translate-y-1/3" />

                        <img width="450" src="{{ $page->cover->thumbnail(800) }}" alt="La caténaire">
                    </div>
                @endif
            </div>
        </div>
    </x-container>
</x-layout>
