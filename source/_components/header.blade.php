@props([
    'activeNav' => null,
    'spaces' => \Illuminate\Container\Container::getInstance()->get('pageData')->spaces,
])

<header>
    <x-container class="mb-12">
        <div class="flex justify-center">
            <div>
                <div class="flex justify-center border-b-2 border-white py-12">
                    <a href="/">
                        <img width="250" src="/assets/img/logo.png" alt="La Caténaire">
                    </a>
                </div>
                <div x-data="{ open: false }">
                    <div class="md:hidden">
                        <button class="flex items-center justify-center w-full p-4 focus:outline-none" @click="open = !open">
                            <x-icon-menu class="mr-2" width="1.5rem" height="1.5rem" />
                            Menu
                        </button>
                    </div>
                    <div class="md:!grid md:!h-auto md:!overflow-visible md:grid-flow-col " x-show="open" x-collapse>
                        <x-header.nav-item href="/evenements" :active="$activeNav === 'events'">
                            Nos événements
                        </x-header.nav-item>
                        <x-header.nav-item href="/residents" :active="$activeNav === 'residents'">
                            Les résidents
                        </x-header.nav-item>
                        <x-header.nav-item :href="$spaces->first()?->getUrl()" :active="$activeNav === 'spaces'">
                            Nos espaces
                        </x-header.nav-item>
                        <x-header.nav-item href="/contact" :active="$activeNav === 'contact'">
                            Contact
                        </x-header.nav-item>
                    </div>
                </div>
            </div>
        </div>
    </x-container>
</header>
