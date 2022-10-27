@php
/**
 * @var \Code16\Jigsaw\Page $page
 * @var \TightenCo\Jigsaw\PageVariable|\Code16\Jigsaw\Page[] $spaces
 */
@endphp

<x-layout active-nav="spaces" :container="false">
    <x-container class="lg:max-w-[1600px]">
        <div class="flex flex-wrap mb-12">
            @foreach($spaces as $space)
                @php($active = $space->id === $page->id)
                <div class="w-full lg:w-auto lg:flex-1 border-b-2 lg:border-r-2 border-black last:border-r-none">
                    <div @class([
                        'p-2 relative font-bold uppercase text-3xl lg:text-5xl text-center border-t-2 border-white',
                         $active ? 'bg-black text-white' : 'bg-white text-black hover:bg-orange'
                    ])>
                        @if($active)
                            <h1>
                                {{ $space->title }}
                            </h1>
                        @else
                            <a class="after:absolute after:inset-0" href="{{ $space->getUrl() }}">
                                {{ $space->title }}
                            </a>
                        @endif
                    </div>
                </div>
            @endforeach
        </div>
    </x-container>

    @if($page->surface)
        <div class="flex justify-center">
            <div class="relative text-5xl -mb-[1.15em] z-10">
                <x-icon-boom class="stroke-orange fill-black" width="6em" />
                <div class="absolute inset-0 grid place-items-center">
                    <div class="text-white italic font-bold">
                        {{ $page->surface }} m²
                    </div>
                </div>
            </div>
        </div>
    @endif

    <x-container class="md:px-16">
        @if(count($page->pictures ?? []))
            @if(count($page->pictures) === 1)
                <div class="relative">
                    <img class="w-full" src="{{ $page->image($page->pictures[0])->thumbnail(1400) }}" alt="{{ $page->title }}">
                    <x-icon-boom class="absolute right-0 top-1/2 translate-x-3/4 -translate-y-1/2 w-[300px] lg:w-[500px]" />
                </div>
            @else
                <x-ui.carousel>
                    <x-ui.carousel.scroller>
                        @foreach($page->pictures as $picture)
                            <x-ui.carousel.item>
                                <img class="w-full aspect-[4/3] md:aspect-[16/7] md:min-h-[400px] object-cover"
                                    src="{{ $page->image($picture)->thumbnail(1400) }}"
                                    alt="{{ $page->title }}"
                                >
                            </x-ui.carousel.item>
                        @endforeach
                    </x-ui.carousel.scroller>

                    <div class="hidden md:block">
                        <button class="absolute left-0 top-0 h-full flex items-center px-8 text-orange -translate-x-full" @click="slidePrev()">
                            <x-icon-arrow-left width="1.5rem" />
                        </button>
                        <button class="absolute right-0 top-0 h-full flex items-center px-8 text-orange translate-x-full" @click="slideNext()">
                            <x-icon-arrow-right width="1.5rem" />
                        </button>
                    </div>

                    <div class="mt-2 text-center">
                        <span x-text="currentSlide + 1">1</span> /
                        <span>{{ count($page->pictures) }}</span>
                    </div>
                </x-ui.carousel>
            @endif
        @endif

        <x-content class="mt-16" :image-thumbnail-width="1024">
            {!! $page->getContent() !!}
        </x-content>

        @if($page->surface)
            <div class="mt-16">
                <div class="flex justify-center">
                    <x-boom-title class="mb-8">
                        <h2>
                            Reservé
                        </h2>
                    </x-boom-title>
                </div>
                <div class="text-center text-orange font-bold text-xl">
                    Pour toutes demandes concernant nos salles et leur disponibilité, contactez-nous à l’adresse
                    <a class="underline" href="mailto:{{ $page->contact_email }}">{{ $page->contact_email }}</a>
                </div>
            </div>
        @endif
    </x-container>
</x-layout>


