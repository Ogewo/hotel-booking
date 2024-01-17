<?php

namespace App\Http\Controllers;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Models\Booking;

class EditbookingController extends Controller
{
    public function editBooking($id)
    {
        $booking = Booking::findOrFail($id); // Fetch the booking by ID
        return view('editbooking', compact('booking'));
    }

    public function updateBooking(Request $request, $id)
    {
        // Validate the form data
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phonenumber' => 'required',
            'roomtype' => 'required',
            'datein' => 'required|date',
            'dateout' => 'required|date',
        ]);

        // Update the booking in the database
        $booking = Booking::findOrFail($id);
        $booking->name = $request->input('name');
        $booking->email = $request->input('email');
        $booking->phonenumber = $request->input('phonenumber');
        $booking->roomtype = $request->input('roomtype');
        $booking->datein = $request->input('datein');
        $booking->dateout = $request->input('dateout');

        $booking->save();

        // Redirect back to the admin dashboard with a success message
        return redirect()->route('admindashboard')->with('status', 'Booking updated successfully!');
    }
}
