<?php

namespace App\Filament\Admin\Resources\FileUploadResource\Pages;

use App\Filament\Admin\Resources\FileUploadResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateFileUpload extends CreateRecord
{
    protected static string $resource = FileUploadResource::class;
}
