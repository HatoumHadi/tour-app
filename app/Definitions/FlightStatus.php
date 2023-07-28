<?php

namespace App\Definitions;

enum FlightStatus: string
{
    case SCHEDULED = 'scheduled';
    case DELAYED = 'delayed';
    case DEPARTED = 'departed';
    case IN_AIR = 'in-air';
    case LANDED = 'landed';
    case ARRIVED = 'arrived';
    case CANCELLED = 'cancelled';
}
