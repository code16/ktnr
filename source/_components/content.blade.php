@props([
    'imageThumbnailWidth',
    'imageThumbnailHeight',
])

<div {{ $attributes->class('content') }}>
    {!! $transform($slot) !!}
</div>
