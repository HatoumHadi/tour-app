<?php

namespace App\View\Components\Pages;

use App\Definitions\SettingKeys;
use App\Models\Setting;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ContactUs extends Component
{
    public string $contactPhoneNumber;
    public string $contactEmail;

    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->contactPhoneNumber = Setting::where('key', SettingKeys::CONTACT_PHONE_NUMBER->value)->value('value');
        $this->contactEmail = Setting::where('key', SettingKeys::CONTACT_EMAIL->value)->value('value');
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.pages.contact-us');
    }
}
