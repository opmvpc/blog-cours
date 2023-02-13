<x-guest-layout>
    <h1 class="font-bold text-xl mb-4">{{ $article->title }}</h1>
    <div class="mb-4 text-xs text-gray-500">
        {{ $article->published_at }}
    </div>
    <img src="{{ asset('storage/' . $article->img_path) }}" alt="illustration de l'article">
    <div>
        {!! \nl2br($article->body) !!}
    </div>
</x-guest-layout>
