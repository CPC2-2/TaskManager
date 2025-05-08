@props(['active'])

@php
$classes = ($active ?? false)
            ? 'text-1xl text-black'
            : 'text-1xl text-black';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
