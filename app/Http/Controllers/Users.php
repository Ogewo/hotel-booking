<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class Users extends Controller
{
    // function index()
    // { 
    //     echo 'Hello from controller';
    // }
    function index($name)
    { 
        if (View::exists('about1')){
            return view('about',['name' => $name]);
        }else{
            abort(404);
        }
    }
}
