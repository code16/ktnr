@props([
    'page' => \Illuminate\Container\Container::getInstance()->get('pageData')->page,
])

<div class="relative overflow-hidden">
    <div class="flex flex-nowrap py-4 gap-16
        bg-white hover:bg-orange focus-within:bg-orange
        text-black text-3xl uppercase italic font-bold leading-none
    ">
        @foreach(range(1, 10) as $i)
            <div class="min-w-fit">
                @if($loop->first)
                    <a class="after:absolute after:inset-0" href="mailto:{{ $page->contact_email }}">
                        Louer un espace
                    </a>
                @else
                    <span aria-hidden="true">Louer un espace</span>
                @endif
            </div>
        @endforeach
    </div>
</div>
