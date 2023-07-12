<?php

namespace App\Filament\Resources\Packages;

use App\Filament\Resources\Packages;
use App\Filament\Resources\Packages\TravelInsuranceResource\Pages;
use App\Filament\Resources\Packages\TravelInsuranceResource\RelationManagers;
use App\Models\Adventure;
use App\Models\PhotoGallery;
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

    protected static ?string $navigationGroup = 'Packages';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('user_id')
                    ->relationship('user', 'name')
                    ->required(),
                Forms\Components\Select::make('photo_gallery_id')
                    ->options(PhotoGallery::where('tag',TravelInsurance::class)->pluck('media','id'))
                    ->required(),
                Forms\Components\TextInput::make('policy_number')
                    ->required()
                    ->maxLength(255),
                Forms\Components\DatePicker::make('coverage_start_date')
                    ->required(),
                Forms\Components\DatePicker::make('coverage_end_date')
                    ->required(),
                Forms\Components\TextInput::make('insurance_company')
                    ->required()
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('user.name'),
                Tables\Columns\ImageColumn::make('photoGallery.media'),
                Tables\Columns\TextColumn::make('policy_number'),
                Tables\Columns\TextColumn::make('coverage_start_date')
                    ->date(),
                Tables\Columns\TextColumn::make('coverage_end_date')
                    ->date(),
                Tables\Columns\TextColumn::make('insurance_company'),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime(),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime(),
                Tables\Columns\TextColumn::make('deleted_at')
                    ->dateTime(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Packages\TravelInsuranceResource\Pages\ListTravelInsurances::route('/'),
            'create' => Packages\TravelInsuranceResource\Pages\CreateTravelInsurance::route('/create'),
            'edit' => Packages\TravelInsuranceResource\Pages\EditTravelInsurance::route('/{record}/edit'),
        ];
    }
}
