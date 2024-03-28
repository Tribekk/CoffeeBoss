<?php

namespace App\Filament\Resources\NewsBlogResource\Pages;

use App\Filament\Resources\NewsBlogResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditNewsBlog extends EditRecord
{
    protected static string $resource = NewsBlogResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
