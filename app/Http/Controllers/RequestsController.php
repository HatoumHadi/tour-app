<?php

namespace App\Http\Controllers;

use App\View\Components\Pages\Requests\Adventure;
use App\View\Components\Pages\Requests\CarRental;
use App\View\Components\Pages\Requests\HotelReservation;
use App\View\Components\Pages\Requests\Package;
use App\View\Components\Pages\Requests\Transportation;
use App\View\Components\Pages\TravelInsurance\Insurance;
use App\View\Components\Pages\Visa\VisaApplication;
use Illuminate\Support\Facades\Blade;

class RequestsController extends Controller
{
    public function travelInsurance()
    {
        return Blade::renderComponent(new Insurance());
    }

    public function visa()
    {
        return Blade::renderComponent(new VisaApplication());
    }

    public function transportation()
    {
        return Blade::renderComponent(new Transportation());
    }

    public function hotelReservation()
    {
        return Blade::renderComponent(new HotelReservation());
    }

    public function carRental()
    {
        return Blade::renderComponent(new CarRental());
    }

    public function adventure()
    {
        return Blade::renderComponent(new Adventure());
    }

    public function package()
    {
        return Blade::renderComponent(new Package());
    }
}
