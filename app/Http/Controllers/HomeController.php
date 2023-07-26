<?php

namespace App\Http\Controllers;

use App\Models\GeneralInfo;
use App\Models\Package;
use App\Models\Place;

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
    public function showGeneralInfoAboutUs()
    {
        $generalInfo = GeneralInfo::first();

        return view('components.pages.about-us', ['generalInfo' => $generalInfo]);
    }
}
