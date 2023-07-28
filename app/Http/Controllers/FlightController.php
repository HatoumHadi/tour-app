<?php

namespace App\Http\Controllers;

use App\Http\Requests\FlightRequest;
use App\Models\Flight;
use App\View\Components\Pages\Services\Flight as FlightComponent;
use Illuminate\Support\Facades\Blade;

class FlightController extends Controller
{
    public function index()
    {
        return Blade::renderComponent(new FlightComponent());
    }

    public function store(FlightRequest $request)
    {
        $data = $request->validated();
        $data['user_id'] = auth()->id();
        Flight::create($data);
        return redirect()->back()->with([
            'message' => 'Flight request submitted successfully'
        ]);
    }
}
