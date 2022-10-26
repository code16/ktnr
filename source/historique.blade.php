---
pagination:
    collection: pastEvents
    perPage: 5
---

<x-layout active-nav="events">
    <x-layout.events :pagination="$pagination">
        <x-slot:title>
            Historique des événements
        </x-slot:title>

        <x-slot:link href="{{ url('/evenements') }}">
            Retour aux événements actuels
        </x-slot:link>
    </x-layout.events>
</x-layout>
