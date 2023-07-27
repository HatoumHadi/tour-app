<?php

namespace App\View\Components\Pages;

use App\Models\GeneralInfo;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ContactUs extends Component
{
    public GeneralInfo $generalInfo;
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->generalInfo = GeneralInfo::first();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.pages.contact-us');
    }
}
