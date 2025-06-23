<x-guest-layout>
<div class="rounded-lg p-6 flex justify-center">
    <div class="w-1/2 p-4">
        <h2 class="text-3xl font-semibold mb-4">Contact</h2>
        <p class="text-gray-600 text-lg mt-2">
            Heeft u vragen over de accomodatie of wilt u weten wat er in de buurt te doen is?
        </p>

        <div class="mt-10">
            <p class="font-semibold">Naam accommodatie</p>
            <p>Adres</p>
            <p>Postcode</p>
            <p>Telefoon nummer</p>
            <p>Email</p>
        </div>
    </div>

    <div>
        <h2 class="text-3xl font-semibold mb-4 flex justify-center">Contactformulier</h2>

        <form method="POST" class="space-y-3 p-6 rounded-3xl shadow-2xl max-w-md mx-auto" action="{{ route('contact.store') }}" style="background-color: {{ \Illuminate\Support\Facades\Auth::user()->bnb->scheme->primaryColor->color_code }}">
            @csrf
            <textarea name="message" placeholder="Vraag of opmerking" class="w-full p-2 border rounded-md h-60"></textarea>
            <input type="text" name="name" placeholder="Naam" class="w-full p-2 border rounded-md h-15">
            <input type="email" name="email" placeholder="E-mail" class="w-full p-2 border rounded-md h-15">
            <input type="tel" name="phone" placeholder="Telefoon" class="w-full p-2 border rounded-md h-15  0">

            <input type="submit" class="p-3 text-white py-2 rounded-md w-full" style="background-color: {{ \Illuminate\Support\Facades\Auth::user()->bnb->scheme->ctaColor->color_code }}" value="versturen">
        </form>
    </div>

</div>
</x-guest-layout>
