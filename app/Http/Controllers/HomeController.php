<?php

namespace App\Http\Controllers;

use App\Models\Adventure;
use App\Models\Package;
use App\Models\Place;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $places = Place::with('photoGallery')->get();
        $packages = Package::with('photoGallery')->get();
        return view('components.pages.index', ['places' => $places , 'packages' => $packages]);
    }
}
