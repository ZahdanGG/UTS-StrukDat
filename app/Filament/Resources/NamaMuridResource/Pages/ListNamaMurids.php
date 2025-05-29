<?php

namespace App\Filament\Resources\NamaMuridResource\Pages;

use App\Filament\Resources\NamaMuridResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListNamaMurids extends ListRecords
{
    protected static string $resource = NamaMuridResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
