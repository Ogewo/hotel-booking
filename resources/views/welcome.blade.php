<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Homepage</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
</head>

<body class="bg-blue-100">
    <!-- Header Section -->
    <header class="bg-white shadow-md text-white py-4">
        <div class="container mx-auto flex items-center justify-between">
            <!-- Logo or Website Name -->
            <a href="#" class="text-xl font-bold text-gray-900">Crown Inn</a>



            <!-- Navigation -->
            <nav class="space-x-4">
                @if (Route::has('login'))
                    @auth
                        <a href="{{ route('public.home') }}"
                            class="font-semibold hover:text-gray-300">Dashboard</a>
                    @else
                        <button class='bg-green-500 px-4 py-1 rounded-md'>
                        <a href="{{ route('login') }}"
                            class="font-semibold hover:text-gray-300">Log
                            in</a>
                        </button>
                        
                        <button class='border border-green-400 text-green-400 px-2 py-1 rounded-md'>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}"
                                class="ml-4 font-semibold hover:text-gray-300">Register</a>
                         </button>
                        @endif
                    @endauth
                @endif

            </nav>
        </div>
    </header>

    <!-- Main Content Section -->
    <div class="">
        
    </div>
</body>

</html>
