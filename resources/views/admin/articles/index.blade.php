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
                        Articles
                    </div>

                    <div class="mt-6 text-gray-500">
                        <table class="table-auto w-full">
                            <thead>
                                <tr>
                                    <th class="px-4 py-2">Title</th>
                                    <th class="px-4 py-2">Author</th>
                                    <th class="px-4 py-2">Created</th>
                                    <th class="px-4 py-2">Updated</th>
                                    <th class="px-4 py-2">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($articles as $article)
                                    <tr>
                                        <td class="border px-4 py-2">
                                            {{ $article->title }}</td>
                                        <td class="border px-4 py-2">
                                            {{ $article->author }}</td>
                                        <td class="border px-4 py-2">
                                            {{ $article->created_at }}</td>
                                        <td class="border px-4 py-2">
                                            {{ $article->updated_at }}</td>
                                        <td class="border px-4 py-2">
                                            <a href="{{ route('articles.edit', $article->id) }}"
                                                class="text-blue-500">Edit</a>
                                            <form
                                                action="{{ route('articles.destroy', $article->id) }}"
                                                method="POST" class="inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"
                                                    class="text-red-500">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
