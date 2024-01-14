<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset='UTF-8'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Bookings</title>
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
    <div class='container flex justify-between mr-10'>
      <div class='flex flex-col'>
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
      </div>
      <div class='flex flex-col'>
           <div class='flex space-x-10 p-4'>
           <div class='flex flex-col space-y-1 w-[500px]'> 
           <label class="text-sm font-semibold text-gray-600">Booking ID</label>
           <input type="text" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500">

           <label class="text-sm font-semibold text-gray-600">Total Members</label>
           <input type="number" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500">

           <label class="text-sm font-semibold text-gray-600">Arrival Date</label>
           <input type="date" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500">

           <label class="text-sm font-semibold text-gray-600">Phone Number</label>
           <input type="number" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500">
           </div>

           <div class='flex flex-col space-y-1 w-[500px]'>
           <label class="text-sm font-semibold text-gray-600">Name</label>
           <input type="text" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500">

           <label class="text-sm font-semibold text-gray-600">Date</label>
           <input type="date" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500">

           <label class="text-sm font-semibold text-gray-600">Departure Date</label>
           <input type="date" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500">

           <label class="text-sm font-semibold text-gray-600">File Upload</label>
           <input type="text" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500">
           </div>

           <div class='flex flex-col space-y-1 w-[500px]'>
           <label class="text-sm font-semibold text-gray-600">Room Type</label>
           <input type="text" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500">
           <select id="selectMultiple" name="selectMultiple" multiple class="mt-1 block w-full px-3 py-2 border rounded-md shadow-sm focus:outline-none focus:border-blue-500 focus:ring focus:ring-blue-200">
           <option value="item1">Item 1</option>
           <option value="item2">Item 2</option>
           <option value="item3">Item 3</option>
            </select>

           <label class="text-sm font-semibold text-gray-600">Time</label>
           <input type="text" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500">

           <label class="text-sm font-semibold text-gray-600">Email ID</label>
           <input type="text" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500">

           <label class="text-sm font-semibold text-gray-600">Message</label>
           <input type="text" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500">
            </div>
        </div>  
        <div class='flex justify-end mr-6 '><button class='bg-green-400 px-4 py-1 rounded-full text-white font-bold'>Save</button></div>      
      </div>
    </div>
</body>
</html>
