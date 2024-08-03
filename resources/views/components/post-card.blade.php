@props(['post'])

<article
<<<<<<< HEAD
<<<<<<< HEAD
    {{ $attributes->merge(['class' => 'transition-colors duration-300 hover:bg-gray-100 border border-black border-opacity-0 hover:border-opacity-5 rounded-xl']) }}>
    <div class="py-6 px-5 h-full flex flex-col">
        <div>
            <img src="{{ asset('storage/' . $post->thumbnail) }}" alt="Blog Post illustration" class="rounded-xl">
=======
    {{ $attributes->merge(['class' => 'post-card']) }}>
    <div class="post-card-container">
        <div class="post-thumbnail">
            <a href="/posts/{{ $post->slug }}">
                <img src="{{ asset('storage/' . $post->thumbnail) }}" alt="Blog Post illustration" class="">
            </a>
>>>>>>> 6ccbaf748640991224076bc1994c761961b7cd3e
=======
    {{ $attributes->merge(['class' => 'transition-colors bg-gray-800 duration-300 hover:bg-gray-700 border border-black border-opacity-0 hover:border-opacity-5 rounded-xl']) }}>
    <div class="py-6 px-5 h-full flex flex-col">
        <div>
            <a href="/posts/{{ $post->slug }}">
                <img src="{{ asset('storage/' . $post->thumbnail) }}" alt="Blog Post illustration" class="rounded-xl">
            </a>
>>>>>>> parent of 343bbe3 (Revert "Merge branch 'development'")
        </div>

        <div class="post-body-card">
            <header>
                <div class="category-button-container">
                   <x-category-button :category="$post->category" />
                </div>

<<<<<<< HEAD
                <div class="mt-4">
<<<<<<< HEAD
                    <h1 class="text-3xl clamp one-line">
=======
                <div class="title-container">
                    <h1 class="title">
>>>>>>> 6ccbaf748640991224076bc1994c761961b7cd3e
=======
                    <h1 class="text-3xl clamp one-line text-gray-300">
>>>>>>> parent of 343bbe3 (Revert "Merge branch 'development'")
                        <a href="/posts/{{ $post->slug }}">
                            {{ $post->title }}
                        </a>
                    </h1>

<<<<<<< HEAD
<<<<<<< HEAD
                    <span class="mt-2 block text-gray-400 text-xs">
=======
                    <span class="publish-date">
>>>>>>> 6ccbaf748640991224076bc1994c761961b7cd3e
=======
                    <span class="mt-2 block text-gray-400 text-xs font-semibold">
>>>>>>> parent of 343bbe3 (Revert "Merge branch 'development'")
                        Published <time>{{ $post->created_at->diffForHumans() }}</time>
                    </span>
                </div>
            </header>

<<<<<<< HEAD
<<<<<<< HEAD
            <div class="text-sm mt-4 space-y-4">
=======
            <div class="text-sm mt-4 space-y-4 text-gray-400">
>>>>>>> parent of 343bbe3 (Revert "Merge branch 'development'")
                {!! $post->excerpt !!}
            </div>

            <footer class="flex justify-between items-center mt-8">
                <div class="flex items-center text-sm">
                    <img src="{{ asset($post->author->avatar) }}" alt="avatar" width="35">
                    <div class="ml-3">
<<<<<<< HEAD
                        <h5 class="font-bold">
=======
            <div class="post-excerpt">
                <p>{!! $post->excerpt !!}</p>
            </div>

            <footer class="post-card-footer">
                <div class="author">
                    <img src="{{ asset($post->author->avatar) }}" alt="avatar">
                    <div>
                        <h5 class="author-name">
>>>>>>> 6ccbaf748640991224076bc1994c761961b7cd3e
=======
                        <h5 class="font-bold text-gray-400">
>>>>>>> parent of 343bbe3 (Revert "Merge branch 'development'")
                            <a href="/?author={{ $post->author->username }}">{{ $post->author->name }}</a>
                        </h5>
                    </div>
                </div>

                <div>
                    <a href="/posts/{{ $post->slug }}"
<<<<<<< HEAD
<<<<<<< HEAD
                       class="transition-colors duration-300 text-xs font-semibold bg-gray-200 hover:bg-gray-300 rounded-full py-2 px-8"
=======
                       class="snd-button"
>>>>>>> 6ccbaf748640991224076bc1994c761961b7cd3e
=======
                       class="transition-colors duration-300 text-gray-300 text-xs font-semibold bg-gray-600 hover:bg-indigo-600 rounded-full py-2 px-8"
>>>>>>> parent of 343bbe3 (Revert "Merge branch 'development'")
                    >Read More</a>
                </div>
            </footer>
        </div>
    </div>
</article>
