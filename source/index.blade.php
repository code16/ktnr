@php
/**
 * @var \Code16\Jigsaw\Page $page
 * @var \TightenCo\Jigsaw\PageVariable|\Code16\Jigsaw\Page[] $events
 */
@endphp

<x-layout
    :page="$page = $pages->firstWhere('key', 'home')"
    title=""
    :container="false"
>
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
                                <img class="absolute inset-0 object-cover w-full h-full"
                                    src="{{ $event->cover->thumbnail(1920) }}"
                                    srcset="{{ $event->cover->responsiveSrcSet() }}"
                                    alt="{{ strip_tags($event->title) }}"
                                    loading="lazy"
                                >
                            @endif
                            <x-icon-boom
                                class="absolute top-0 left-0 -translate-y-1/2 -translate-x-1/3 w-[200px] sm:w-[350px] lg:w-[500px]"
                            />
                            <div class="relative flex items-end h-full p-8">
                                <div class="md:pl-32 lg:pl-48 md:pr-24 text-3xl sm:text-4xl lg:text-5xl uppercase" style="text-shadow: 0 0 1em rgb(0 0 0)">
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
            <button class="absolute right-0 top-0 h-full w-1/6 hidden md:flex items-center justify-end px-4"
                @click="slideNext()"
            >
                <x-icon-arrow-large-right class="w-12" />
            </button>
        </x-ui.carousel>
    @endif

    <x-container>
        <div class="mt-24">
            <div class="flex justify-center">
                <x-boom-title class="text-4xl sm:text-5xl md:text-7xl leading-none sm:leading-none mb-16 uppercase" orange>
                    <h2>
                        Résidents
                    </h2>
                </x-boom-title>
            </div>

            <div class="flex flex-col md:flex-row flex-wrap gap-6 xl:gap-12 items-center justify-between">
                <x-home.resident-logo>
                    <img width="200" src="/assets/img/residents/candide.png" alt="Candide">
                </x-home.resident-logo>
                <x-home.resident-logo>
                  <img width="150" src="/assets/img/residents/cnb.png" alt="CNB archi">
                </x-home.resident-logo>
                <x-home.resident-logo>
                    <img width="150" src="/assets/img/residents/creative-vintage.png" alt="Creative Vintage">
                </x-home.resident-logo>
                <x-home.resident-logo>
                    <img width="150" src="/assets/img/residents/radio-en-construction.png" alt="Radio en construction">
                </x-home.resident-logo>
                <x-home.resident-logo>
                    <img width="200" src="/assets/img/residents/ososphere.png" alt="L'ososphère">
                </x-home.resident-logo>
            </div>
        </div>

        <div class="mt-32 md:mt-48">
            <div class="grid lg:grid-cols-2 gap-y-24">
                <div>
                    <h2 class="text-orange font-bold uppercase text-4xl sm:text-5xl md:text-7xl leading-none sm:leading-none mb-12">
                        La caténaire,<br>
                        <small class="text-[.7em]">c’est quoi&nbsp;?</small>
                    </h2>
                    <x-content class="text-lg">
                        {!! $page->getContent() !!}
                    </x-content>
                </div>
                <div class="flex justify-center lg:justify-end lg:pl-24">
                    @if($page->cover)
                        <div class="relative">
                            <x-icon-boom class="absolute top-0 left-0 w-[45%] -translate-x-1/2 -translate-y-1/3" />

                            <img width="450" src="{{ $page->cover->thumbnail(800) }}" alt="La caténaire">
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </x-container>
</x-layout>
