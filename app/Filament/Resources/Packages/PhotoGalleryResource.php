<?php

namespace App\Filament\Resources\Packages;

use App\Filament\Resources\Packages;
use App\Filament\Resources\Packages\PhotoGalleryResource\RelationManagers;
use App\Models\Adventure;
use App\Models\CarRental;
use App\Models\Hotel;
use App\Models\PhotoGallery;
use App\Models\Ticket;
use App\Models\Transportation;
use App\Models\TravelInsurance;
use App\Models\Visa;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;

class PhotoGalleryResource extends Resource
{
    protected static ?string $model = PhotoGallery::class;

    protected static ?string $navigationIcon = 'heroicon-o-photograph';

    protected static ?string $navigationGroup = 'Packages';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('tag')
                    ->options([
                        Adventure::class => 'Adventure',
                        CarRental::class => 'CarRental',
                        Transportation::class => 'Transportation',
                        TravelInsurance::class => 'TravelInsurance',
                        Hotel::class => 'Hotel',
                    ])
                    ->reactive()
                    ->required(),
                Forms\Components\Select::make('tag_id')
                    ->options(
                        function (callable $get) {
                            if ($get('tag')) {
                                return $get('tag')::pluck('name','id');
                            } else {
                                return [];
                            }
                        }
                    )
                    ->required(),
                Forms\Components\FileUpload::make('media')
                    ->preserveFilenames()
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('tag'),
                Tables\Columns\TextColumn::make('tag_id'),
                Tables\Columns\TextColumn::make('media'),
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
            'index' => Packages\PhotoGalleryResource\Pages\ListPhotoGalleries::route('/'),
            'create' => Packages\PhotoGalleryResource\Pages\CreatePhotoGallery::route('/create'),
            'edit' => Packages\PhotoGalleryResource\Pages\EditPhotoGallery::route('/{record}/edit'),
        ];
    }
}
