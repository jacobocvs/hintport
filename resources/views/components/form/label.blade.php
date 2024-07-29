@props(['name'])

<label class="block mb-2 uppercase font-bold text-xs text-gray-400"
       for="{{ $name }}"
>
    {{ ucwords($name) }}
</label>
