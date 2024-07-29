@props(['heading'])

<section class="py-8 max-w-7xl mx-auto">
    <h1 class="text-lg text-gray-400 font-bold mb-8 pb-2 border-b-2 border-gray-700">
        {{ $heading }}
    </h1>

    <div class="flex">
        <aside class="w-48 flex-shrink-0 px-6 py-4">
            <h4 class="font-semibold mb-4 text-gray-400">Links</h4>

            <ul>
                <li>
                    <a href="/admin/posts" class="text-gray-300 hover:text-indigo-300 {{ request()->is('admin/posts') ? 'text-indigo-500' : '' }}">All Posts</a>
                </li>

                <li>
                    <a href="/admin/posts/create" class="text-gray-300 hover:text-indigo-300 {{ request()->is('admin/posts/create') ? 'text-indigo-500' : '' }}">New Post</a>
                </li>
            </ul>
        </aside>

        <main class="flex-1">
            <x-panel>
                {{ $slot }}
            </x-panel>
        </main>
    </div>
</section>
