<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h1 class="text-3xl">Bienvenido, {{ auth()->user()->name }}</h1>
                    <h2 class="text-xl my-4">Estas son tus notas</h2>

                    <div class="grid grid-cols-3 gap-4">
                        <x-note-card :title="'Some'" :description="'Desc'" :btnText="'Ver más...'"></x-note-card>
                        <x-note-card :title="'Some'" :description="'Desc'" :btnText="'Ver más...'"></x-note-card>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>