---
pagination:
    collection: events
    perPage: 5
---

<x-layout active-nav="events">
    <x-layout.events :pagination="$pagination">
        <x-slot:title>
            Les événements à La Caténaire
        </x-slot:title>

        @if(count($pastEvents))
            <x-slot:link href="/historique/">
                Historique des événements
            </x-slot:link>
        @endif
    </x-layout.events>
</x-layout>
