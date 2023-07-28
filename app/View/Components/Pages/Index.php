<?php

namespace App\View\Components\Pages;

use App\Models\Adventure;
use App\Models\Package;
use Closure;
use Illuminate\Contracts\Support\Htmlable;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Foundation\Application;
use Illuminate\View\Component;

class Index extends Component
{

    public Collection $adventures;
    public Collection $packages;

    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->adventures = Adventure::take(4)->get();
        $this->packages = Package::take(2)->get();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Application|Factory|Htmlable|Closure|string
    {
        return view('components.pages.index');
    }
}
