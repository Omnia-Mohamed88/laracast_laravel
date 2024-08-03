@props(['for'])

<label {{ $attributes->merge(['class' => 'block text-sm font-medium leading-6 text-gray-900']) }} for="{{ $for }}">
    {{ $slot }}
</label>
