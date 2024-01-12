<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookingController extends Controller
{
    function allbookings()
    {
       return view('allbooking');
    }
}
