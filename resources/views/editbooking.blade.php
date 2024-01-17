<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Booking</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    @vite('resources/css/app.css')  
    @vite('resources/js/app.js')   
</head> 

<body class="bg-light">     
    <div class="flex flex-col items-center justify-center h-screen font-bold ">
        <h2 class="text-center text-success font-bold text-2xl">Edit Booking</h2>
               
        <form action="{{ route('updatebooking', ['id' => $booking->id]) }}" method="POST" class='flex flex-col'>
        @if (session('status'))
            <div class="alert alert-success">{{ session('status') }}</div>
        @endif
    @csrf
    @method('PUT')

    <div class='flex '>
    <div class='bg-success p-4 my-4 rounded-l-md w-[400px]'>
        <!-- Booking Information Section -->
    <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control" name="name" id="name" placeholder="Enter Name" value="{{ $booking->name }}">
    </div>

    <div class="mb-3">
        <label for="email" class="form-label">Email ID</label>
        <input type="email" class="form-control" name="email" id="email" placeholder="Enter Email ID" value="{{ $booking->email }}">
    </div>

    <div class="mb-3">
        <label for="phonenumber" class="form-label">Phone Number</label>
        <input type="text" class="form-control" name="phonenumber" id="phonenumber" placeholder="Enter Your Phone Number" value="{{ $booking->phonenumber }}">
    </div>
    </div>

    <div class='border border-red-900 bg-white p-4 my-4 rounded-r-md w-[400px]'>
        <!-- Room Information Section -->
    <div class="mb-3">
        <label for="roomType" class="form-label">Room Type</label>
        <select class="form-select" id="roomType" name="roomtype">
            <option value="single" {{ $booking->roomtype === 'single' ? 'selected' : '' }}>Single</option>
            <option value="double" {{ $booking->roomtype === 'double' ? 'selected' : '' }}>Double</option>
            <option value="suite" {{ $booking->roomtype === 'suite' ? 'selected' : '' }}>Suite</option>
        </select>
    </div>

    <div class="mb-3">
        <label for="checkInDate" class="form-label">Check-in Date</label>
        <input type="date" name="datein" class="form-control" id="checkInDate" value="{{ $booking->datein }}" required>
    </div>

    <div class="mb-3">
        <label for="checkOutDate" class="form-label">Check-out Date</label>
        <input type="date" name="dateout" class="form-control" id="checkOutDate" value="{{ $booking->dateout }}" required>
    </div>
    </div>
    </div>

    <!-- Save Changes Button -->
    <button type="submit" class="btn btn-success text-green-900 font-bold">Save Changes</button>
</form>


    <!-- Bootstrap JS (optional, only if you need JavaScript features) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
