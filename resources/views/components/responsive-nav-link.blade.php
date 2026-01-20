@props(['active'])

@php
    $classes = ($active ?? false)
        ? 'block pl-3 pr-4 py-2 border-l-4 border-gold-500 text-base font-medium text-white bg-navy-800 focus:outline-none focus:text-white focus:bg-navy-900 focus:border-gold-700 transition duration-150 ease-in-out'
        : 'block pl-3 pr-4 py-2 border-l-4 border-transparent text-base font-medium text-gray-300 hover:text-white hover:bg-navy-800 hover:border-gray-300 focus:outline-none focus:text-white focus:bg-navy-900 focus:border-gray-300 transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>