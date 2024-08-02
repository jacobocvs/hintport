@props(['category'])

<a href="/?category={{ $category->slug }}"
   class="category-card-button"
>{{ $category->name }}</a>