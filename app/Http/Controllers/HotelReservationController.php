<?php

namespace App\Http\Controllers;

use App\Http\Requests\HotelReservationRequest;
use App\Models\HotelReservation;
use App\View\Components\Pages\Services\HotelReservation as HotelReservationComponent;
use Illuminate\Support\Facades\Blade;

class HotelReservationController extends Controller
{
    public function index()
    {
        return Blade::renderComponent(new HotelReservationComponent());
    }

    public function store(HotelReservationRequest $request)
    {
        $data = $request->validated();
        $data['user_id'] = auth()->id();
        HotelReservation::create($data);
        return redirect()->back()->with([
            'message' => __('translations.hotel-reservation-request-successful')
        ]);
    }
}
