<?php

namespace App\Http\Controllers;

use App\View\Components\Pages\Requests\HotelReservation;
use Illuminate\Support\Facades\Blade;

class RequestsController extends Controller
{
    public function hotelReservation()
    {
        return Blade::renderComponent(new HotelReservation());
    }
}
