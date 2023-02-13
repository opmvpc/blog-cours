<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet"
        href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans text-gray-900 antialiased">
    <div class="min-h-screen flex flex-col pt-6 bg-gray-100 dark:bg-gray-900">
        <div class="container mx-auto flex flex-col space-y-10 px-3">
            <header>
                <nav
                    class="flex justify-between items-center py-2 bg-white shadow-md px-2 rounded-md">
                    <div>
                        <a href="{{ url('/') }}"
                            class="group font-bold text-3xl flex items-center space-x-4 hover:text-emerald-600 transition ">
                            <x-application-logo
                                class="w-10 h-10 fill-current text-gray-500 group-hover:text-emerald-500 transition" />
                            <span>Mon blog</span>
                        </a>
                    </div>
                    <div class="flex items-center space-x-4 justify-end">
                        <a class="font-bold hover:text-emerald-600 transition"
                            href="{{ route('articles.index') }}">Articles</a>

                        <a class="font-bold hover:text-emerald-600 transition"
                            href="{{ route('about.index') }}">À propos</a>
                    </div>
                </nav>
            </header>

            <main>
                {{ $slot }}
            </main>
        </div>
        <footer class="flex justify-center items-center space-x-4 py-5">
            <a href="#">insta</a>
            <a href="#">twitter</a>
            <a href="#">facebook</a>
        </footer>
    </div>
</body>

</html>
