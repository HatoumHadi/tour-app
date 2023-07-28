<?php

namespace App\Http\Controllers;

use App\Http\Requests\TravelInsuranceRequest;
use App\Models\TravelInsurance;
use App\View\Components\Pages\Services\TravelInsurance as TravelInsuranceComponent;
use Illuminate\Support\Facades\Blade;

class TravelInsuranceController extends Controller
{
    public function index()
    {
        return Blade::renderComponent(new TravelInsuranceComponent());
    }

    public function store(TravelInsuranceRequest $request)
    {
        $data = $request->validated();
        $data['user_id'] = auth()->id();
        TravelInsurance::create($data);
        return redirect()->back()->with([
            'message' => 'Travel insurance request submitted successfully'
        ]);
    }
}
