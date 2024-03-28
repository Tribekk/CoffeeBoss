<?php

namespace App\Filament\Resources\PhotosForNewsResource\Pages;

use App\Filament\Resources\PhotosForNewsResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPhotosForNews extends EditRecord
{
    protected static string $resource = PhotosForNewsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
