<?php

namespace App\View\Components\Pages;

use App\Models\GeneralInfo;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\View\Component;

class AboutUs extends Component
{
    public Collection $aboutUs;
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
       $this->aboutUs = \App\Models\AboutUs::all();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.pages.about-us');
    }

    public function getValue(string $key): string
    {
        return $this->aboutUs->where('key', $key)->first()->value;
    }

    public function getIcon(string $key): string
    {
        return $this->aboutUs->where('key', $key)->first()->icon;
    }
}
