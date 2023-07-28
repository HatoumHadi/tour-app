<?php

namespace App\View\Components\Request;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Card extends Component
{
    public bool $previousFlight = false;
    public bool $previousHotelReservation = false;
    public bool $previousVisa = false;
    public bool $previousTravelInsurance = false;

    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->previousFlight = session()->get('previous-flight', false);
        $this->previousHotelReservation = session()->get('previous-hotel-reservation', false);
        $this->previousVisa = session()->get('previous-visa', false);
        $this->previousTravelInsurance = session()->get('previous-travel-insurance', false);
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.request.card');
    }

    public function noneTrue(): bool
    {
        return !$this->previousFlight && !$this->previousHotelReservation && !$this->previousVisa && !$this->previousTravelInsurance;
    }
}
