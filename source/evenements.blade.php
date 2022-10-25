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

       <x-slot:link href="{{ url('/historique') }}">
           Historique des événements
       </x-slot:link>
   </x-layout.events>
</x-layout>
