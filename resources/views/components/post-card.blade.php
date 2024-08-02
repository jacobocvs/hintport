@props(['post'])

<article
    {{ $attributes->merge(['class' => 'post-card']) }}>
    <div class="post-card-container">
        <div class="post-thumbnail">
            <a href="/posts/{{ $post->slug }}">
                <img src="{{ asset('storage/' . $post->thumbnail) }}" alt="Blog Post illustration" class="">
            </a>
        </div>

        <div class="post-body-card">
            <header>
                <div class="category-button-container">
                   <x-category-button :category="$post->category" />
                </div>

                <div class="title-container">
                    <h1 class="title">
                        <a href="/posts/{{ $post->slug }}">
                            {{ $post->title }}
                        </a>
                    </h1>

                    <span class="publish-date">
                        Published <time>{{ $post->created_at->diffForHumans() }}</time>
                    </span>
                </div>
            </header>

            <div class="post-excerpt">
                <p>{!! $post->excerpt !!}</p>
            </div>

            <footer class="post-card-footer">
                <div class="author">
                    <img src="{{ asset($post->author->avatar) }}" alt="avatar">
                    <div>
                        <h5 class="author-name">
                            <a href="/?author={{ $post->author->username }}">{{ $post->author->name }}</a>
                        </h5>
                    </div>
                </div>

                <div>
                    <a href="/posts/{{ $post->slug }}"
                       class="snd-button"
                    >Read More</a>
                </div>
            </footer>
        </div>
    </div>
</article>
