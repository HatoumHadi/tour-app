<?php

namespace App\Http\Controllers;

use App\Http\Requests\AdventureRequest;
use App\Http\Requests\CarRentalRequest;
use App\Http\Requests\HotelReservationRequest;
use App\Http\Requests\PackageRequest;
use App\Http\Requests\TransportationRequest;
use App\Http\Requests\TravelInsuranceRequest;
use App\Http\Requests\VisaRequest;
use App\Models\Adventure;
use App\Models\CarRental;
use App\Models\HotelReservation;
use App\Models\Package;
use App\Models\Transportation;
use App\Models\TravelInsurance;
use App\Models\Visa;

class RequestsPostController extends Controller
{
    public function hotelReservation(HotelReservationRequest $request)
    {
        $data = $request->validated();
        $data['user_id'] = auth()->id();
        HotelReservation::create($data);
        return redirect()->back()->with([
            'message' => 'Request submitted successfully'
        ]);
    }

    public function carRental(CarRentalRequest $request)
    {
        $data = $request->validated();
        $data['user_id'] = auth()->id();
        CarRental::create($data);
        return redirect()->back()->with([
            'message' => 'Request submitted successfully'
        ]);
    }

    public function package(PackageRequest $request)
    {
        $data = $request->validated();
        $data['user_id'] = auth()->id();
        Package::create($data);
        return redirect()->back()->with([
            'message' => 'Request submitted successfully'
        ]);
    }
}
