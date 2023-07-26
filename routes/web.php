<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
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

Route::view('/adventure-details', 'components.pages.adventure-details')->name('adventure-details');

Route::view('/flights', 'components.pages.flight.flights')->name('flights');

Route::view('/flight-booking-submission', 'components.pages.flight.flight-booking-submission')->name('flight-booking-submission');

Route::view('/hotels', 'components.pages.hotel.hotels')->name('hotels');

Route::view('/hotel-details', 'components.pages.hotel.hotel-details')->name('hotel-details');

Route::view('/visa-info', 'components.pages.visa.visa-info')->name('visa-info');

Route::view('/visa-details', 'components.pages.visa.visa-details')->name('visa-details');

Route::view('/visa-application', 'components.pages.visa.visa-application')->name('visa-application');

Route::view('/travel-insurance', 'components.pages.travel-insurance.insurance')->name('travel-insurance');

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
});

Route::get('/contact-us', [HomeController::class, 'showGeneralInfo'])->name('contact-us');

Route::get('/about-us', [HomeController::class, 'showGeneralInfoAboutUs'])->name('about-us');

Route::get('test', function () {
    dd(__('validation.required', ['attribute' => 'test']));
});
