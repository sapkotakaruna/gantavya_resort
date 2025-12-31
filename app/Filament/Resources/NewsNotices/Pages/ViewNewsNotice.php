<?php

namespace App\Filament\Resources\NewsNotices\Pages;

use App\Filament\Resources\NewsNotices\NewsNoticeResource;
use Filament\Actions\Action;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewNewsNotice extends ViewRecord
{
    protected static string $resource = NewsNoticeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Action::make('back')
                ->label('Back to News & Notices')
                ->url(static::getResource()::getUrl('index'))
                ->icon('heroicon-o-arrow-left')
                ->color('gray'),
            EditAction::make(),
        ];
    }
}
