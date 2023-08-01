<?php

namespace App\Definitions;

enum VisaStatus: string
{
    case VALID = 'valid';
    case EXPIRED = 'expired';
    case APPROVED = 'approved';
    case DENIED = 'denied';
    case PENDING = 'pending';
    case REVOKED = 'revoked';
    case OVERSTAY = 'overstay';
}
