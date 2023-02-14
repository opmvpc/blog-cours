<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Articles') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
                    <div class="mt-8 text-2xl">
                        Edit Article
                    </div>

                    <div class="mt-6 text-gray-500">
                        <form
                            action="{{ route('articles.update', $article->id) }}"
                            method="POST">
                            @csrf
                            @method('PUT')
                            <div class="mb-4">
                                <label for="title"
                                    class="sr-only">Title</label>
                                <input type="text" name="title"
                                    id="title" placeholder="Title"
                                    class="bg-gray-100 border-2 w-full p-4 rounded-lg"
                                    value="{{ $article->title }}">

                                @error('title')
                                    <div class="text-red-500 mt-2 text-sm">
                                        {{ $errors->first('title') }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-4">
                                <label for="body"
                                    class="sr-only">Body</label>
                                <textarea name="body" id="body" cols="30" rows="4"
                                    placeholder="Body" class="bg-gray-100 border-2 w-full p-4 rounded-lg">{{ $article->body }}</textarea>

                                @error('body')
                                    <div class="text-red-500 mt-2 text-sm">
                                        {{ $errors->first('body') }}
                                    </div>
                                @enderror
                            </div>
                            <div>
                                <x-primary-button>
                                    Update
                                </x-primary-button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
