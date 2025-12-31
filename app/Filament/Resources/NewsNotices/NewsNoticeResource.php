<?php

namespace App\Filament\Resources\NewsNotices;

use App\Filament\Resources\NewsNotices\Pages\CreateNewsNotice;
use App\Filament\Resources\NewsNotices\Pages\EditNewsNotice;
use App\Filament\Resources\NewsNotices\Pages\ListNewsNotices;
use App\Filament\Resources\NewsNotices\Pages\ViewNewsNotice;
use App\Filament\Resources\NewsNotices\Schemas\NewsNoticeForm;
use App\Filament\Resources\NewsNotices\Tables\NewsNoticesTable;
use App\Models\NewsNotice;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class NewsNoticeResource extends Resource
{
    protected static ?string $model = NewsNotice::class;
    protected static string|\UnitEnum|null $navigationGroup = 'Web Management';
    protected static ?int $navigationSort = 25;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedNewspaper;

    protected static ?string $recordTitleAttribute = 'News/Notice';

    public static function form(Schema $schema): Schema
    {
        return NewsNoticeForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return NewsNoticesTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListNewsNotices::route('/'),
            'create' => CreateNewsNotice::route('/create'),
            'view' => ViewNewsNotice::route('/{record}'),
            'edit' => EditNewsNotice::route('/{record}/edit'),
        ];
    }
}
