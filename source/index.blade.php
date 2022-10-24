@php
/**
 * @var \Code16\Jigsaw\Page $page
 * @var \TightenCo\Jigsaw\PageVariable|\Code16\Jigsaw\Page[] $posts
 */
@endphp

<x-layout :page="$page = $pages->firstWhere('key', 'home')">
    <h1 class="text-3xl font-bold">
        {{ $page->title }}
    </h1>

    <x-content class="my-4">
        {!! $page->getContent() !!}
    </x-content>

    <ul>
        @foreach($posts as $post)
            <li>
                <a href="{{ $post->getUrl() }}">{{ $post->title }}</a>
            </li>
        @endforeach
    </ul>
</x-layout>
