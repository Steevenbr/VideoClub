<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PeliculaResource\Pages;
use App\Filament\Resources\PeliculaResource\RelationManagers;
use App\Models\Pelicula;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PeliculaResource extends Resource
{
    protected static ?string $model = Pelicula::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('gen_id')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('dir_id')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('for_id')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('pel_nombre')
                    ->required()
                    ->maxLength(60),
                Forms\Components\TextInput::make('pel_costo')
                    ->required()
                    ->numeric(),
                Forms\Components\DatePicker::make('pel_fec_estreno')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('gen_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('dir_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('for_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('pel_nombre')
                    ->searchable(),
                Tables\Columns\TextColumn::make('pel_costo')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('pel_fec_estreno')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
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
            'index' => Pages\ListPeliculas::route('/'),
            'create' => Pages\CreatePelicula::route('/create'),
            'view' => Pages\ViewPelicula::route('/{record}'),
            'edit' => Pages\EditPelicula::route('/{record}/edit'),
        ];
    }
}
