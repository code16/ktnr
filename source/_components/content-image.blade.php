@aware([
    'imageThumbnailWidth',
    'imageThumbnailHeight',
])
@props([
    'width' => $imageThumbnailWidth ?? 1024,
    'height' => $imageThumbnailHeight,
])

<p>
    <img class="max-w-full"
        src="{{ $image->thumbnail($width, $height) }}"
        alt="{{ $alt }}"
        @if($width)
            width="{{ $width }}"
        @endif
        @if($height)
            height="{{ $height }}"
        @endif
    >
</p>
