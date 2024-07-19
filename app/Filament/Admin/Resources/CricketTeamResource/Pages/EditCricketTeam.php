<?php

namespace App\Filament\Admin\Resources\CricketTeamResource\Pages;

use App\Filament\Admin\Resources\CricketTeamResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCricketTeam extends EditRecord
{
    protected static string $resource = CricketTeamResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
