@props(['active' => false])

@php
    $classes = 'block text-left px-3 text-sm leading-6 hover:bg-gray-600 focus:bg-gray-600 hover:text-gray-400 focus:text-gray-400';

    if ($active) $classes .= ' bg-gray-600';
@endphp

<a {{ $attributes(['class' => $classes]) }}
>{{ $slot }}</a>
