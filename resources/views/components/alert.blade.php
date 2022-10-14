@props(['message'])

<div {{ $attributes->merge(['class' => 'rounded-lg py-2 px-2 my-4 text-base mb-3 text-center']) }} role="alert">
    {{ $message }}
</div>
