<?php

namespace App\Filament\Resources\NewsNotices\Pages;

use App\Filament\Resources\NewsNotices\NewsNoticeResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditNewsNotice extends EditRecord
{
    protected static string $resource = NewsNoticeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
