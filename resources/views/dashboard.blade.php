<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="flex flex-col items-center w-full">
        <h2 class="text-4xl">Dashboard</h2>
        <div class="grid grid-cols-[0.5fr_1.5fr] gap-28 w-full pl-4 pr-4 mt-5">
            <div class="bg-gray-300 p-4 rounded-2xl">
                <h2>Aantal pagina's: </h2>
                <h2>Aantal ingevulde contactformulieren: {{ count($contacts) }}</h2>
            </div>
            <div class="bg-gray-300 p-4 rounded-2xl">
                <h2 class="text-3xl font-semibold">Pagina's</h2>
            </div>
        </div>
    </div>
</x-app-layout>
