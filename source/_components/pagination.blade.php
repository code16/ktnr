@props([
    'page' => \Illuminate\Container\Container::getInstance()->get('pageData')->page,
    'pagination',
])

@if(count($pagination->pages) > 1)
    <div {{ $attributes->class('flex flex-wrap justify-center') }}>
        @foreach ($pagination->pages as $pageNumber => $path)
            <a @class(['block px-2 py-1 hover:font-bold hover:text-orange', 'font-bold' => $pagination->currentPage == $pageNumber])
                href="{{ $page->baseUrl }}{{ $path }}"
            >
                {{ $pageNumber }}
            </a>
            @if(!$loop->last)
                <div class="py-1">
                    .
                </div>
            @endif
        @endforeach
    </div>
@endif
