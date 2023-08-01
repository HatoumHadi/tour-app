<?php

namespace App\View\Components\Request\Tabs;

use App\Models\Language;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Flight extends Component
{
    public string $direction;
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->direction = Language::whereCode(app()->getLocale())->first()->direction;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.request.tabs.flight');
    }
}
