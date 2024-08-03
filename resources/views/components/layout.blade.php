<!doctype html>

<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-2324093824269235"
        crossorigin="anonymous"></script>

<title>{{ config('app.name') }}</title>
<<<<<<< HEAD
<<<<<<< HEAD
<link rel="icon" href="/hintport.ico" type="image/x-icon">
=======
@vite(['resources/css/app.scss', 'resources/js/app.js'])
<link rel="icon" href="/hintport_indigo.ico" type="image/x-icon">
>>>>>>> parent of 343bbe3 (Revert "Merge branch 'development'")
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
<link href="https://unpkg.com/@tailwindcss/typography@0.4.0/dist/typography.min.css" rel="stylesheet">
=======
@vite(['resources/css/app.scss', 'resources/js/app.js'])
<link rel="icon" href="/hintport_indigo.ico" type="image/x-icon">
{{--<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">--}}
{{--<link href="https://unpkg.com/@tailwindcss/typography@0.4.0/dist/typography.min.css" rel="stylesheet">--}}
>>>>>>> 6ccbaf748640991224076bc1994c761961b7cd3e
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>


<link href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.9.0/styles/atom-one-dark.min.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.9.0/highlight.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/quill@2.0.2/dist/quill.snow.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/quill@2.0.2/dist/quill.js"></script>



<style>
    html {
        scroll-behavior: smooth;
    }

    .clamp {
        display: -webkit-box;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }

    .clamp.one-line {
        -webkit-line-clamp: 1;
    }
</style>

<<<<<<< HEAD
<<<<<<< HEAD
<body style="font-family: Open Sans, sans-serif">
    <section class="px-6 py-8">
        <nav class="sticky top-0 z-50 bg-white md:flex md:justify-between md:items-center">
            <div>
                <a href="/">
                    <img src="/images/logo.png" alt="Hintport Logo" width="165" height="16">
=======
<body class="body" style="font-family: Open Sans, sans-serif">
    <section>
        <nav id="nav">
            <div class="logo-container">
                <a href="/">
                    <img class="logo" src="/images/logo_dark_mode.png" alt="Hintport Logo">
>>>>>>> 6ccbaf748640991224076bc1994c761961b7cd3e
=======
<body class="bg-gray-900" style="font-family: Open Sans, sans-serif">
    <section>
        <nav class="sticky top-0 z-10 flex items-center justify-between w-full px-3 py-3 mx-auto max-w-8xl lg:px-4 bg-gray-800 border-b border-gray-700 rounded-b-lg">
            <div>
                <a href="/">
                    <img src="/images/logo_dark_mode.png" alt="Hintport Logo" width="165" height="16">
>>>>>>> parent of 343bbe3 (Revert "Merge branch 'development'")
                </a>
            </div>

            <div class="mt-8 md:mt-0 flex items-center">
                @auth
                    <x-dropdown>
                        <x-slot name="trigger">
                            <button class="text-xs font-bold uppercase text-gray-300 hover:text-indigo-500">
                                Welcome, {{ auth()->user()->name }}!
                            </button>
                        </x-slot>

                        @admin
                            <x-dropdown-item
                                href="/admin/posts"
                                :active="request()->is('admin/posts')"
                            >
                                Dashboard
                            </x-dropdown-item>

                            <x-dropdown-item
                                href="/admin/posts/create"
                                :active="request()->is('admin/posts/create')"
                            >
                                New Post
                            </x-dropdown-item>
                        @endadmin

                        <x-dropdown-item
                            href="#"
                            x-data="{}"
                            @click.prevent="document.querySelector('#logout-form').submit()"
                        >
                            Log Out
                        </x-dropdown-item>

                        <form id="logout-form" method="POST" action="/logout" class="hidden">
                            @csrf
                        </form>
                    </x-dropdown>
                @else
                    <a href="/register"
                       class="text-xs text-gray-300 font-bold uppercase hover:text-indigo-400 {{ request()->is('register') ? 'text-indigo-500' : '' }}">
                        Register
                    </a>

                    <a href="/login"
                       class="ml-6 text-xs text-gray-300 font-bold uppercase hover:text-indigo-400 {{ request()->is('login') ? 'text-indigo-500' : '' }}">
                        Log In
                    </a>
                @endauth

                <a href="#newsletter"
                   class="bg-indigo-800 hover:bg-indigo-700 ml-3 rounded-full text-xs font-semibold text-white uppercase py-3 px-5">
                    Subscribe for Updates
                </a>
            </div>
        </nav>

        {{ $slot }}

        <footer id="newsletter"
                class="bg-gray-800 border border-black border-opacity-5 rounded-xl text-center py-4 px-10 mt-16"
        >
            <img src="/images/hintport_icon.png" alt="megaphone" class="mx-auto py-4" style="width: 145px;">

            <h5 class="text-3xl text-gray-400">Stay in touch with the latest posts</h5>
            <p class="text-sm mt-3 text-gray-400">Promise to keep the inbox clean. No bugs.</p>

            <div class="mt-10">
<<<<<<< HEAD
<<<<<<< HEAD
                <div class="relative inline-block mx-auto lg:bg-gray-200 rounded-full">
=======
                <div class="">
>>>>>>> 6ccbaf748640991224076bc1994c761961b7cd3e
=======
                <div class="relative inline-block mx-auto lg:bg-gray-700 text-gray-400 rounded-full">
>>>>>>> parent of 343bbe3 (Revert "Merge branch 'development'")

                    <form method="POST" action="{{ route('newsletter.subscribe') }}" class="lg:flex text-sm my-0">
                        @csrf

                        <div class="">
                            <label for="email" class="hidden lg:inline-block">
                                <img src="/images/letter_icon_dark_mode.png" alt="letter" class="mx-auto" style="width: 35px;">
                            </label>

                            <div>
                                <input id="email"
                                       name="email"
                                       type="text"
                                       placeholder="Your email address"
                                       class="lg:bg-transparent py-2 lg:py-0 pl-4 focus-within:outline-none">

                                @error('email')
                                    <span class="text-xs text-red-500">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <button type="submit"
                                class="transition-colors duration-300 bg-indigo-800 text-gray-300 hover:bg-indigo-700 hover:text-gray-300 mt-4 lg:mt-0 lg:ml-3 rounded-full text-xs font-semibold uppercase py-3 px-8"
                        >
                            Subscribe
                        </button>
                    </form>
                </div>
            </div>
        </footer>
    </section>

    <x-flash/>
</body>
