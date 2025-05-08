<div>
@props(['align' => 'right', 'width' => '48'])

@php
    $alignmentClasses = match($align) {
        'left' => 'origin-top-left left-0',
        'top' => 'origin-top',
        'right' => 'origin-top-right right-0',
        default => 'origin-top-right right-0',
    };

    $widthClass = match($width) {
        '48' => 'w-48',
        '60' => 'w-60',
        default => 'w-48',
    };
@endphp

<div class="relative" x-data="{ open: false }" @click.outside="open = false">
    {{-- Botón que dispara el dropdown --}}
    <div @click="open = ! open">
        {{ $trigger }}
    </div>

    {{-- Menú dropdown --}}
    <div
        x-show="open"
        x-transition
        class="absolute z-50 mt-2 {{ $widthClass }} rounded-md shadow-lg {{ $alignmentClasses }}"
        style="display: none;"
    >
        <div class="rounded-md bg-white dark:bg-gray-800 ring-1 ring-black ring-opacity-5 p-2">
            {{ $content }}
        </div>
    </div>
</div>

</div>