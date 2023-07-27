<?php

namespace App\Http\Controllers;

use App\Models\Adventure;
use App\View\Components\Pages\Adventures\Show;
use App\View\Components\Pages\Adventures\Index;
use Illuminate\Support\Facades\Blade;

class AdventureController extends Controller
{
    public function index()
    {
        return Blade::renderComponent(new Index());
    }

    public function show(Adventure $adventure)
    {
        return Blade::renderComponent(new Show($adventure));
    }
}
