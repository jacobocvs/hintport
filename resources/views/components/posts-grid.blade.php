@props(['posts'])

<x-post-featured-card :post="$posts[0]" />



@if ($posts->count() > 1)
<<<<<<< HEAD
<<<<<<< HEAD
    <div class="lg:grid lg:grid-cols-6">
=======
    <div class="grid-post">
>>>>>>> 6ccbaf748640991224076bc1994c761961b7cd3e
=======
    <div class="lg:grid lg:grid-cols-6 text gap-1.5">
>>>>>>> parent of 343bbe3 (Revert "Merge branch 'development'")
        @foreach ($posts->skip(1) as $post)
            <x-post-card
                :post="$post"
                class="{{ $loop->iteration < 3 ? 'sub-featured-posts' : 'general-posts' }}"
            />
        @endforeach
    </div>
@endif
