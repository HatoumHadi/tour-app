<?php

namespace App\Filament\Resources\Services;

use App\Filament\Resources\Requests\CommonRelationManager\PhotoGalleryRelationManager;
use App\Filament\Resources\Requests\TravelInsuranceResource\Pages;
use App\Filament\Resources\Requests\TravelInsuranceResource\RelationManagers;
use App\Models\TravelInsurance;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;

class TravelInsuranceResource extends Resource
{
    protected static ?string $model = TravelInsurance::class;

    protected static ?string $navigationIcon = 'heroicon-o-cloud-upload';

    protected static ?string $navigationGroup = 'Services';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('user_id')
                    ->label('Requested by')
                    ->relationship('user', 'name'),
                Forms\Components\TextInput::make('policy_number'),
                Forms\Components\DatePicker::make('coverage_start_date'),
                Forms\Components\DatePicker::make('coverage_end_date'),
                Forms\Components\TextInput::make('insurance_company'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('user.name')
                    ->label('Requested by')
                    ->searchable()
                    ->sortable()
                    ->toggleable(),

                Tables\Columns\TextColumn::make('policy_number')
                    ->searchable()
                    ->sortable()
                    ->toggleable(),

                Tables\Columns\TextColumn::make('coverage_start_date')
                    ->date()
                    ->searchable()
                    ->sortable()
                    ->toggleable(),

                Tables\Columns\TextColumn::make('coverage_end_date')
                    ->date()
                    ->searchable()
                    ->sortable()
                    ->toggleable(),

                Tables\Columns\TextColumn::make('insurance_company')
                    ->searchable()
                    ->sortable()
                    ->toggleable(),

                Tables\Columns\TextColumn::make('created_at')
                    ->label('Requested at')
                    ->dateTime()
                    ->searchable()
                    ->sortable()
                    ->toggleable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
            ])
            ->bulkActions([
            ]);
    }

    public static function getRelations(): array
    {
        return [
            PhotoGalleryRelationManager::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => \App\Filament\Resources\Services\TravelInsuranceResource\Pages\ListTravelInsurances::route('/'),
            'view' => \App\Filament\Resources\Services\TravelInsuranceResource\Pages\ViewTravelInsurance::route('/{record}'),
        ];
    }
}
