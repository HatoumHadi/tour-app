<?php

namespace App\Filament\Resources\Packages\TicketResource\Pages;

use App\Filament\Resources\Packages\TicketResource;
use Filament\Resources\Pages\CreateRecord;

class CreateTicket extends CreateRecord
{
    protected static string $resource = TicketResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
