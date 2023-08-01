<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\SignUpRequest;
use App\Models\User;
use App\View\Components\Pages\Auth\Login;
use App\View\Components\Pages\Auth\SignUp;
use Illuminate\Support\Facades\Blade;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    public function login()
    {
        return Blade::renderComponent(new Login());
    }

    public function postLogin(LoginRequest $request)
    {
        $data = $request->validated();
        if (!auth()->attempt($data)) {
            throw ValidationException::withMessages([
                'email' => __('validation.invalid_credentials')
            ]);
        }
        session()->regenerate();
        return redirect()->route('home');
    }

    public function signUp()
    {
        return Blade::renderComponent(new SignUp());
    }

    public function postSignUp(SignUpRequest $request)
    {
        $data = $request->validated();
        $user = User::create($data);
        auth()->login($user);
        return redirect()->route('home');
    }

    public function logout()
    {
        auth()->logout();
        session()->regenerate();
        return redirect()->route('home');
    }
}
