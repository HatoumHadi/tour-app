<?php

namespace App\Http\Controllers;

use App\Models\Adventure;
use App\Models\Package;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $adventures = Adventure::with('photoGallery')->get();
        $packages = Package::with('photoGallery')->get();
        return view('components.pages.index', ['adventures' => $adventures , 'packages' => $packages]);
    }
}
