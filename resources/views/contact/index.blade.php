<x-app-layout>
    <div class="flex flex-col items-center w-full">
        <h2 class="text-4xl">Contact</h2>
        <div class="grid grid-cols-[0.5fr_1.5fr] gap-28 w-full pl-4 pr-4 mt-5">
            <div class="bg-gray-300 max-h-max rounded-2xl p-4 shadow-2xl flex flex-col items-center">
                <h2 class="text-xl font-bold">Aantal formulieren: {{ count($contacts) }}</h2>
                <div class="flex flex-row gap-5 items-center">
                    <a href="{{ route('contact.index') }}"><img src="{{ asset('arrowLeft.png') }}"></a>
                    <p class="bg-black rounded-3xl text-white p-3">{{ session('contactIndex') }}</p>
                    <a href="{{ route('contact.index') }}"><img src="{{ asset('arrowRight.png') }}"></a>
                </div>
                <div>
                    <h2 class="text-xl">Id: {{ $contact->id }}</h2>
                    <h2 class="text-xl">Naam: {{ $contact->name }}</h2>
                    <h2 class="text-xl">Datum en tijd: {{ $contact->created_at }}</h2>
                    <p class="text-xl">Bericht: {{ $contact->message }}</p>
                </div>
            </div>
            <div class="bg-gray-300 max-h-max rounded-2xl p-4 shadow-2xl">
                @foreach($contacts as $contact)
                    <div class="flex flex-row justify-between bg-gray-500 shadow-2xl rounded-2xl p-4 gap-5 mt-2">
                        <h2 class="font-semibold text-xl">{{ $contact->name }}</h2>
                        <h2 class="font-semibold text-xl">{{ $contact->created_at }}</h2>
                        <a href="{{ route('contact.destroy', $contact) }}" class="max-h-6 max-w-6"><img alt=""
                                                                                                        src="{{ asset('bin.png') }}"></a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>
