<?php

use App\Http\Controllers\AdventureController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\FlightController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HotelReservationController;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RequestsController;
use App\Http\Controllers\TravelInsuranceController;
use App\Http\Controllers\VisaController;
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

Route::get('', [HomeController::class, 'index'])
    ->name('home');

Route::resource('adventures', AdventureController::class)
    ->only('index', 'show');

Route::resource('packages', PackageController::class)
    ->only('index', 'show');

Route::prefix('services')->group(function () {
    Route::middleware('auth.toast')->group(function () {
//        Route::resource('flights', FlightController::class)
//            ->only('store');
        Route::resource('hotel-reservations', HotelReservationController::class)
            ->only('store');
//        Route::resource('visa', VisaController::class)
//            ->only('store');
//        Route::resource('travel-insurances', TravelInsuranceController::class)
//            ->only('store');
    });
//    Route::resource('flights', FlightController::class)
//        ->only('index');
    Route::resource('hotel-reservations', HotelReservationController::class)
        ->only('index');
//    Route::resource('visa', VisaController::class)
//        ->only('index');
//    Route::resource('travel-insurances', TravelInsuranceController::class)
//        ->only('index');
});

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
});

Route::get('contact-us', [HomeController::class, 'contactUs'])
    ->name('contact-us');
Route::post('contact-us', [HomeController::class, 'postContact'])
    ->name('contact-us.post');

Route::get('about-us', [HomeController::class, 'aboutUs'])->name('about-us');
Route::get('change-lang', [HomeController::class, 'changeLanguage'])
    ->name('change-lang');
