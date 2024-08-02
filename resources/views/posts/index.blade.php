<x-layout>
    @include ('posts._header')

    <main class="main">
        @if ($posts->count())
            <x-posts-grid :posts="$posts" />

            {{ $posts->links() }}
        @else
            <p class="text-center text-gray-400">No posts yet. Please check back later.</p>
        @endif
    </main>
</x-layout>
