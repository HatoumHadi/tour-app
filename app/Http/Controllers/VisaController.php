<?php

namespace App\Http\Controllers;

use App\Http\Requests\VisaRequest;
use App\Models\Visa;
use App\View\Components\Pages\Services\Visa as VisaComponent;
use Illuminate\Support\Facades\Blade;

class VisaController extends Controller
{
    public function index()
    {
        return Blade::renderComponent(new VisaComponent());
    }

    public function store(VisaRequest $request)
    {
        $data = $request->validated();
        $data['user_id'] = auth()->id();
        Visa::create($data);
        return redirect()->back()->with([
            'message' => __('translations.visa-request-successful')
        ]);
    }
}
