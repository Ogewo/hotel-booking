<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        if (Auth::id()) {
            $usertype = Auth()->user()->usertype;

            if ($usertype == 'user') {
                return view('customerbooking');
            } elseif ($usertype == 'admin') {
                $bookings = Booking::all(); // or fetch bookings based on your logic
                return view('admindashboard', ['bookings' => $bookings]);
            } else {
                return redirect()->back();
            }
        }
    }
}
