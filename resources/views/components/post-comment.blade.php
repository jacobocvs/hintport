@props(['comment'])

<x-panel class="bg-gray-800">
    <article class="flex space-x-4">
        <div class="flex-shrink-0">
            <img src="{{ asset($comment->author->avatar) }}" alt="User Avatar" width="60" height="60" class="rounded-xl">
        </div>

        <div>
            <header class="mb-4">
                <h3 class="font-bold text-gray-400">{{ $comment->author->username }}</h3>

                <p class="text-xs font-semibold text-gray-400">
                    Posted
                    <time>{{ $comment->created_at->format('F j, Y, g:i a') }}</time>
                </p>
            </header>

            <p class="text-gray-400">
                {{ $comment->body }}
            </p>
        </div>
    </article>
</x-panel>
