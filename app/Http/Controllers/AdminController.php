<?php
namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function showBookings()
    {
        $bookings = Booking::all();
        return view('admindashboard', ['bookings' => $bookings]);
    }
}
