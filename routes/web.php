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


Route::get('/contact-us', function () {
    return view('components.pages.contact-us');
})->name('contact-us');

Route::get('/about-us', function () {
    return view('components.pages.about-us');
})->name('about-us');

