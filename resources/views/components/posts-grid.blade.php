@props(['posts'])

<x-post-featured-card :post="$posts[0]" />



@if ($posts->count() > 1)
<<<<<<< HEAD
    <div class="lg:grid lg:grid-cols-6">
=======
    <div class="grid-post">
>>>>>>> 6ccbaf748640991224076bc1994c761961b7cd3e
        @foreach ($posts->skip(1) as $post)
            <x-post-card
                :post="$post"
                class="{{ $loop->iteration < 3 ? 'sub-featured-posts' : 'general-posts' }}"
            />
        @endforeach
    </div>
@endif
