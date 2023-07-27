<?php

namespace App\Definitions;

enum PackageType: string
{
    case BASIC = 'basic';
    case STANDARD = 'standard';
    case PREMIUM = 'premium';
}
