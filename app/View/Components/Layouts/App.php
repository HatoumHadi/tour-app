<?php

namespace App\View\Components\Layouts;

use App\Definitions\SettingKeys;
use App\Models\Language;
use App\Models\Setting;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\View\Component;

class App extends Component
{
    public Collection $languages;
    public string $direction;
    public string $facebookLink;
    public string $instagramLink;
    public string $linkedInLink;
    public string $twitterLink;
    public string $contactEmail;
    public string $contactPhoneNumber;

    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->languages = Language::all();
        $this->direction = $this->languages->where('code', app()->getLocale())->first()->direction;
        $settings = Setting::all();
        $this->facebookLink = $settings->where('key', SettingKeys::FACEBOOK_LINK->value)->first()->value;
        $this->instagramLink = $settings->where('key', SettingKeys::INSTAGRAM_LINK->value)->first()->value;
        $this->linkedInLink = $settings->where('key', SettingKeys::LINKED_IN_LINK->value)->first()->value;
        $this->twitterLink = $settings->where('key', SettingKeys::TWITTER_LINK->value)->first()->value;
        $this->contactEmail = $settings->where('key', SettingKeys::CONTACT_EMAIL->value)->first()->value;
        $this->contactPhoneNumber = $settings->where('key', SettingKeys::CONTACT_PHONE_NUMBER->value)->first()->value;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.layouts.app');
    }
}
