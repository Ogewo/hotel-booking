<?php
namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

class DeleteBookingController extends Controller
{
    public function deleteBooking($id)
    {
        // Find and delete the booking
        Booking::findOrFail($id)->delete();

        // Redirect back to the admin dashboard with a success message
        return redirect()->route('admindashboard')->with('status', 'Booking deleted successfully!');
    }
}
