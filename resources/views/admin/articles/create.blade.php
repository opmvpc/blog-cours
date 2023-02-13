<x-app-layout>
    <h1>Créer un article</h1>

    <form method="POST" action="{{ route('articles.store') }}"
        class="flex flex-col">

        @csrf

        <label for="title">Titre</label>
        <input id="title" type="text" name="title">
        <span class="text-red-500">{{ $errors->first('title') }}</span>

        </span>

        <label for="body">Texte de l'article</label>
        <textarea id="body" name="body" rows="10"></textarea>

        <input type="submit" value="Enregistrer">
    </form>

</x-app-layout>
