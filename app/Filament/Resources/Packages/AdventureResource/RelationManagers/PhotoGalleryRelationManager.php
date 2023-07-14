<?php

namespace App\Filament\Resources\Packages\AdventureResource\RelationManagers;

use App\Models\Adventure;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Contracts\HasRelationshipTable;
use Illuminate\Database\Eloquent\Model;

class PhotoGalleryRelationManager extends RelationManager
{
    protected static string $relationship = 'photoGallery';

    protected static ?string $recordTitleAttribute = 'media';

    protected $listeners = ['refresh' => '$refresh'];

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Hidden::make('tag_type')
                    ->default(Adventure::class),

                Forms\Components\Hidden::make('tag_id')
                    ->default(function (RelationManager $livewire): int {
                        return $livewire->ownerRecord->getQueueableId();
                    }),

                Forms\Components\FileUpload::make('media')
                    ->disk('public')
                    ->directory('images')
                    ->multiple()
                    ->visibility('public')
                    ->preserveFilenames()
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('tag_type'),
                Tables\Columns\TextColumn::make('tag_id'),
                Tables\Columns\TextColumn::make('media'),
            ])
            ->filters([
                //
            ])
            ->headerActions([
                Tables\Actions\CreateAction::make()
                    ->using(function (HasRelationshipTable $livewire, array $data): Model {

                        $val = null;

                        foreach ($data['media'] as $key => $item) {

                            $val = $livewire->getRelationship()->create([
                                'tag_type' => $data['tag_type'],
                                'tag_id' => $data['tag_id'],
                                'media' => $item,
                            ]);

                        }
                        return $val;
                    }),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }
}
