@props(['value'])

<label {{ $attributes->merge(['class' => 'block text-xl text-gray-700']) }}>
    {{ $value ?? $slot }}
</label>
