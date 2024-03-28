<?php

namespace App\Filament\Resources\PhotosForNewsResource\Pages;

use App\Filament\Resources\PhotosForNewsResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPhotosForNews extends ListRecords
{
    protected static string $resource = PhotosForNewsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
