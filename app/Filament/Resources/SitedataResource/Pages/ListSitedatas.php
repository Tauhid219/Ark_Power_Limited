<?php

namespace App\Filament\Resources\SitedataResource\Pages;

use App\Filament\Resources\SitedataResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSitedatas extends ListRecords
{
    protected static string $resource = SitedataResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
