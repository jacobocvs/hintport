@props(['category'])

<a href="/?category={{ $category->slug }}"
   class="px-3 py-1 border border-gray-600 rounded-full text-gray-400 text-xs uppercase font-bold bg-gray-700 hover:bg-gray-600"
   style="font-size: 10px"
>{{ $category->name }}</a>