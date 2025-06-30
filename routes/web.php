<?php

use Illuminate\Support\Facades\Route;

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

Route::get('secondpage', function () {
    return view('attractionpage');
});

Route::get('thirdpage', function () {
    return view('bookingpage');
});

Route::get('fourthpage', function () {
    return view('bookingconfirmation');
});

Route::get('/bookingconfirmation/{date}/{name}/{ic}/{contact}/{email}/{country}', function ($date, $name, $ic, $contact, $email, $country) {
    return view('bookingconfirmation')->with('date', $date)->with('name', $name)->with('ic', $ic)->with('contact', $contact)->with('email', $email)->with('country', $country);                          
}); 

/* direct POST requests to /submit to the submit method of YourController. 
Route::post('/submit', 'App\Http\Controllers\Controller@submit')->name('submit'); */
