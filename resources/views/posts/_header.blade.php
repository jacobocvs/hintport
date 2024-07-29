<header class="max-w-xl mx-auto mt-20 text-center">
    <h1 class="text-4xl text-gray-400">
        Latest <span class="text-indigo-500">Posts</span> Updates
    </h1>

    <div class="space-y-2 lg:space-y-0 lg:space-x-4 mt-4">
        <div class="relative lg:inline-flex bg-gray-700 text-gray-400 rounded-xl">
            <x-category-dropdown />
        </div>

        <!-- Search -->
        <div class=" flex lg:inline-flex items-center bg-gray-700 text-gray-400 rounded-xl px-3 py-2">
            <form method="GET" action="/">
                @if (request('category'))
                    <input type="hidden" name="category" value="{{ request('category') }}">
                @endif

                <input type="text"
                       name="search"
                       placeholder="Find something"
                       class="outline-none bg-transparent placeholder-gray400 font-semibold text-sm"
                       value="{{ request('search') }}"
                >
            </form>
        </div>
    </div>
</header>
