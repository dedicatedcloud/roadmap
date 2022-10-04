<?php

namespace App\Filament\Resources\TagResource\Pages;

use Filament\Pages\Actions;
use App\Filament\Resources\TagResource;
use Filament\Resources\Pages\ListRecords;

class ListTags extends ListRecords
{
    protected static string $resource = TagResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
