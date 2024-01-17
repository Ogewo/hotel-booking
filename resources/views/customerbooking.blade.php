<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Booking</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    @vite('resources/css/app.css')
  @vite('resources/js/app.js')
</head>
<body class="bg-light">
<div class="header flex items-center justify-between px-4">
<div class="w-[80px] p-1 rounded-full">
        <img src="{{ asset('images/logo.png') }}" alt="logo">
    </div>
        
        @auth
            <form action="{{ route('logout') }}" method="POST" class='flex alignitems-center justify-center'>
                @csrf
                <button type="submit" class="text-green-400 underline font-bold rounded-xl">Logout</button>
            </form>
        @endauth
    </div>

<div class="container mt-5">
    <h2 class="text-center text-success">Hotel Booking</h2>
    @if (session('status'))
        <div class='alert alert-success'>{{session('status')}}</div>
    @endif

    <!-- Booking Form --> 
    <form action="{{ url('/customerbooking') }}" method='POST'>
        @csrf
        <!-- Customer Information -->
        <div class="row mt-4">
            <div class="col-md-6">
                <div class="bg-green-400 p-3 text-white rounded">
                    <h5>Customer Information</h5>
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" name='name' id="name" placeholder="Enter Your Name" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email ID</label>
                        <input type="email" class="form-control" name='email' id="email" placeholder="Enter Your Email ID" required>
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label">Phone Number</label>
                        <input type="text" class="form-control" name='phonenumber' id="phone" placeholder="Enter Your Phone Number" required>
                    </div>
                </div>
            </div>

            <!-- Room Selection -->
            <div class="col-md-6">
                <div class="bg-white p-3 rounded">
                    <h5 class="text-success">Room Selection</h5>
                    <div class="mb-3">
                        <label for="roomType" class="form-label">Room Type</label>
                        <select class="form-select" id="roomType" name='roomtype' required>
                            <option value="" selected disabled>Select Room Type</option>
                            <option value="single">Single</option>
                            <option value="double">Double</option>
                            <option value="suite">Suite</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="checkInDate" class="form-label">Check-in Date</label>
                        <input type="date" name='datein' class="form-control" id="checkInDate" required>
                    </div>
                    <div class="mb-3">
                        <label for="checkOutDate" class="form-label">Check-out Date</label>
                        <input type="date" name='dateout' class="form-control" id="checkOutDate" required>
                    </div>
                </div>
            </div>
        </div>

        <!-- Submit Button -->
        <div class="text-center mt-4">
            <button type="submit" class="btn btn-success  hover:bg-green-400 hover:text-white text-green-400 font-bold">Book Now</button>
        </div>
    </form>
</div>

<!-- Bootstrap JS (optional, only if you need JavaScript features) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
