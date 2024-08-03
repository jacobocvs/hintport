@props(['category'])

<a href="/?category={{ $category->slug }}"
<<<<<<< HEAD
<<<<<<< HEAD
   class="px-3 py-1 border border-purple-700 rounded-full text-purple-700 text-xs uppercase font-bold"
   style="font-size: 10px"
>{{ $category->name }}</a>
=======
   class="category-card-button"
>{{ $category->name }}</a>
>>>>>>> 6ccbaf748640991224076bc1994c761961b7cd3e
=======
   class="px-3 py-1 border border-gray-600 rounded-full text-gray-400 text-xs uppercase font-bold bg-gray-700 hover:bg-gray-600"
   style="font-size: 10px"
>{{ $category->name }}</a>
>>>>>>> parent of 343bbe3 (Revert "Merge branch 'development'")
