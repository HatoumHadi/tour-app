<?php

namespace App\Filament\Resources\Requests\TicketResource\Pages;

use App\Filament\Resources\Requests\TicketResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTickets extends ListRecords
{
    protected static string $resource = TicketResource::class;
}
