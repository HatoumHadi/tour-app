<?php

namespace App\View\Components\Request;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class CardTabs extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public bool $previousFlight = false,
        public bool $previousHotelReservation = false,
        public bool $previousTravelInsurance = false,
        public bool $previousVisa = false
    )
    {
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.request.card-tabs');
    }

    public function noneTrue(): bool
    {
        return !$this->previousFlight && !$this->previousHotelReservation && !$this->previousVisa && !$this->previousTravelInsurance;
    }
}
