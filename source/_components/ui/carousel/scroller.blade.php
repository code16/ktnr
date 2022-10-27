

<div class="flex overflow-x-auto overflow-y-hidden scrollbar-none snap-x snap-mandatory"
    @scroll.debounce="handleScroll"
    x-ref="scroller"
>
    {{ $slot }}
</div>
