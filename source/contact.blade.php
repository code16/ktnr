@php
/**
 * @var \Code16\Jigsaw\Page $page
 * @var \TightenCo\Jigsaw\PageVariable|\Code16\Jigsaw\Page[] $pages
 */
@endphp

<x-layout :page="$page = $pages->firstWhere('key', 'contact')">
    <h1 class="text-3xl font-bold">
        {{ $page->title }}
    </h1>

    <div class="mt-4">
        {!! $page->getContent() !!}
    </div>
</x-layout>
