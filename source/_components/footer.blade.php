@props([
    'page' => \Illuminate\Container\Container::getInstance()->get('pageData')->page,
])

<footer>
    <div class="border-t-2 border-t-orange">
        <x-container class="pt-12 pb-24">
            <div class="grid justify-center sm:block">
                <div class="grid sm:flex items-start justify-between flex-wrap md:flex-nowrap gap-8 md:gap-12 lg:gap-16">
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
                    <div class="flex gap-8 justify-center items-center md:ml-auto mt-2 order-1 md:order-none w-full md:w-auto">
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
                        <p>
                            <a href="mailto:{{ $page->contact_email }}">
                                {{ $page->contact_email }}
                            </a>
                            <br>
                            {{ $page->contact_phone }}
                        </p>
                    </x-footer.section>
                </div>
            </div>
        </x-container>
    </div>
</footer>
