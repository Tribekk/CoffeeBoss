<?php

namespace App\Filament\Resources\NewsBlogResource\Pages;

use App\Filament\Resources\NewsBlogResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateNewsBlog extends CreateRecord
{
    protected static string $resource = NewsBlogResource::class;
}
