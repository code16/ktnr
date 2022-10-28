@props([
    'imageThumbnailWidth',
    'imageThumbnailHeight',
    'headingLevel',
])

<div {{ $attributes->class('content') }}>
    {!! $transform($slot) !!}
</div>
