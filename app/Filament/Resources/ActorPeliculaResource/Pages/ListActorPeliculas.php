<?php

namespace App\Filament\Resources\ActorPeliculaResource\Pages;

use App\Filament\Resources\ActorPeliculaResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListActorPeliculas extends ListRecords
{
    protected static string $resource = ActorPeliculaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
