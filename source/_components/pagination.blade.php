@props([
    'page' => \Illuminate\Container\Container::getInstance()->get('pageData')->page,
    'pagination'
])

<div class="flex gap-2">
    @foreach ($pagination->pages as $pageNumber => $path)
        <a href="{{ $page->baseUrl }}{{ $path }}"
            @class(['font-bold' => $pagination->currentPage == $pageNumber])
        >
            {{ $pageNumber }}
        </a>
        @if(!$loop->last)
            <span>
                .
            </span>
        @endif
    @endforeach
</div>
