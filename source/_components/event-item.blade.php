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
    'relative flex gap-12  mb-8 -mx-8 px-8 py-4 border border-white rounded',
    'bg-white text-black' => $light
]) }}>
    <div class="w-3/12">
        <h2 class="text-2xl uppercase font-bold">
            @if($event->url)
                <a class="after:absolute after:inset-0 hover:underline" href="{{ $event->url }}">
                    {!! $event->title !!}
                </a>
            @else
                {!! $event->title !!}
            @endif
        </h2>
    </div>
    <div class="flex-1">
        <x-content>
            {!! $event->getContent() !!}
        </x-content>
    </div>
    <div class="self-center">
        <div @class(['border border-current w-10 h-10 p-1', 'invisible' => !$event->url])>
            @if(str_contains($event->url, 'facebook.com'))
                <x-icon-facebook class="w-full h-full" />
            @else

            @endif
        </div>
    </div>
</div>
