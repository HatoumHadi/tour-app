<?php

namespace App\View\Components\Pages\Requests;

use App\Models\City;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\View\Component;

class Adventure extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public ?Collection $cities = null
    )
    {
        $this->cities ??= City::whereHas('country', function ($query) {
            $query->where('has_adventure', true);
        })->get();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.pages.requests.adventure');
    }
}
