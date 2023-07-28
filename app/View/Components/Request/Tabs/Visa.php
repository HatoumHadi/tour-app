<?php

namespace App\View\Components\Request\Tabs;

use App\Models\Country;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\View\Component;

class Visa extends Component
{
    public Collection $countries;
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->countries = Country::all();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.request.tabs.visa');
    }
}
