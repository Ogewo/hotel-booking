<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Users;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\EditbookingController;
use App\Http\Controllers\DashboardController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', function () {
    return view('welcome');
});
Route::view('hello', 'hello');

// Route::get('/about', fu  nction(){
//     return view('about');
// });
#or 
Route:: view('about', 'about1 '); # The first about is the url second is the page name
Route::get('/users/{name}', [Users::class, 'index']);
Route::get('/form/allbookings', [BookingController::class, 'allbookings']);
Route::get('/editbooking', [EditbookingController::class, 'editbooking']);
Route::get('/dashboard', [DashboardController::class, 'dashboard']);