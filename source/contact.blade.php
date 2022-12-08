@php
/**
 * @var \Code16\Jigsaw\Page $page
 * @var \TightenCo\Jigsaw\PageVariable|\Code16\Jigsaw\Page[] $pages
 */
@endphp

<x-layout
    :page="$page = $pages->firstWhere('key', 'contact')"
    active-nav="contact"
>
    <div class="pb-12">
        <div class="flex flex-wrap justify-center gap-12">
            <div class="w-full lg:flex-1 order-1 lg:order-none">
                <img src="{{ $page->cover->thumbnail(1024) }}" alt="Carte adresse La caténaire">
            </div>
            <div class="lg:w-[400px]">
                <h1 class="text-3xl font-bold uppercase mb-12">
                    {{ $page->title }}
                </h1>
                <x-content class="text-lg" heading-level="h2">
                    {!! $page->getContent() !!}
                </x-content>
                <div class="mt-12">
                    <div class="flex gap-12 items-center [&_a:hover]:text-orange">
                        @if($page->facebook_url)
                            <a href="{{ $page->facebook_url }}" target="_blank">
                                <x-icon-facebook height="42" />
                            </a>
                        @endif
                        @if($page->instagram_url)
                            <a href="{{ $page->instagram_url }}" target="_blank">
                                <x-icon-instagram height="50" />
                            </a>
                        @endif
                        @if($page->linkedin_url)
                            <a href="{{ $page->linkedin_url }}" target="_blank">
                                <x-icon-linkedin height="50" />
                            </a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>
