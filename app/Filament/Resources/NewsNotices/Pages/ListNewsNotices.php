<?php

namespace App\Filament\Resources\NewsNotices\Pages;

use App\Filament\Resources\NewsNotices\NewsNoticeResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListNewsNotices extends ListRecords
{
    protected static string $resource = NewsNoticeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
