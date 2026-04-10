@props([
    'type' => 'button', 
    'variant' => 'primary'
])

@php
// untuk varian dari button
    $classes = [
        'primary' => 'bg-blue-600 hover:bg-blue-700 text-white',
        'danger'  => 'bg-red-600 hover:bg-red-700 text-white',
        'success' => 'bg-green-600 hover:bg-green-700 text-white',
        'outline' => 'border border-gray-300 text-gray-700 hover:bg-gray-50',
    ][$variant] ?? 'bg-blue-600 text-white';
@endphp

<button type="{{ $type }}" {{ $attributes->merge(['class' => "px-4 py-2 rounded-lg text-sm font-medium transition duration-200 $classes"]) }}>
    {{ $slot }}
</button>