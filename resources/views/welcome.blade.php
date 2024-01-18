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
            <img src="{{asset('images/logo.png')}}" alt='logo' class='w-20'/>
            <!-- <a href="#" class="text-xl font-bold text-gray-900">Crown Inn</a> -->

            

            <!-- Navigation -->
            <nav class="space-x-4">
                @if (Route::has('login'))
                    @auth
                        <a href="{{ route('public.home') }}"
                            class="font-semibold hover:bg-green-400">Dashboard</a>
                    @else
                        <button class='bg-green-500 px-4 py-1 rounded-md hover:bg-green-300'>
                        <a href="{{ route('login') }}"
                            class="font-semibold ">Log
                            in</a>
                        </button>
                        
                        <button class='border border-green-500 text-green-500 px-2 py-1 rounded-md hover:bg-green-300 hover:text-white'>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}"
                                class="ml-4 font-semibold">Register</a>
                         </button>
                        @endif
                    @endauth
                @endif

            </nav>
        </div>
    </header>

    <!-- Main Content Section -->
    <div class="">
    <section class='flex flex-col items-center bg-cover bg-center h-[900px]' style="background-image: url('{{ asset('images/landingimage.jpg') }}');opacity:;">
       <div class='flex flex-col items-center justify-center text-white font-bold  h-[800px]' style='z-index:;'>
       <h3>WELCOME TO</h3>
       <h1 class='text-6xl font-bold'>Crown Inn Hotel</h1>
       <p>A place to experience and enjoy life</p>
       </div>
       <div class='flex  justify-center bg-white h-[200px] w-[900px] py-8'>
        <div class='text-center'>
            <h1 class='font-bold text-2xl'>ROOM TYPES</h1>
            <p>Deluxe Rooms</p>
            <p>Executive Suites</p>
            <p>Family Suites</p>
        </div>
        <div class="border-l-2 border-gray-500 h-16 mx-4"></div>
        <div class='text-center'>
            <h1 class='font-bold text-2xl'>AMENITIES</h1>
            <p>Rooftop Pool</p>
            <p>Gourmet Dining</p>
            <p>Spa & Wellness</p>
        </div>
        <div class="border-l-2 border-gray-500 h-16 mx-4"></div>
        <div class='flex flex-col items-center'>
        <h1 class='font-bold text-2xl'>GUESTS MONTHLY</h1>
            <span >3000</span>
        </div>
        <div class="border-l-2 border-gray-500 h-16 mx-4"></div>
        <div class='text-center'>
            <p>Want to experience luxury stay at Crown Inn?</p>
            <button class='bg-green-400  text-white font-bold rounded-md px-3 py-1'>Book Now<i class='fa fa-arrow-right'></i></button>
        </div>
       </div>
    </section> 
    <section class='flex items-center justify-center space-x-80 h-[600px]'>
        <div>
            <img src="{{asset('images/homeimage.jpeg')}}" class='h-80'/>
        </div>
        <div class='flex flex-col items-center w-[600px] space-y-20'>
            <hr class='w-10 border border-gray-700'/>
            <h1 class='text-6xl font-bold text-center'>A best place to enjoy your life</h1>
            <p class='text-gray-500 text-1xl text-center'>Discover comfort and luxury at our exquisite hotel. Indulge in a world of relaxation and sophistication,
               where every moment becomes a memorable experience.</p>
        </div>
    </section> 
     <section class='bg-white flex items-center justify-center space-x-80 h-[500px]'>
        <div class='flex flex-col'>
            <p class='text-2xl font-bold'>DISCOVER OUR ROOMS</p>
            <h1>Luxury Interior</h1>
            <div class='flex h-10 mb-20'>
                <div>
                    <img src="{{asset('images/homeimage.jpeg')}}" class='h-[70px] w-40'/>
                </div>
                <div>
                    <p>Classic Room</p>
                    <p>Starting from KSH.4000/Night</p>
                </div>
            </div>
            <div class='flex h-10 mb-20'>
                <div>
                    <img src="{{asset('images/homeimage.jpeg')}}" class='h-[70px] w-40'/>
                </div>
                <div>
                    <p>Classic Room</p>
                    <p>Starting from KSH.4000/Night</p>
                </div>
            </div>
            <div class='flex h-10 mb-20'>
                <div>
                    <img src="{{asset('images/homeimage.jpeg')}}" class='h-[70px] w-40'/>
                </div>
                <div>
                    <p>Classic Room</p>
                    <p>Starting from KSH.4000/Night</p>
                </div>
            </div>
        </div>
        <div>
            <!-- <img src="{{asset('images/homeimage.jpeg')}}"/> -->
        </div>
    </section>     
    </div>
</body>

</html>
