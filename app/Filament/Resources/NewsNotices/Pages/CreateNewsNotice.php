<?php

namespace App\Filament\Resources\NewsNotices\Pages;

use App\Filament\Resources\NewsNotices\NewsNoticeResource;
use Filament\Resources\Pages\CreateRecord;

class CreateNewsNotice extends CreateRecord
{
    protected static string $resource = NewsNoticeResource::class;
}
