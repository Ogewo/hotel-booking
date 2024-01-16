<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Booking</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    @vite('resources/css/style.css')
  @vite('resources/js/script.js')
</head>
<body class="bg-light">

<div class="container mt-5">
    <h2 class="text-center text-success">Hotel Booking</h2>

    <!-- Booking Form -->
    <form>
        <!-- Customer Information -->
        <div class="row mt-4">
            <div class="col-md-6">
                <div class="bg-green-400 p-3 text-white rounded">
                    <h5>Customer Information</h5>
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" placeholder="Enter Your Name" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email ID</label>
                        <input type="email" class="form-control" id="email" placeholder="Enter Your Email ID" required>
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label">Phone Number</label>
                        <input type="tel" class="form-control" id="phone" placeholder="Enter Your Phone Number" required>
                    </div>
                </div>
            </div>

            <!-- Room Selection -->
            <div class="col-md-6">
                <div class="bg-white p-3 rounded">
                    <h5 class="text-success">Room Selection</h5>
                    <div class="mb-3">
                        <label for="roomType" class="form-label">Room Type</label>
                        <select class="form-select" id="roomType" required>
                            <option value="" selected disabled>Select Room Type</option>
                            <option value="single">Single</option>
                            <option value="double">Double</option>
                            <option value="suite">Suite</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="checkInDate" class="form-label">Check-in Date</label>
                        <input type="date" class="form-control" id="checkInDate" required>
                    </div>
                    <div class="mb-3">
                        <label for="checkOutDate" class="form-label">Check-out Date</label>
                        <input type="date" class="form-control" id="checkOutDate" required>
                    </div>
                </div>
            </div>
        </div>

        <!-- Submit Button -->
        <div class="text-center mt-4">
            <button type="submit" class="btn btn-success">Book Now</button>
        </div>
    </form>
</div>

<!-- Bootstrap JS (optional, only if you need JavaScript features) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
