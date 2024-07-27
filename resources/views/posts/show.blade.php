<x-layout>
    <main class="max-w-8xl mx-auto mt-10 lg:mt-20 space-y-6">
        <article class="max-w-7xl mx-auto lg:grid lg:grid-cols-12 gap-x-10">
            <div class="col-span-4 lg:text-center lg:pt-14 mb-10">
                <img src="{{ asset('storage/' . $post->thumbnail) }}" alt="Post thumbnail" class="rounded-xl">

                <p class="mt-4 block text-gray-400 text-xs">
                    Published
                    <time>{{ $post->created_at->diffForHumans() }}</time>
                </p>

                <div class="flex items-center lg:justify-center text-sm mt-4">
                    <img src="/images/avatar-icon.png" alt="avatar" width="35" height="16" >
                    <div class="ml-3 text-left">
                        <h5 class="font-bold">
                            <a href="/?author={{ $post->author->username }}">{{ $post->author->name }}</a>
                        </h5>
                    </div>
                </div>
            </div>

            <div class="col-span-8">
                <div class="hidden lg:flex justify-between mb-6">
                    <a href="/"
                       class="transition-colors duration-300 relative inline-flex items-center text-lg hover:text-purple-500">
                        <svg width="22" height="22" viewBox="0 0 22 22" class="mr-2">
                            <g fill="none" fill-rule="evenodd">
                                <path stroke="#000" stroke-opacity=".012" stroke-width=".5" d="M21 1v20.16H.84V1z">
                                </path>
                                <path class="fill-current"
                                      d="M13.854 7.224l-3.847 3.856 3.847 3.856-1.184 1.184-5.04-5.04 5.04-5.04z">
                                </path>
                            </g>
                        </svg>

                        Back to Posts
                    </a>

                    <div class="space-x-2">
                        <x-category-button :category="$post->category"/>
                    </div>
                </div>

                <h1 class="font-bold text-3xl lg:text-4xl mb-10">
                    {{ $post->title }}
                </h1>

                <div class="prose" style="max-width: 100%">{!! $post->body !!}</div>

            </div>

            <section class="col-span-8 col-start-5 mt-10 space-y-6">
                @include ('posts._add-comment-form')

                @foreach ($post->comments as $comment)
                    <x-post-comment :comment="$comment"/>
                @endforeach
            </section>
        </article>
    </main>
</x-layout>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        function createCopyButton(preElement) {
            const button = document.createElement('button');
            button.textContent = 'Copy';
            button.classList.add('copy-button', 'bg-purple-500', 'text-white', 'uppercase', 'font-semibold', 'text-xs', 'py-2', 'px-10', 'rounded-2xl', 'hover:bg-purple-600');

            button.addEventListener('click', function () {
                const textToCopy = preElement.textContent;
                navigator.clipboard.writeText(textToCopy).then(function () {
                    showAlert(button);
                }, function (err) {
                    console.error('Error copying text: ', err);
                });
            });

            preElement.parentNode.insertBefore(button, preElement.nextSibling);
        }

        // Find all <pre> elements and add a copy button to each
        document.querySelectorAll('pre').forEach(function (preElement) {
            createCopyButton(preElement);
        });

        function showAlert(button) {
            const alert = document.createElement('div');
            alert.textContent = 'Copied to clipboard!';
            alert.classList.add('fixed', 'bg-green-500', 'text-white', 'font-bold', 'py-2', 'px-4', 'rounded', 'shadow-md');

            const rect = button.getBoundingClientRect();
            alert.style.left = `${rect.left + window.scrollX}px`;
            alert.style.top = `${rect.top + window.scrollY - rect.height - 10}px`;

            document.body.appendChild(alert);

            setTimeout(() => {
                alert.remove();
            }, 2000);
        }
    });
</script>
