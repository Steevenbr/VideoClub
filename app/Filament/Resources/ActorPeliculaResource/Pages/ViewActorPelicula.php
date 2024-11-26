<?php

namespace App\Filament\Resources\ActorPeliculaResource\Pages;

use App\Filament\Resources\ActorPeliculaResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewActorPelicula extends ViewRecord
{
    protected static string $resource = ActorPeliculaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
