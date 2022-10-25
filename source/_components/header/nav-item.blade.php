@props([
    'href',
    'active' => false,
])

<a class="block relative p-6 uppercase font-bold hover:text-orange" href="{{ $href }}">
    @if($active)
        <x-icon-boom class="absolute top-0 left-1/2 -translate-x-1/2 -translate-y-1/2" width="50"></x-icon-boom>
    @endif
    {{ $slot }}
</a>
