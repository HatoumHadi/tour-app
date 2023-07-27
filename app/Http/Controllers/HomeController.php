<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Models\Contact;
use App\Models\GeneralInfo;
use App\Models\Package;
use App\Models\Place;
use App\View\Components\Pages\AboutUs;
use App\View\Components\Pages\ContactUs;
use Illuminate\Support\Facades\Blade;

class HomeController extends Controller
{
    public function index()
    {
        $places = Place::with('photoGallery')->take(4)->get();
        $packages = Package::with('photoGallery')->take(2)->get();

        return view('components.pages.index', ['places' => $places, 'packages' => $packages]);
    }

    public function showPlaces()
    {
        $places = Place::with('photoGallery')->get();

        return view('components.pages.show-all-places', ['items' => $places]);
    }

    public function showPackages()
    {
        $packages = Package::with('photoGallery')->get();

        return view('components.pages.show-all-places', ['items' => $packages]);
    }

    public function showGeneralInfo()
    {
        $generalInfo = GeneralInfo::first();

        return view('components.pages.contact-us', ['generalInfo' => $generalInfo]);
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
