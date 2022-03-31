<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\customAuthController;
use App\Models\drivers;
use App\Models\rides;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
 
Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/contact', [ContactController::class,'show'])->name('contact.show');
Route::post('/contact', [ContactController::class,'mailContactForm'])->name('contact.mailContactForm');


Route::get('/book', function(){
    return view('book');
})->name('book')->middleware('auth');

Route::post('/book',function(){
    rides::create([
        'name'=>request('name'),
        'email'=>request('email'),
        'phone'=>request('phone'),
        'passengers'=>request('passengers'),
        'pickaddress'=>request('pickaddress'),
        'dropaddress'=>request('dropaddress'),
        'date'=>request('date'),
        'time'=>request('time'),
        'car_type'=>request('car_type')
    ]);

    return redirect('/book')->with('message', 'Your ride booked successfully, You\'ll be assigned with a ryder shortly.');

});

Route::get('/join', function(){
    return view('join');
})->name('join');

Route::post('/join',function(){
    drivers::create([
        'name'=>request('name'),
        'email'=>request('email'),
        'phone'=>request('phone'),
        'address'=>request('address'),
        'city'=>request('city'),
        'state'=>request('state'),
        'vehicleType'=>request('vehicleType')."this is my car",
        'noOfVehicles'=>request('noOfVehicles')
    ]);
    return redirect('/join')->with('message', 'Thank you for showing interest. We will contact you for further information!');
})->name('join');

Route::get('/about',function(){
    return view('about');
})->name('about');

Route::get('dashboard', [CustomAuthController::class, 'dashboard']); 
Route::get('login', [CustomAuthController::class, 'index'])->name('login');
Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom'); 
Route::get('registration', [CustomAuthController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom'); 
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');

