<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Editar nota') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div>
                        <h1 class="text-4xl">Edita tu nota</h1>
                        <form action="{{ route('notes.update', $note) }}" method="POST">
                            @csrf
                            <div class="mt-4">
                                <x-input-label :value="'Título'"></x-input-label>
                                <x-text-input value="{{ $note->title }}" type="text" name="title"
                                    class="block mt-1 w-full" />
                                @error('title')
                                    <x-alert :color="'red'" :message="$message" />
                                @enderror
                            </div>
                            <div class="mt-4">
                                <x-input-label :value="'Descripción'"></x-input-label>
                                <textarea rows="4" name="description"
                                    class="' w-full block rounded shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50'">{{ $note->description }}</textarea>
                                @error('description')
                                    <x-alert :color="'red'" :message="$message" />
                                @enderror
                            </div>
                            <div class="mt-4">
                                <x-blue-button type="submit" :text="'Guardar'"></x-blue-button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
