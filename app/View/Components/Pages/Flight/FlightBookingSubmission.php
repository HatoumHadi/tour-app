<?php

namespace App\View\Components\Pages\Flight;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class FlightBookingSubmission extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.pages.flight.flight-booking-submission');
    }
}
