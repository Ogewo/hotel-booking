<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CustomerbookingController;
use App\Http\Controllers\EditbookingController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DeleteBookingController;
use Illuminate\Support\Facades\Route;
use App\Models\Booking;

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

Route::post('/customerbooking', [CustomerbookingController::class, 'store']);
Route::get('/admindashboard', [AdminController::class, 'showBookings'])->name('admindashboard');
Route::get('/editbooking/{id}', [EditbookingController::class, 'editBooking'])->name('editbooking');
Route::match(['post', 'put'], '/updatebooking/{id}', [EditbookingController::class, 'updateBooking'])->name('updatebooking');
Route::delete('/deletebooking/{id}', [DeleteBookingController::class, 'deleteBooking'])->name('deletebooking');




Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/customerbooking', [CustomerbookingController::class, 'customerbooking']);
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
