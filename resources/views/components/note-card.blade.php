@props(['note'])

<div class="block p-6 rounded-lg shadow-lg bg-white max-w-sm">
    <h5 class="text-gray-900 text-xl leading-tigth font-medium mb-2">{{ $note->title }}</h5>
    <p class="text-gray-700 text-base mb-4 break-words">{{ $note->description }}</p>
    <a href="{{ route('notes.edit', $note) }}">
        <x-blue-button type="button" :text="'Actualizar'"></x-blue-button>
    </a>
    <a href="{{ route('notes.destroy', $note) }}">
        <x-red-button type="button" :text="'Eliminar'"></x-red-button>
    </a>
</div>
