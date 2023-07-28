<?php

namespace App\Filament\Resources\Services;

use App\Filament\Resources\Requests\VisaResource\RelationManagers;
use App\Filament\Resources\Services\VisaResource\Pages\ListVisas;
use App\Filament\Resources\Services\VisaResource\Pages\ViewVisa;
use App\Models\Visa;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;

class VisaResource extends Resource
{
    protected static ?string $model = Visa::class;

    protected static ?string $navigationIcon = 'heroicon-o-document-text';

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
                Forms\Components\TextInput::make('passport_number')
                    ->columnSpan(2),
                Forms\Components\Select::make('visa_country_id')
                    ->columnSpan(2)
                    ->relationship('visaCountry', 'name'),
                Forms\Components\Select::make('nationality_country_id')
                    ->columnSpan(2)
                    ->relationship('visaCountry', 'name'),
                Forms\Components\DatePicker::make('application_date')
                    ->columnSpan(2),
                Forms\Components\Select::make('status')
                    ->columnSpan(2)
                    ->options([
                        'valid' => 'Valid',
                        'expired' => 'Expired',
                        'approved' => 'Approved',
                        'denied' => 'Denied',
                        'pending' => 'Pending',
                        'revoked' => 'Revoked',
                        'overstay' => 'Overstay'
                    ]),
                Forms\Components\DatePicker::make('created_at')
                    ->columnSpan(2 )
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
                Tables\Columns\TextColumn::make('visaCountry.name')
                    ->label('Visa country'),
                Tables\Columns\TextColumn::make('nationalityCountry.name')
                    ->label('Nationality country'),
                Tables\Columns\TextColumn::make('application_date')
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
            'index' => ListVisas::route('/'),
            'view' => ViewVisa::route('/{record}'),
        ];
    }
}
