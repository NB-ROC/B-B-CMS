<x-app-layout>
@foreach($contacts as $contact)
    <h2>{{ $contact->name }}</h2>
@endforeach
</x-app-layout>
