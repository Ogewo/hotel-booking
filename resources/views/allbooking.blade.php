<!DOCTYPE html>
<html lang='en'>
<head>
    <meat charset='UTF-8'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Bookings</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--Tailwind CSS -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet"> -->
    @vite('resources/css/app.css')
</head>
<body class='font-sans bg-blue-100'>
<div class='header flex items-center justify-between bg-white shadow-lg p-2'>
    <!-- Left Section -->
    <div class='flex items-center space-x-4'>
    <img src='{{ asset('images/logo.png') }}' alt='Icon' class='border border-gray-200 w-20 h-20 rounded-full'>
    <h1 class='text-lg font-semibold text-green-500'>All Bookings</h1>
</div>
    <!-- Center Section -->
    <div></div>
    <!-- Right Section -->
    <div class='flex items-center space-x-4'>
        <!-- Search Bar -->
        <input type='text' placeholder='Search Here...' class='bg-green-400 p-2 rounded-full text-white focus:outline-none''>

        <div>
            <span class='absolute top-6 bg-green-500 rounded-full p-1 text-white font-bold text-[10px]'>3</span>
            <button class="focus:outline-none">
                    <span class='p-1'>🔔</span>
                </button>
            <span class='font-semibold'>Username</span>
        </div>
    </div> 
</div>
<!-- <div class=''>
    <div class='dashboard bg-white w-[250px] h-screen'>
        <button>Dashboard</button>
    </div>
    <div class='main'></div>
</div> -->
<!-- Sidebar -->
<aside class="bg-white text-black w-64 h-screen p-4">
    <div class='flex justify-center space-x-2 items-center border text-white p-2 rounded-xl bg-green-400'>
    <i class='fa fa-dashboard'></i>
    <button class="text-2xl font-semibold">Dashboard</button>
    </div>
    <ul class="mt-4 px-2">
        <li class="flex space-x-2 items-center py-2 hover:text-green-500">
        <i class='fa fa-bars'></i>
            <a href="#" class="block">Booking</a>
            <i class='fa fa-caret-down'></i>
        </li>        
        <li class="flex space-x-2 items-center py-2 hover:text-green-500">
        <i class='fa fa-users'></i>
            <a href="#" class="block">Customers</a>
            <i class='fa fa-caret-down'></i>
        </li>
        <li class="flex space-x-2 items-center py-2 hover:text-green-500">
        <i class='fa fa-bed'></i>
            <a href="#" class="block">Rooms</a>
            <i class='fa fa-caret-down'></i>
        </li>
        <li class="flex space-x-2 items-center py-2 hover:text-green-500">
        <i class='fa fa-users'></i>
            <a href="#" class="block">Staff</a>
            <i class='fa fa-caret-down'></i>
        </li>
        <li class="flex space-x-2 items-center py-2 hover:text-green-500">
        <i class='fa fa-money'></i>
            <a href="#" class="block">Pricing</a>
            <i class='fa fa-caret-down'></i>
        </li>
        <li class="flex space-x-2 items-center py-2 hover:text-green-500">
        <i class='fa fa-share'></i>
            <a href="#" class="block">Apps</a>
            <i class='fa fa-caret-down'></i>
        </li>
        <li class="flex space-x-2 items-center py-2 hover:text-green-500">
        <i class='fa fa-users'></i>
            <a href="#" class="block">Employees</a>
            <i class='fa fa-caret-down'></i>
        </li>
        <li class="flex space-x-2 items-center py-2 hover:text-green-500">
        <i class='fa fa-address-card'></i>
            <a href="#" class="block">Accounts</a>
            <i class='fa fa-caret-down'></i>
        </li>
        <li class="flex space-x-2 items-center py-2 hover:text-green-500">
        <i class='fa fa-invoice'></i>
            <a href="#" class="block">Payroll</a>
            <i class='fa fa-caret-down'></i>
        </li>
        <li class="py-2 hover:text-green-500">
            <a href="#" class="block">Calendar</a>
        </li>
        <li class="py-2 hover:text-green-500">
            <a href="#" class="block">Blog</a>
        </li>
        <li class="py-2 hover:text-green-500">
            <a href="#" class="block">Assets</a>
        </li>
        <li class="py-2 hover:text-green-500">
            <a href="#" class="block">Activities</a>
        </li>
    </ul>
</aside>

</body>
</html>