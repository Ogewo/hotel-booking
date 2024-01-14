<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset='UTF-8'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Bookings</title>
    <!-- Include Chart.js from CDN -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Tailwind CSS -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet"> -->
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
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
            <input type='text' placeholder='Search Here...'
                class='bg-green-400 p-2 rounded-full text-white focus:outline-none'>
            <div>
                <span class='absolute top-6 bg-green-500 rounded-full p-1 text-white font-bold text-[10px]'>3</span>
                <button class="focus:outline-none">
                    <span class='p-1'>🔔</span>
                </button>
                <span class='font-semibold'>Username</span>
            </div>
        </div>
    </div>
    <div class='flex justify-between'>
        <aside class="flex flex-col bg-white text-black w-64 h-screen p-4">
            <div class='flex justify-center space-x-2 items-center text-white p-2 rounded-xl bg-green-400'>
                <i class='fa fa-dashboard'></i>
                <button class="text-2xl font-semibold">Dashboard</button>
            </div>

            <div class="dropdown ">
              <a href="#" class="dropdown-link space-x-2 hover:text-green-500" id="dropdownLink"><i class='fa fa-bars mr-2'></i>Booking <i class="fa fa-caret-right"></i></a>
              <ul class="dropdown-list hidden" id="dropdownList">
                  <li><a href="#">All Booking</a></li>
                  <li><a href="/editbooking">Edit Booking</a></li>
                  <li><a href="#">Add a Booking</a></li>
              </ul>
           </div>

           <div class="dropdown">
              <a href="#" class="dropdown-link space-x-2 hover:text-green-500" id="dropdownLink"><i class='fa fa-users mr-2'></i> Customers <i class="fa fa-caret-right"></i></a>
              <ul class="dropdown-list hidden" id="dropdownList">
                  <li><a href="#">All Booking</a></li>
                  <li><a href="#">Edit Booking</a></li>
                  <li><a href="#">Add a Booking</a></li>
              </ul>
           </div>

           <div class="dropdown">
              <a href="#" class="dropdown-link space-x-2 hover:text-green-500" id="dropdownLink"><i class='fa fa-bed mr-2'></i> Rooms <i class="fa fa-caret-right"></i></a>
              <ul class="dropdown-list hidden" id="dropdownList">
                  <li><a href="#">All Booking</a></li>
                  <li><a href="editbooking">Edit Booking</a></li>
                  <li><a href="#">Add a Booking</a></li>
              </ul>
           </div>
           <div class="dropdown">
              <a href="#" class="dropdown-link space-x-2 hover:text-green-500" id="dropdownLink"><i class='fa fa-users mr-2'></i> Staff <i class="fa fa-caret-right"></i></a>
              <ul class="dropdown-list hidden" id="dropdownList">
                  <li><a href="#">All Booking</a></li>
                  <li><a href="editbooking">Edit Booking</a></li>
                  <li><a href="#">Add a Booking</a></li>
              </ul>
           </div>
           <div class="dropdown">
              <a href="#" class="dropdown-link space-x-2 hover:text-green-500" id="dropdownLink"><i class='fa fa-money mr-2'></i> Pricing <i class="fa fa-caret-right"></i></a>
              <ul class="dropdown-list hidden" id="dropdownList">
                  <li><a href="#">All Booking</a></li>
                  <li><a href="editbooking">Edit Booking</a></li>
                  <li><a href="#">Add a Booking</a></li>
              </ul>
           </div>
           <div class="dropdown">
              <a href="#" class="dropdown-link space-x-2 hover:text-green-500" id="dropdownLink"><i class='fa fa-share mr-2'></i> Apps <i class="fa fa-caret-right"></i></a>
              <ul class="dropdown-list hidden" id="dropdownList">
                  <li><a href="#">All Booking</a></li>
                  <li><a href="editbooking">Edit Booking</a></li>
                  <li><a href="#">Add a Booking</a></li>
              </ul>
           </div>
           <div class="dropdown">
              <a href="#" class="dropdown-link space-x-2 hover:text-green-500" id="dropdownLink"><i class='fa fa-users mr-2'></i> Employees <i class="fa fa-caret-right"></i></a>
              <ul class="dropdown-list hidden" id="dropdownList">
                  <li><a href="#">All Booking</a></li>
                  <li><a href="editbooking">Edit Booking</a></li>
                  <li><a href="#">Add a Booking</a></li>
              </ul>
           </div>
           <div class="dropdown">
              <a href="#" class="dropdown-link space-x-2 hover:text-green-500" id="dropdownLink"><i class='fa fa-address-card mr-2'></i> Accounts <i class="fa fa-caret-right"></i></a>
              <ul class="dropdown-list hidden" id="dropdownList">
                  <li><a href="#">All Booking</a></li>
                  <li><a href="editbooking">Edit Booking</a></li>
                  <li><a href="#">Add a Booking</a></li>
              </ul>
           </div>
           <div class="dropdown">
              <a href="#" class="dropdown-link space-x-2 hover:text-green-500" id="dropdownLink"><i class='fa fa-book mr-2'></i> Payroll <i class="fa fa-caret-right"></i></a>
              <ul class="dropdown-list hidden" id="dropdownList">
                  <li><a href="#">All Booking</a></li>
                  <li><a href="editbooking">Edit Booking</a></li>
                  <li><a href="#">Add a Booking</a></li>
              </ul>
           </div>
           <div class="dropdown">
              <a href="#" class="dropdown-link space-x-2 hover:text-green-500" id="dropdownLink"><i class='fa fa-calendar mr-2'></i> Calendar <i class="fa fa-caret-right"></i></a>
              <ul class="dropdown-list hidden" id="dropdownList">
                  <li><a href="#">All Booking</a></li>
                  <li><a href="editbooking">Edit Booking</a></li>
                  <li><a href="#">Add a Booking</a></li>
              </ul>
           </div>
           <div class="dropdown">
              <a href="#" class="dropdown-link space-x-2 hover:text-green-500" id="dropdownLink"><i class='fa fa-pencil mr-2'></i> Blog <i class="fa fa-caret-right"></i></a>
              <ul class="dropdown-list hidden" id="dropdownList">
                  <li><a href="#">All Booking</a></li>
                  <li><a href="editbooking">Edit Booking</a></li>
                  <li><a href="#">Add a Booking</a></li>
              </ul>
           </div>
           <div class="dropdown">
              <a href="#" class="dropdown-link space-x-2 hover:text-green-500" id="dropdownLink"><i class='fa fa-building mr-2'></i> Assets <i class="fa fa-caret-right"></i></a>
              <ul class="dropdown-list hidden" id="dropdownList">
                  <li><a href="#">All Booking</a></li>
                  <li><a href="editbooking">Edit Booking</a></li>
                  <li><a href="#">Add a Booking</a></li>
              </ul>
           </div>
           <div class="dropdown">
              <a href="#" class="dropdown-link space-x-2 hover:text-green-500" id="dropdownLink"><i class='fa fa-bell mr-2'></i> Activities <i class="fa fa-caret-right"></i></a>
              <ul class="dropdown-list hidden" id="dropdownList">
                  <li><a href="#">All Booking</a></li>
                  <li><a href="editbooking">Edit Booking</a></li>
                  <li><a href="#">Add a Booking</a></li>
              </ul>
           </div>
        </aside>  
    <div class='container flex flex-col mr-10'>
    <div class='flex flex-col lg:items-start items-center justify-between lg:flex-row lg:space-x-4 py-10'>
        <div class='flex items-center justify-between px-4 shadow-xl text-green-400 font-bold text-2xl bg-white lg:w-[360px] lg:h-[100px] w-[500px] h-[150px]'>
                <div class=''>
                    <span>236</span>
                    <h1>Total Bookings</h1>
                </div>
                <i class='fa fa-user-plus'></i>
            </div>
            <div
                class='flex items-center justify-between px-4 shadow-xl text-green-400 font-bold text-2xl bg-white lg:w-[360px] lg:h-[100px] w-[500px] h-[150px]'>
                <div class=''>
                    <span>236</span>
                    <h1>Available Rooms</h1>
                </div>
                <i class='fa fa-bed'></i>
            </div>
            <div
                class='flex items-center justify-between px-4 shadow-xl text-green-400 font-bold text-2xl bg-white lg:w-[360px] lg:h-[100px] w-[500px] h-[150px]'>
                <div class=''>
                    <span>1538</span>
                    <h1>Enquiries</h1>
                </div>
                <i class='fa fa-question-circle'></i>
            </div>
            <div
                class='flex items-center justify-between px-4 shadow-xl text-green-400 font-bold text-2xl bg-white lg:w-[360px] lg:h-[100px] w-[500px] h-[150px]'>
                <div class=''>
                    <span>236</span>
                    <h1>Collections</h1>
                </div>
                <i class='fa fa-world'></i>
            </div>
         </div> 
         <div class='container flex justify-between overflow-hidden'>
         <div class='bg-white w-[600px] h-[400px]'>
        <canvas id="salesChart" width="800" height="400"></canvas>
        </div>
        <div class='bg-white w-[600px] h-[400px]'>
        <canvas id="salesChart" width="800" height="400"></canvas>
        </div>
         </div>
         <!-- Container with all the bookings -->
         <div class='bg-white my-10 py-6'>
            <div class='flex justify-between p-10'>
                <h1 class='font-bold text-green-400'>Bookings</h1>
                <button class='bg-green-400 text-white font-bold px-6 py-2 rounded-full'>View All</button>
            </div>
            <div class='flex justify-between font-bold px-2'>
                <h1>Booking ID</h1>
                <h1>Name</h1>
                <h1>Email ID</h1>
                <h1>Room Type</h1>
                <h1>Room Number</h1>
                <h1>Status</h1>
            </div>
         </div>
    </div>            
    </div>
</body>
</html>
