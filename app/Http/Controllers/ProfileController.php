<?php

namespace App\Http\Controllers;

use App\View\Components\Pages\Profile;
use Illuminate\Support\Facades\Blade;

class ProfileController extends Controller
{
    public function index()
    {
        return Blade::renderComponent(new Profile());
    }
}
