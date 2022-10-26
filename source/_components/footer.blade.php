@props([
    'page' => \Illuminate\Container\Container::getInstance()->get('pageData')->page,
])

<footer>
    <div class="border-t-2 border-t-orange">
        <x-container class="pt-12 pb-24">
            <div class="flex items-start gap-16">
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
                <div class="flex gap-8 items-center ml-auto mt-2">
                    <a href="{{ $page->facebook_url }}" target="_blank">
                        <x-icon-facebook height="38" />
                    </a>
                    <a href="{{ $page->instagram_url }}" target="_blank">
                        <x-icon-instagram height="45" />
                    </a>
                    <a href="{{ $page->instagram_url }}" target="_blank">
                        <x-icon-linkedin height="45" />
                    </a>
                </div>
                <x-footer.section>
                    <x-slot:title>
                        Contact
                    </x-slot:title>
                    {!! $page->contact_text !!}
                </x-footer.section>
            </div>
        </x-container>
    </div>
</footer>
