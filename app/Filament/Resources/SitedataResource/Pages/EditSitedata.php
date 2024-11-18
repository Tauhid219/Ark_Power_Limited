<?php

namespace App\Filament\Resources\SitedataResource\Pages;

use App\Filament\Resources\SitedataResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSitedata extends EditRecord
{
    protected static string $resource = SitedataResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
