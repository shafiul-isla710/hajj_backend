<?php

namespace App\Filament\Resources\HajjStepResource\Pages;

use App\Filament\Resources\HajjStepResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListHajjSteps extends ListRecords
{
    protected static string $resource = HajjStepResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
