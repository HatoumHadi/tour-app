<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Models\Contact;
use App\Models\GeneralInfo;
use App\Models\Package;
use App\Models\Place;
use App\View\Components\Pages\AboutUs;
use App\View\Components\Pages\ContactUs;
use App\View\Components\Pages\Index;
use Illuminate\Support\Facades\Blade;

class HomeController extends Controller
{
    public function index()
    {
        return Blade::renderComponent(new Index());
    }

    public function aboutUs()
    {
        return Blade::renderComponent(new AboutUs());
    }

    public function contactUs()
    {
        return Blade::renderComponent(new ContactUs());
    }

    public function postContact(ContactRequest $request)
    {
        Contact::create($request->validated());
        return redirect()->back()->with([
            'message' => 'Submitted successfully'
        ]);
    }
}
