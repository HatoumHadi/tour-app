<?php

namespace App\Http\Controllers;

use App\View\Components\Pages\Profile;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        $profile = new Profile();
        return $profile->render();
    }
}
