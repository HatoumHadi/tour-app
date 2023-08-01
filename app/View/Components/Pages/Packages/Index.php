<?php

namespace App\View\Components\Pages\Packages;

use App\Models\Package;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\View\Component;

class Index extends Component
{
    public LengthAwarePaginator $packages;
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->packages = Package::paginate(6);
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.pages.packages.index');
    }
}
