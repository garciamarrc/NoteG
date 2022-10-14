@props(['color', 'message'])

<div {{ $attributes->merge(['class' => "bg-$color-100 rounded-lg py-2 px-2 my-4 text-base text-$color-700 mb-3 text-center"]) }}
    role="alert">
    {{ $message }}
</div>
