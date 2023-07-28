<?php

namespace App\Filament\Resources\Services;

use App\Filament\Resources\Requests\CommonRelationManager\PhotoGalleryRelationManager;
use App\Filament\Resources\Requests\TravelInsuranceResource\Pages;
use App\Filament\Resources\Requests\TravelInsuranceResource\RelationManagers;
use App\Filament\Resources\Services\TravelInsuranceResource\Pages\ListTravelInsurances;
use App\Filament\Resources\Services\TravelInsuranceResource\Pages\ViewTravelInsurance;
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
            ->columns(6)
            ->schema([
                Forms\Components\Card::make()
                    ->relationship('user')
                    ->columnSpan(6)
                    ->columns(3)
                    ->schema([
                        Forms\Components\TextInput::make('name'),
                        Forms\Components\TextInput::make('email'),
                        Forms\Components\TextInput::make('phone_number'),
                    ]),
                Forms\Components\TextInput::make('plan_name')
                    ->columnSpan(2),
                Forms\Components\TextInput::make('policy_number')
                    ->columnSpan(2),
                Forms\Components\DatePicker::make('coverage_start_date')
                    ->columnSpan(2),
                Forms\Components\DatePicker::make('coverage_end_date')
                    ->columnSpan(2),
                Forms\Components\TextInput::make('insurance_company')
                    ->columnSpan(2),
                Forms\Components\DatePicker::make('created_at')
                    ->columnSpan(2)
                    ->label('Requested at')
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
                Tables\Columns\TextColumn::make('insurance_company')
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

    public static function getPages(): array
    {
        return [
            'index' => ListTravelInsurances::route('/'),
            'view' => ViewTravelInsurance::route('/{record}'),
        ];
    }
}
