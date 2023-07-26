<?php

namespace App\Definitions;

enum HotelReservationStatus: string
{
    case WAIT_LIST = 'wait_list';
    case CONFIRMED = 'confirmed';
    case CANCELLED = 'cancelled';
}
