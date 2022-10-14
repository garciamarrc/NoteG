@props(['note'])

<a href="{{ route('notes.show', $note) }}">
    <div class="block p-6 rounded-lg shadow-lg bg-white max-w-sm h-fit">
        <h5 class="text-gray-900 text-xl leading-tigth font-bold mb-2 break-words">{{ $note->title }}</h5>
        <p class="text-gray-400 text-sm mb-4 break-words">{{ $note->updated_at->diffForHumans() }}</p>
        <p class="text-gray-700 text-base mb-4 break-words">{!! Str::limit(nl2br($note->description), 100) !!}</p>
        <div class="flex gap-3">
        </div>
    </div>
</a>
