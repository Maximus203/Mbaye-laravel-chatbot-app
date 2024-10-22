<!DOCTYPE html>
<html class="{{ session('dark') ? 'dark' : '' }}" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Chatbot - @yield('title')</title>


    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Fira+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>

<body
    class="font-sans bg-gray-50 text-black/50 bg-gradient-to-b dark:from-dark-primary-600 dark:to-dark-primary-500 dark:text-white/50">
    <header>
        @livewire('header.navigation')
    </header>

    <main class="mx-6 md:mx-16 min-h-screen md:min-h-[36.3em]">
        @yield('slot')
    </main>

    <footer
        class="bg-gradient-to-b from-gray-50 to-blue-100 text-center text-sm text-black dark:text-gray-200 sticky bottom-0 w-full p-4 dark:from-dark-primary-500 dark:to-dark-primary-400 ">
        @livewire('footer')
    </footer>

    @livewireScripts

</body>

</html>
