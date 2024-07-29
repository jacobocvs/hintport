@props(['name'])

@error($name)
    <p class="text-red-300 text-xs mt-2 text-bold">{{ $message }}</p>
@enderror
