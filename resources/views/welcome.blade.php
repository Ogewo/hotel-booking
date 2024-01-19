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

<body class="bg-gray-100">
    <!-- Header Section -->
    <header class='flex text-green-400 space-x-0 justify-between items-center text-[15px] font-bold bg-white py-4 px-10'>
       <ul class='flex space-x-10'>
        <li><a href=''>Home</a></li>
        <li><a href=''>About Us</a></li>
        <li><a href=''>Our Rooms</a></li>
        <li><a href=''>Reservation</a></li>
        <li><a href=''>Contact</a></li>
       </ul>
       <img src="{{asset('images/logo.png')}}" class='w-20'/>

       <div class='space-x-4'>
       @if (Route::has('login'))
                    @auth
                        <a href="{{ route('public.home') }}"
                            class="font-semibold hover:bg-green-400">Dashboard</a>
                    @else
                        <button class='bg-green-500 text-white px-4 py-1 rounded-full hover:bg-green-300'>
                        <a href="{{ route('login') }}"
                            class="font-bold ">Log
                            in</a>
                        </button>
                        
                        <button class='border border-green-500 text-green-500 px-2 py-1 rounded-full hover:bg-green-300 hover:text-white'>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}"
                                class="ml-4 font-bold">Register</a>
                         </button>
                        @endif
                    @endauth
                @endif
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
       
       <div class='container flex  items-center justify-center bg-white h-[200px] w-[900px] py-6'>
        <div>
            <h1 class='font-bold'>ROOM TYPES</h1>
            <p>Deluxe Rooms</p>
            <p>Executive Suites</p>
            <p>Family Suites</p>
        </div>
        <div class="border border-gray-500 h-16 mx-4"></div>
        <div>
            <h1 class='font-bold'>AMENITIES</h1>
            <p>Rooftop Pool</p>
            <p>Gourmet Dining</p>
            <p>Spa & Wellness</p>
        </div>
        <div class="border-l-2 border-gray-500 h-16 mx-4"></div>
        <div class='flex flex-col items-center'>
        <h1 class='font-bold'>GUESTS MONTHLY</h1>
            <span >3000</span>
        </div>
        <div class="border-l-2 border-gray-500 h-16 mx-4"></div>
        <div class='flex flex-col items-center '>
            <p>Want to experience luxury stay at Crown Inn?</p>
            <a href="{{ url('/customerbooking') }}" class='bg-green-500  text-white font-bold rounded-full px-3 py-1'>Book Now</a>
        </div>
       </div>
    </section>    
    <section class=' h-[500px]'>
        <h1 class='text-center mt-6'>LITTLE ABOUT US</h1>
        <div class='flex space-x-40 justify-center pt-[70px]'>
        <div>
            <img src="{{asset('images/homeimage.jpeg')}}" class='h-80'/>
        </div>
        <div class='flex flex-col w-[450px] space-y-8'>
            <hr class='w-10 border border-gray-700'/>
            <h1 class='text-6xl font-bold'>A best place to enjoy your life</h1>
            <p class='text-gray-500 text-1xl'>Discover comfort and luxury at our exquisite hotel. Indulge in a world of relaxation and sophistication,
               where every moment becomes a memorable experience.</p>
        </div>
        </div>
    </section> 
     <section class='mt-0 bg-white flex items-center justify-center space-x-20 h-[500px]'>
        <div class='flex flex-col w-[400px]'>
            <p class='text-2xl font-bold'>DISCOVER OUR ROOMS</p>
            <h1>Luxury Interior</h1>
            <div class='bg-gray-200 space-x-4 rounded-md flex items-center h-[100px] mb-4 mt-10 px-2 py-4'>
                <div>
                    <img src="{{asset('images/room_1.jpeg')}}" class='h-[80px] w-[150px]'/>
                </div>
                <div class='text-[15px]'>
                    <p class='font-bold'>Classic Room</p>
                    <p>Starting from KSH.3000/Night</p>
                </div>
                
            </div>
            <div class='bg-gray-100 space-x-4 rounded-md flex items-center h-[100px] px-2'>
                <div>
                    <img src="{{asset('images/room_2.jpeg')}}" class='h-[80px] w-[150px]'/>
                </div>
                <div class='text-[15px]'>
                    <p class='font-bold'>Grand Deluxe Room</p>
                    <p>Starting from KSH.4000/Night</p>
                </div>
                
            </div>
            <div class='border space-x-4 rounded-md flex items-center h-[100px] mb-4 mt-4 px-2 py-4'>
                <div>
                    <img src="{{asset('images/double.jpeg')}}" class='h-[80px] w-[150px]'/>
                </div>
                <div class='text-[15px]'>
                    <p class='font-bold'>Ultra Superior Room</p>
                    <p>Starting from KSH.5000/Night</p>
                </div>
                
            </div>
        </div>
        <div class='bg-cover p-4'>
            <img src="{{asset('images/room.jpeg')}}" class='h-[450px] w-[800px]'/>
        </div>
    </section> 
    <section class=''>
        <div>
            
        </div>
    </section> 
    <section class='text-white bg-gray-900 flex items-center justify-center h-[150px]'>
        <div>
        <p>&copy; 2024 Crown Inn. All Rights Reserved.</p>
        </div>
    </section>     
    </div>
</body>

</html>
