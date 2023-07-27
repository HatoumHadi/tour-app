<?php

namespace App\Filament\Resources\Requests;

use App\Filament\Resources\Requests;
use App\Filament\Resources\Requests\PhotoGalleryResource\RelationManagers;
use App\Models\Adventure;
use App\Models\CarRental;
use App\Models\Hotel;
use App\Models\PhotoGallery;
use App\Models\Transportation;
use App\Models\TravelInsurance;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Model;

class PhotoGalleryResource extends Resource
{
    protected static ?string $model = PhotoGallery::class;

    protected static ?string $navigationIcon = 'heroicon-o-photograph';

    protected static ?string $navigationGroup = 'Requests';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('tag_type')
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
                            if ($get('tag_type')) {
                                return $get('tag_type')::pluck('name', 'id');
                            } else {
                                return [];
                            }
                        }
                    )
                    ->required(),

                Forms\Components\FileUpload::make('media')
                    ->disk('public')
                    ->directory('images')
                    ->multiple()
                    ->visibility('public')
                    ->preserveFilenames()
                    ->required(),
            ]);
    }

    public static function canViewAny(): bool
    {
        return false;
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('tag_type')
                    ->searchable()
                    ->sortable()
                    ->toggleable(),

                Tables\Columns\TextColumn::make('tag_id')
                    ->searchable()
                    ->sortable()
                    ->toggleable(),

                Tables\Columns\ImageColumn::make('media')
                    ->searchable()
                    ->sortable()
                    ->toggleable(),

                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->searchable()
                    ->sortable()
                    ->toggleable(),
//
//                Tables\Columns\TextColumn::make('updated_at')
//                    ->dateTime(),
//                Tables\Columns\TextColumn::make('deleted_at')
//                    ->dateTime(),
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
            'index' => Requests\PhotoGalleryResource\Pages\ListPhotoGalleries::route('/'),
            'create' => Requests\PhotoGalleryResource\Pages\CreatePhotoGallery::route('/create'),
            'edit' => Requests\PhotoGalleryResource\Pages\EditPhotoGallery::route('/{record}/edit'),
        ];
    }

    public static function can(string $action, ?Model $record = null): bool
    {
        return false;
    }
}
