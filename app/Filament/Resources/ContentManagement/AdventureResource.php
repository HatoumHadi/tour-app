<?php

namespace App\Filament\Resources\ContentManagement;

use App\Filament\Resources\ContentManagement\AdventureResource\Pages\CreateAdventure;
use App\Filament\Resources\ContentManagement\AdventureResource\Pages\EditAdventure;
use App\Filament\Resources\ContentManagement\AdventureResource\Pages\ListAdventures;
use App\Filament\Resources\ContentManagement\AdventureResource\Pages\ViewAdventure;
use App\Models\Adventure;
use Closure;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Support\Str;

class AdventureResource extends Resource
{
    protected static ?string $model = Adventure::class;

    protected static ?string $navigationIcon = 'heroicon-o-view-grid-add';

    protected static ?string $navigationGroup = 'Content Management';

    public static function form(Form $form): Form
    {
        return $form
            ->columns(1)
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->afterStateUpdated(function (Closure $get, Closure $set, string $value) {
                        if (!$get('slug_changed_manually')) {
                            $set('slug', Str::slug($value));
                        }
                    })
                    ->reactive()
                    ->required(),
                Forms\Components\TextInput::make('slug')
                    ->afterStateUpdated(function (Closure $set) {
                        $set('slug_changed_manually');
                    })
                    ->required(),
                Forms\Components\Textarea::make('description')
                    ->required(),
                Forms\Components\RichEditor::make('content')
                    ->required(),
                Forms\Components\Hidden::make('slug_changed_manually')
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->searchable()
                    ->sortable()
                    ->toggleable(),
                Tables\Columns\TextColumn::make('slug')
                    ->searchable()
                    ->sortable()
                    ->toggleable(),
                Tables\Columns\TextColumn::make('description')
                    ->wrap()
                    ->searchable()
                    ->sortable()
                    ->toggleable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->searchable()
                    ->sortable()
                    ->toggleable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make()
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => ListAdventures::route('/'),
            'edit' => EditAdventure::route('/{record}/edit'),
            'create' => CreateAdventure::route('/create')
        ];
    }
}
