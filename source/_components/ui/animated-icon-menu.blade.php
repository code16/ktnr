<div class="relative w-6 h-6">
    <div class="block w-full absolute left-1/2 top-1/2 transform -translate-x-1/2 -translate-y-1/2">
        <span aria-hidden="true" class="block absolute h-0.5 w-full bg-current transform transition duration-500 ease-in-out" :class="{'rotate-45': open,' -translate-y-2': !open }"></span>
        <span aria-hidden="true" class="block absolute h-0.5 w-full bg-current transform transition duration-500 ease-in-out" :class="{'opacity-0': open } "></span>
        <span aria-hidden="true" class="block absolute h-0.5 w-full bg-current transform transition duration-500 ease-in-out" :class="{'-rotate-45': open, 'translate-y-2': !open}"></span>
    </div>
</div>
