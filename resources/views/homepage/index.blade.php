<x-guest-layout>
    <h1 class="font-bold text-xl mb-4 dark:text-gray-100">Derniers articles</h1>
    <ul class="grid sm:grid-cols-2 gap-8">
        @foreach ($articles as $article)
            <li>
                <x-article-card :article="$article" />
            </li>
        @endforeach
    </ul>
</x-guest-layout>
