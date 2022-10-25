@php
/**
 * @var \Code16\Jigsaw\Page $page
 * @var \TightenCo\Jigsaw\PageVariable|\Code16\Jigsaw\Page[] $posts
 */
@endphp

<x-layout :page="$page = $pages->firstWhere('key', 'home')">
    <div class="mt-24">
        <h2 class="text-orange font-bold uppercase text-7xl text-center mb-16">
            Résidents
        </h2>

        <div class="flex flex-wrap gap-12 items-center justify-center">
            <img width="200" src="/assets/img/candide.png" alt="Candide">
            <img width="150" src="/assets/img/cnb.png" alt="CNB archi">
            <img width="150" src="/assets/img/creative-vintage.png" alt="Creative Vintage">
            <img width="150" src="/assets/img/radio-en-construction.png" alt="Radio en construction">
            <img width="200" src="/assets/img/ososphere.png" alt="L'ososphère">
        </div>
    </div>

    <div class="grid grid-cols-2 gap-48 mt-32 mb-16">
        <div>
            <h2 class="text-orange font-bold uppercase text-7xl mb-16">
                La caténaire,<br>
                <small class="text-[.7em]">c’est quoi&nbsp;?</small>
            </h2>
            <x-content>
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
</x-layout>
