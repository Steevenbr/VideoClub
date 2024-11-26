<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ActorPeliculaResource\Pages;
use App\Filament\Resources\ActorPeliculaResource\RelationManagers;
use App\Models\ActorPelicula;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ActorPeliculaResource extends Resource
{
    protected static ?string $model = ActorPelicula::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
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
            'index' => Pages\ListActorPeliculas::route('/'),
            'create' => Pages\CreateActorPelicula::route('/create'),
            'view' => Pages\ViewActorPelicula::route('/{record}'),
            'edit' => Pages\EditActorPelicula::route('/{record}/edit'),
        ];
    }
}
