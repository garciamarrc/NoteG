@props(['title', 'description', 'btnText'])

<div class="block p-6 rounded-lg shadow-lg bg-white max-w-sm">
    <h5 class="text-gray-900 text-xl leading-tigth font-medium mb-2">{{ $title }}</h5>
    <p class="text-gray-700 text-base mb-4 break-words">{{ $description }}</p>
    <x-blue-button :text="$btnText"></x-blue-button>
</div>
