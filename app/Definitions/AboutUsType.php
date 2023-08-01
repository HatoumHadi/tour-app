<?php

namespace App\Definitions;

enum AboutUsType: string
{
    case TEXT = 'text';
    case IMAGE = 'image';
    case BANNER = 'banner';
}
