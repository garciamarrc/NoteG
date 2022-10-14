<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Mis notas') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div>
                        <h1 class="text-4xl">Bienvenido, {{ auth()->user()->name }}</h1>
                    </div>
                    <h2 class="text-2xl my-4">Estas son tus notas</h2>
                    @if (!$notes->isEmpty())
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                            @foreach ($notes as $note)
                                <x-note-card :note="$note">
                                </x-note-card>
                            @endforeach
                        </div>
                        <div class="mt-8">
                            {{ $notes->links() }}
                        </div>
                    @else
                        <h1 class="text-xl">Aun no tienes notas, intenta <a href="{{ route('notes.create') }}"
                                class="text-blue-600 hover:text-blue-400">crear
                                una</a></h1>
                </div>

                @endif
            </div>
        </div>
    </div>
</x-app-layout>
