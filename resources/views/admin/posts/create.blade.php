<x-layout>
    <x-setting heading="Publish New Post">
        <form method="POST" action="/admin/posts" enctype="multipart/form-data" id="postForm">
            @csrf

            <x-form.input name="title" required/>
            <x-form.input name="slug" required/>
            <x-form.input name="thumbnail" type="file" required/>
            <x-form.textarea name="excerpt" required/>
            <div>
                <label>Body</label>
                <div class="post-form" id="editor"></div>
                <input type="hidden" name="body" id="body-input">
            </div>

            <x-form.field>
                <x-form.label name="category_id"/>
                <div class="space-y-2 lg:space-y-0 lg:space-x-4 mt-4">
                    <select class="rounded-xl text-sm h-12 text-gray-400 font-semibold bg-gray-700" name="category_id" id="category_id" required>
                        @foreach (\App\Models\Category::all() as $category)
                            <option
                                    value="{{ $category->id }}"
                                    {{ old('category_id') == $category->id ? 'selected' : '' }}
                            >{{ ucwords($category->name) }}</option>
                        @endforeach
                    </select>
                </div>

                    <x-form.error name="category"/>
            </x-form.field>

            <x-form.button>Publish</x-form.button>
        </form>
    </x-setting>
</x-layout>

<link href="{{ asset('css/quill.snow.css') }}" rel="stylesheet">
<script src="{{ asset('js/quill.js') }}"></script>
<script src="{{ asset('js/quill-init.js') }}"></script>
<script src="{{ asset('js/purify.js') }}"></script>
