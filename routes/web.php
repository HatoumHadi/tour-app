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

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/show-places', [HomeController::class, 'showPlaces'])->name('show-places');

Route::get('/show-packages', [HomeController::class, 'showPackages'])->name('show-packages');

Route::view('/adventures', 'components.pages.adventures.adventures')->name('adventures');

Route::view('/adventure-details', 'components.pages.adventures.adventure-details')->name('adventure-details');

Route::view('/packages', 'components.pages.packages.packages')->name('packages');

Route::view('/package-details', 'components.pages.packages.package-details')->name('package-details');

Route::view('/flight-booking', 'components.pages.services.flight-booking')->name('flight-booking');

Route::view('/hotel-reservation', 'components.pages.services.hotel-reservation')->name('hotel-reservation');

Route::view('/visa', 'components.pages.services.visa')->name('visa');

Route::view('/travel-insurance', 'components.pages.services.travel-insurance')->name('travel-insurance');


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

//    Route::prefix('requests')
//        ->name('requests.')
//        ->controller(RequestsController::class)
//        ->group(function () {
//            Route::get('hotel-reservation', 'hotelReservation')
//                ->name('hotel-reservation');
//            Route::get('car-rental', 'carRental')
//                ->name('car-rental');
//            Route::get('package', 'package')
//                ->name('package');
//        });
//
//    Route::prefix('requests')
//        ->name('requests.')
//        ->controller(RequestsPostController::class)
//        ->group(function () {
//            Route::post('hotel-reservation', 'hotelReservation')
//                ->name('hotel-reservation.post');
//            Route::post('car-rental', 'carRental')
//                ->name('car-rental.post');
//            Route::post('package', 'package')
//                ->name('package.post');
//        });

});

Route::get('/contact-us', [HomeController::class, 'showGeneralInfo'])->name('contact-us');

Route::get('/about-us', [HomeController::class, 'showGeneralInfoAboutUs'])->name('about-us');

Route::get('test', function () {
    dd(__('validation.required', ['attribute' => 'test']));
});
