@props([
    'page' => \Illuminate\Container\Container::getInstance()->get('pageData')->page,
])

<x-container class="border-t mt-6 py-6">
    <div class="flex">
        <div class="flex-grow">
            <div class="flex gap-16">
                <x-footer.section>
                    <x-slot:title>
                        Horaires
                    </x-slot:title>
                    {!! $page->opening_hours !!}
                </x-footer.section>
                <x-footer.section>
                    <x-slot:title>
                        Adresse
                    </x-slot:title>
                    {!! $page->address !!}
                </x-footer.section>
            </div>
        </div>
        <div>
            <a href="{{ url('/contact') }}">
                Contact
            </a>
        </div>
    </div>
</x-container>
