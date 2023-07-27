<?php

namespace App\View\Components\Pages\Adventures;

use App\Models\Adventure;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\View\Component;

class Index extends Component
{
    public LengthAwarePaginator $adventures;

    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->adventures = Adventure::paginate(6);
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.pages.adventures.index');
    }
}
