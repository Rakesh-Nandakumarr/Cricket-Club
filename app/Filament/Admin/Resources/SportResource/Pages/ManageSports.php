<?php

namespace App\Filament\Admin\Resources\SportResource\Pages;

use App\Filament\Admin\Resources\SportResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageSports extends ManageRecords
{
    protected static string $resource = SportResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
