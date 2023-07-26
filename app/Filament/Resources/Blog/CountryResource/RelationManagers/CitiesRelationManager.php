<?php

namespace App\Filament\Resources\Blog\CountryResource\RelationManagers;

use App\Filament\Resources\Blog\CityResource;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CitiesRelationManager extends RelationManager
{
    protected static string $relationship = 'cities';

    protected static ?string $recordTitleAttribute = 'name';

    public static function form(Form $form): Form
    {
        return CityResource::form($form);
    }

    public static function table(Table $table): Table
    {
        return CityResource::table($table);
    }
}
