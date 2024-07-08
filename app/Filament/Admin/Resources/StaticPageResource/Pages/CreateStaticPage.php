<?php

namespace App\Filament\Admin\Resources\StaticPageResource\Pages;

use App\Filament\Admin\Resources\StaticPageResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateStaticPage extends CreateRecord
{
    protected static string $resource = StaticPageResource::class;
}
