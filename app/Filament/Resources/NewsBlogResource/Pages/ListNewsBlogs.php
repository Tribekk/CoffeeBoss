<?php

namespace App\Filament\Resources\NewsBlogResource\Pages;

use App\Filament\Resources\NewsBlogResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListNewsBlogs extends ListRecords
{
    protected static string $resource = NewsBlogResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
