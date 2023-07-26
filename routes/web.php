<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RequestsController;
use App\Http\Controllers\RequestsPostController;
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


//Route::get('/',function (){
//    return view('components.pages.index');
//})->name('home');

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::view('/adventure-details', 'components.pages.adventure-details')->name('adventure-details');

Route::view('/flight-search-result', 'components.pages.flight.flight-search-result')->name('flight-search-result');

Route::view('/flight-booking-submission', 'components.pages.flight.flight-booking-submission')->name('flight-booking-submission');

Route::view('/hotels', 'components.pages.hotel.hotels')->name('hotels');

Route::view('/hotel-details', 'components.pages.hotel.hotel-details')->name('hotel-details');

Route::view('/visa-info', 'components.pages.visa.visa-info')->name('visa-info');

Route::view('/visa-details', 'components.pages.visa.visa-details')->name('visa-details');

Route::view('/dashboard', 'components.pages.packages.dashboard')->name('dashboard');

Route::view('/package-details', 'components.pages.packages.package-details')->name('package-details');

Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'login'])
        ->name('login');
    Route::post('/login', [AuthController::class, 'postLogin'])
        ->name('login.post');
    Route::get('/sign-up', [AuthController::class, 'signUp'])
        ->name('sign-up');
    Route::post('sign-up', [AuthController::class, 'postSignUp'])
        ->name('sign-up.post');
});
Route::middleware('auth')->group(function () {
    Route::get('profile', [ProfileController::class, 'index'])
        ->name('profile');
    Route::get('logout', [AuthController::class, 'logout'])
        ->name('logout');
    Route::prefix('requests')
        ->name('requests.')
        ->controller(RequestsController::class)
        ->group(function () {
            Route::get('travel-insurance', 'travelInsurance')
                ->name('travel-insurance');
            Route::get('visa-application', 'visa')
                ->name('visa');
            Route::get('transportation', 'transportation')
                ->name('transportation');
            Route::get('hotel-reservation', 'hotelReservation')
                ->name('hotel-reservation');
            Route::get('car-rental', 'carRental')
                ->name('car-rental');
            Route::get('adventure', 'adventure')
                ->name('adventure');
            Route::get('package', 'package')
                ->name('package');
        });
    Route::prefix('requests')
        ->name('requests.')
        ->controller(RequestsPostController::class)
        ->group(function () {
            Route::post('travel-insurance', 'travelInsurance')
                ->name('travel-insurance.post');
            Route::post('visa-application', 'visa')
                ->name('visa.post');
            Route::post('transportation', 'transportation')
                ->name('transportation.post');
            Route::post('hotel-reservation', 'hotelReservation')
                ->name('hotel-reservation.post');
            Route::post('car-rental', 'carRental')
                ->name('car-rental.post');
            Route::post('adventure', 'adventure')
                ->name('adventure.post');
            Route::post('package', 'package')
                ->name('package.post');
        });
});

Route::view('/contact-us', 'components.pages.contact-us')->name('contact-us');

Route::view('/about-us', 'components.pages.about-us')->name('about-us');

Route::get('test', function () {
    dd(__('validation.required', ['attribute' => 'test']));
});
