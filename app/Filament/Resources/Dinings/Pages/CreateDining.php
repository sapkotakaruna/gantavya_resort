<?php

namespace App\Filament\Resources\Dinings\Pages;

use App\Filament\Resources\Dinings\DiningResource;
use Filament\Resources\Pages\CreateRecord;

class CreateDining extends CreateRecord
{
    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $data['type'] = 'dining';
        $data['price'] = null;
        return $data;
    }
    protected static string $resource = DiningResource::class;}
