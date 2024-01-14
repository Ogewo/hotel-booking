<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EditBookingController extends Controller
{
    function editbookings()
    {
      return view('editbooking');
    }
}
