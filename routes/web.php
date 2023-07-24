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



Route::get('/',function (){
    return view('components.pages.index');
})->name('home');

Route::get('/adventure-details', function () {
    return view('components.pages.adventure-details');
})->name('adventure-details');

Route::get('/flight-search-result', function () {
    return view('components.pages.flight.flight-search-result');
})->name('flight-search-result');

Route::get('/flight-booking-submission', function () {
    return view('components.pages.flight.flight-booking-submission');
})->name('flight-booking-submission');

Route::get('/hotels', function () {
    return view('components.pages.hotel.hotels');
})->name('hotels');

Route::get('/hotel-details', function () {
    return view('components.pages.hotel.hotel-details');
})->name('hotel-details');

Route::get('/visa-info', function () {
    return view('components.pages.visa.visa-info');
})->name('visa-info');

Route::get('/visa-details', function () {
    return view('components.pages.visa.visa-details');
})->name('visa-details');

Route::get('/visa-application', function () {
    return view('components.pages.visa.visa-application');
})->name('visa-application');

Route::get('/travel-insurance', function () {
    return view('components.pages.travel-insurance.insurance');
})->name('travel-insurance');

Route::get('/dashboard', function () {
    return view('components.pages.packages.dashboard');
})->name('dashboard');

Route::get('/package-details', function () {
    return view('components.pages.packages.package-details');
})->name('package-details');


Route::get('/login', function () {
    return view('components.pages.auth.login');
})->name('login');

Route::get('/sign-up', function () {
    return view('components.pages.auth.sign-up');
})->name('sign-up');

Route::get('/contact-us', function () {
    return view('components.pages.contact-us');
})->name('contact-us');

Route::get('/about-us', function () {
    return view('components.pages.about-us');
})->name('about-us');

