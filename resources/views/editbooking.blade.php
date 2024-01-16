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
    <div class="flex flex-col items-center justify-center h-screen">
        <h2 class="text-center text-success font-bold text-2xl">Edit Booking</h2>
        
        <!-- First Horizontal Div --> 
        <div class="flex items-center justify-center w-[100rem] mt-2 font-bold">
            <div class="col-md-4">
                <div class="bg-success p-3 rounded">
                    <h5 class='text- mb-1'>Booking Information</h5>
                    <div class="mb-3 w-full">
                        <label for="bookingId" class="form-label">Booking ID</label>
                        <input type="text" class="form-control" id="bookingId" placeholder="Enter Booking ID">
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" placeholder="Enter Name">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email ID</label>
                        <input type="email" class="form-control" id="email" placeholder="Enter Email ID">
                    </div>
                </div>
            </div>

            <!-- Second Horizontal Div -->
            <div class="col-md-4">
                <div class="bg-white p-3 rounded">
                    <h5 class="text-success">Room Information</h5>
                    <div class="mb-3">
                        <label for="roomType" class="form-label">Room Type</label>
                        <select class="form-select" id="roomType">
                            <option value="single">Single</option>
                            <option value="double">Double</option>
                            <option value="suite">Suite</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="roomNumber" class="form-label">Room Number</label>
                        <input type="text" class="form-control" id="roomNumber" placeholder="Enter Room Number">
                    </div>
                    <div class="mb-3">
                        <label for="status" class="form-label">Status</label>
                        <select class="form-select" id="status">
                            <option value="confirmed">Confirmed</option>
                            <option value="pending">Pending</option>
                            <option value="cancelled">Cancelled</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>

        <div class="text-center mt-4">
            <button class="btn btn-success">Save Changes</button>
        </div>
    </div>

    <!-- Bootstrap JS (optional, only if you need JavaScript features) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
