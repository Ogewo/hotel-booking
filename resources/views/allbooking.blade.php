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
        <aside class="bg-white text-black w-64 h-screen p-4">
            <div class='flex justify-center space-x-2 items-center text-white p-2 rounded-xl bg-green-400'>
                <i class='fa fa-dashboard'></i>
                <button class="text-2xl font-semibold">Dashboard</button>
            </div>

            <div class="dropdown">
    <a href="#" class="dropdown-link" id="dropdownLink">Booking <i class="fa fa-caret-right"></i></a>
    <ul class="dropdown-list hidden" id="dropdownList">
        <li><a href="#">Item 1</a></li>
        <li><a href="#">Item 2</a></li>
        <li><a href="#">Item 3</a></li>
    </ul>
</div>


            <ul class="mt-4 px-2">
                <li class="flex space-x-2 items-center py-2 hover:text-green-500">
                    <i class='fa fa-bars'></i>
                    <a href="#" class="block">Booking</a>
                    <i class='fa fa-caret-right'></i>
                </li>
                <li class="flex space-x-2 items-center py-2 hover:text-green-500">
                    <i class='fa fa-users'></i>
                    <a href="#" class="block">Customers</a>
                    <i class='fa fa-caret-right'></i>
                </li>
                <li class="flex space-x-2 items-center py-2 hover:text-green-500">
                    <i class='fa fa-bed'></i>
                    <a href="#" class="block">Rooms</a>
                    <i class='fa fa-caret-right'></i>
                </li>
                <li class="flex space-x-2 items-center py-2 hover:text-green-500">
                    <i class='fa fa-users'></i>
                    <a href="#" class="block">Staff</a>
                    <i class='fa fa-caret-right'></i>
                </li>
                <li class="flex space-x-2 items-center py-2 hover:text-green-500">
                    <i class='fa fa-money'></i>
                    <a href="#" class="block">Pricing</a>
                </li>
                <li class="flex space-x-2 items-center py-2 hover:text-green-500">
                    <i class='fa fa-share'></i>
                    <a href="#" class="block">Apps</a>
                    <i class='fa fa-caret-right'></i>
                </li>
                <li class="flex space-x-2 items-center py-2 hover:text-green-500">
                    <i class='fa fa-users'></i>
                    <a href="#" class="block">Employees</a>
                    <i class='fa fa-caret-right'></i>
                </li>
                <li class="flex space-x-2 items-center py-2 hover:text-green-500">
                    <i class='fa fa-address-card'></i>
                    <a href="#" class="block">Accounts</a>
                    <i class='fa fa-caret-right'></i>
                </li>
                <li class="flex space-x-2 items-center py-2 hover:text-green-500">
                    <i class='fa fa-book'></i>
                    <a href="#" class="block">Payroll</a>
                    <i class='fa fa-caret-right'></i>
                </li>
                <li class="flex space-x-2 items-center py-2 hover:text-green-500">
                    <i class='fa fa-calendar'></i>
                    <a href="#" class="block">Calendar</a>
                </li>
                <li class="flex space-x-2 items-center py-2 hover:text-green-500">
                    <i class='fa fa-pencil'></i>
                    <a href="#" class="block">Blog</a>
                    <i class='fa fa-caret-right'></i>
                </li>
                <li class="flex space-x-2 items-center py-2 hover:text-green-500">
                    <i class='fa fa-building'></i>
                    <a href="#" class="block">Assets</a>
                </li>
                <li class="flex space-x-2 items-center py-2 hover:text-green-500">
                    <i class='fa fa-bell'></i>
                    <a href="#" class="block">Activities</a>
                </li>
            </ul>
        </aside>  
    <div class='container flex flex-col mr-10'>
    <div class='flex flex-col lg:items-start items-center justify-between lg:flex-row lg:space-x-4 py-10'>
        <div class='flex items-center justify-between px-4 shadow-xl text-green-400 font-bold text-2xl bg-white lg:w-[360px] lg:h-40 w-[500px] h-[200px]'>
                <div class=''>
                    <span>236</span>
                    <h1>Total Bookings</h1>
                </div>
                <i class='fa fa-user-plus'></i>
            </div>
            <div
                class='flex items-center justify-between px-4 shadow-xl text-green-400 font-bold text-2xl bg-white lg:w-[360px] lg:h-40 w-[500px] h-[200px]'>
                <div class=''>
                    <span>236</span>
                    <h1>Available Rooms</h1>
                </div>
                <i class='fa fa-bed'></i>
            </div>
            <div
                class='flex items-center justify-between px-4 shadow-xl text-green-400 font-bold text-2xl bg-white lg:w-[360px] lg:h-40 w-[500px] h-[200px]'>
                <div class=''>
                    <span>1538</span>
                    <h1>Enquiries</h1>
                </div>
                <i class='fa fa-question-circle'></i>
            </div>
            <div
                class='flex items-center justify-between px-4 shadow-xl text-green-400 font-bold text-2xl bg-white lg:w-[360px] lg:h-40 w-[500px] h-[200px]'>
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
                <h1>Number</h1>
                <h1>Status</h1>
            </div>
         </div>
    </div>            
    </div>
    
    <script>
        // Sample data
        const salesData = {
            labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
            datasets: [{
                    label: 'Product A',
                    borderColor: 'rgba(75, 192, 192, 1)',
                    data: [10, 15, 8, 12, 18, 10, 16, 14, 20, 12, 18, 15],
                    fill: false,
                    tension: 0.4, // Set tension for wavy lines 
                },
                {
                    label: 'Product B',
                    borderColor: 'rgba(255, 99, 132, 1)',
                    data: [12, 10, 14, 8, 15, 12, 20, 18, 22, 16, 20, 25], 
                    fill: false,
                    tension: 0.4,
                },
            ],
        };
        
        // Chart configuration
        const chartConfig = {
            type: 'line',
            data: salesData,
            options: { 
                responsive: true, 
                scales: {  
                    x: {   
                        type: 'category',  
                        labels: salesData.labels,  
                    }, 
                    y: {
                        beginAtZero: true,
                    }, 
                },
                plugins: {
                    legend: {
                        position: 'top',
                    },
                },
            },
        };
    
        // Get the canvas element and render the chart
        const ctx = document.getElementById('salesChart').getContext('2d'); 
        new Chart(ctx, chartConfig);
    </script>
</body>
</html>
