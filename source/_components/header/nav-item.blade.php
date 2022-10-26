@props([
    'href',
    'active' => false,
])

<a class="block relative p-6 uppercase font-bold text-lg text-center hover:text-orange" href="{{ $href }}">
    @if($active)
        <x-icon-boom class="absolute left-0 top-1/2 md:top-0 md:left-1/2 -translate-x-1/2 -translate-y-1/2" width="50"></x-icon-boom>
    @endif
    {{ $slot }}
</a>
