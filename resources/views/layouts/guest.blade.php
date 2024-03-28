<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="font-sans text-gray-900 antialiased">
    <div class="min-h-screen justify-content-lg-center items-center pt-6 sm:pt-0 bg-gray-100 dark:bg-gray-900"
        style=" width: 100%; height: 100%; position: fixed; background-position: center; background-repeat: no-repeat; background-size: cover; background-image: url(' {{ asset('images/welcome-bg.gif') }}')">
        <section class="p-5" style="position: fixed; width: 100%; height: 100%; background: #FFFFFFBB">
            <div>
                <a href="/" wire:navigate>
                    <x-application-logo class="w-60 h-60 shadow-lg rounded fill-current text-gray-500 mx-auto" />
                </a>
            </div>

            <div
                class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white dark:bg-gray-800 shadow-md overflow-hidden sm:rounded-lg mx-auto">
                {{ $slot }}
            </div>
        </section>
    </div>
</body>

</html>
