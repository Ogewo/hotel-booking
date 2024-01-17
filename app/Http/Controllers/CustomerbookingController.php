<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Models\Booking;

class CustomerbookingController extends Controller
{
    function customerbooking()
    {
        return view('customerbooking');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255|string',
            'email' => 'required|max:255|string',
            'phonenumber' => 'required|string',
            'roomtype' => 'required|max:20|string',
            'datein' => 'date',
            'dateout' => 'date',
        ]);

        Booking::create([
            'name' => $request->name,
            'email' => $request->email,
            'phonenumber' => $request->phonenumber,
            'roomtype' => $request->roomtype,
            'datein' => $request->datein,
            'dateout' => $request->dateout
        ]);

        return redirect('/customerbooking')->with('status', 'Booking was Successful');
    }
}
