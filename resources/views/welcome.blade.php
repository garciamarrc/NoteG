<x-app-layout>
    <div class="container mx-auto my-20 flex flex-col items-center justify-center">
        <h1 class="text-7xl text-center"><span class="text-gray-500">Note</span>G</h1>
        <h2 class="text-4xl text-center mt-3"><span class="text-gray-500">Notas simples,</span> grandes ideas</h2>
        <a href="{{ route('dashboard') }}">
            <x-blue-button :text="'Comienza ahora'" class="mt-10"></x-blue-button>
        </a>
    </div>
</x-app-layout>
