<x-app-layout>
    <div class="flex flex-col items-center w-full">
        <h2 class="text-4xl">{{ $bnb->name }}</h2>
        <div class="grid grid-cols-1 gap-6 w-full pl-4 pr-4 mt-5">
            <div class="bg-gray-300 max-h-max rounded-2xl p-4 shadow-2xl flex flex-col items-center">
                <h2>Name: {{ $bnb->name }}</h2>
                <h2>Color Scheme: {{ $bnb->scheme->name }}</h2>
            </div>
            <div class="bg-gray-300 max-h-max rounded-2xl p-4 shadow-2xl flex flex-col items-center">
                <h2>Colors:</h2>
                <div class="flex flex-col gap-4">
                    <h2>Scheme name: {{ $bnb->scheme->name }}</h2>
                    <div style="background-color: {{ $bnb->scheme->primaryColor->color_code }}">
                        <h2>Primary color: {{ $bnb->scheme->primaryColor->name }}</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
