@php
/**
 * @var \Code16\Jigsaw\Page $page
 * @var \TightenCo\Jigsaw\PageVariable|\Code16\Jigsaw\Page[] $spaces
 */
@endphp

<x-layout active-nav="spaces">
    <div class="flex flex-wrap border-t-2 border-white mb-24">
        @foreach($spaces as $space)
            @php($active = $space->id === $page->id)
            <div class="w-full lg:w-auto lg:flex-1 lg:border-r-2 border-black last:border-none">
                <div @class([
                    'p-2 relative font-bold uppercase text-5xl text-center',
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

    @if($page->cover)
        <img src="{{ $page->cover->thumbnail(500, 500) }}" alt="{{ $page->title }}">
    @endif

    <div class="relative">
        <img class="object-cover w-full" src="https://picsum.photos/1600/800" style="height: 400px" alt="">
        <x-icon-boom class="absolute right-0 top-0 translate-x-3/4" width="500" />
    </div>

    <x-content :image-thumbnail-width="1024">
        {!! $page->getContent() !!}
    </x-content>

    @if(count($page->visuals ?? []))
        <div class="flex gap-4 mt-16">
            @foreach($page->visuals as $visual)
                <img src="{{ $page->image($visual)->thumbnail(150) }}" alt="">
            @endforeach
        </div>
    @endif
</x-layout>


