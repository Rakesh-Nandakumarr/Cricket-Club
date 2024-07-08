<?php

namespace App\Filament\Admin\Resources\FileUploadResource\Pages;

use App\Filament\Admin\Resources\FileUploadResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListFileUploads extends ListRecords
{
    protected static string $resource = FileUploadResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
