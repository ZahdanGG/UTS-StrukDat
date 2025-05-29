<?php

namespace App\Filament\Resources\NamaMuridResource\Pages;

use App\Filament\Resources\NamaMuridResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditNamaMurid extends EditRecord
{
    protected static string $resource = NamaMuridResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
