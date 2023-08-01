<?php

namespace App\Http\Controllers;

use App\Models\Package;
use App\View\Components\Pages\Packages\Index;
use App\View\Components\Pages\Packages\Show;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Blade;

class PackageController extends Controller
{
    public function index()
    {
        return Blade::renderComponent(new Index());
    }

    public function show(Package $package)
    {
        return Blade::renderComponent(new Show($package));
    }
}
