@props(['posts'])

<x-post-featured-card :post="$posts[0]" />



@if ($posts->count() > 1)
    <div class="grid-post">
        @foreach ($posts->skip(1) as $post)
            <x-post-card
                :post="$post"
                class="{{ $loop->iteration < 3 ? 'sub-featured-posts' : 'general-posts' }}"
            />
        @endforeach
    </div>
@endif
