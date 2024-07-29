@props(['name'])

<x-form.field>
    <x-form.label name="{{ $name }}"/>

    <input class="outline-none border bg-gray-700 text-gray-400 border-gray-200 border-opacity-5 p-2 w-full rounded"
           name="{{ $name }}"
           id="{{ $name }}"
           {{ $attributes(['value' => old($name)]) }}
    >

    <x-form.error name="{{ $name }}"/>
</x-form.field>
