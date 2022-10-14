<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __($note->title) }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div>
                        <h1 class="text-4xl">{{ $note->title }}</h1>
                        <div class="mt-4">
                            <p class="text-gray-700 text-base mb-4 break-words">{!! nl2br($note->description) !!}</p>
                        </div>
                        <div class="mt-4">
                            <a href="{{ route('notes.edit', $note) }}">
                                <x-blue-button type="button" :text="'Editar'"></x-blue-button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
