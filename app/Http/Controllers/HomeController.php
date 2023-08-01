<?php

namespace App\Http\Controllers;

use App\Http\Requests\ChangeLanguageRequest;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;
use App\View\Components\Pages\AboutUs;
use App\View\Components\Pages\ContactUs;
use App\View\Components\Pages\Index;
use Illuminate\Http\RedirectResponse;
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
            'message' => __('translations.submitted-successfully')
        ]);
    }

    /**
     * Change the language of the application.
     *
     * This function changes the language of the application based on the user's selection and sets a cookie to remember the language preference.
     *
     * @param ChangeLanguageRequest $request
     *     The request object containing the language change data.
     *
     * @return RedirectResponse
     *     A redirect response back to the previous page.
     */
    public function changeLanguage(ChangeLanguageRequest $request)
    {
        // Set the language cookie with the selected language value
        cookie()->queue(cookie('lang', $request->input('lang'), 24 * 60));
        // Redirect back to the previous page
        return redirect()->back();
    }
}
