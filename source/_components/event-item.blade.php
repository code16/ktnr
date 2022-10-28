@props([
    'event',
    'light' => false
])

@php
/**
 * @var \Code16\Jigsaw\Page $event
 */
@endphp

<div class="text-lg uppercase font-bold mb-1">
    {!!
        preg_replace(
            '/janvier|f[ée]vrier|mars|avril|mai|juin|juillet|ao[ûu]t|septembre|octobre|novembre|d[ée]cembre/ui',
            '<span class="text-orange">$0</span>',
            $event->date_label
        )
    !!}
</div>
<div {{ $attributes->class([
    'relative flex flex-wrap gap-4 lg:gap-12 mb-8 -mx-[var(--padding-x)] px-[var(--padding-x)] py-4 border-2 border-white rounded',
    'bg-white text-black' => $light
]) }}>
    <div class="flex-1 lg:flex-none lg:w-3/12">
        <h2 class="text-2xl uppercase font-bold">
            <x-link class="after:absolute after:inset-0 hover:underline" :href="$event->url" target="_blank">
                {!! $event->title !!}
            </x-link>
        </h2>
    </div>
    <div class="lg:flex-1 w-full lg:w-auto order-1 lg:order-none">
        <x-content>
            {!! $event->getContent() !!}
        </x-content>
    </div>
    <div @class(['md:self-center', 'hidden md:block' => !$event->url])>
        <div @class(['border-2 border-current rounded w-8 h-8 lg:w-10 lg:h-10 p-1', 'invisible' => !$event->url])>
            @if(str_contains($event->url, 'facebook.com'))
                <x-icon-facebook class="w-full h-full" />
            @else
                <x-icon-web class="w-full h-full" />
            @endif
        </div>
    </div>
</div>
