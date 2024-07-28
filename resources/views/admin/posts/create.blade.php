<x-layout>
    <x-setting heading="Publish New Post">
        <form method="POST" action="/admin/posts" enctype="multipart/form-data" id="postForm">
            @csrf

            <x-form.input name="title" required/>
            <x-form.input name="slug" required/>
            <x-form.input name="thumbnail" type="file" required/>
            <x-form.textarea name="excerpt" required/>
            <label class="block mb-2 uppercase font-bold text-xs text-gray-700" >Body</label>
            <div class="outline-none border border-gray-200 p-2 w-full rounded" id="editor">
            </div>
            <input type="hidden" name="body" id="body-input">

            <x-form.field>
                <x-form.label name="category_id"/>

                <select name="category_id" id="category_id" required>
                    @foreach (\App\Models\Category::all() as $category)
                        <option
                            value="{{ $category->id }}"
                            {{ old('category_id') == $category->id ? 'selected' : '' }}
                        >{{ ucwords($category->name) }}</option>
                    @endforeach
                </select>

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
