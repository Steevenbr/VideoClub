<?php

namespace App\Filament\Resources\ActorPeliculaResource\Pages;

use App\Filament\Resources\ActorPeliculaResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditActorPelicula extends EditRecord
{
    protected static string $resource = ActorPeliculaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
