<?php

namespace App\Filament\Resources\NewsNotices\Schemas;

use Filament\Infolists\Components\IconEntry;
use Filament\Infolists\Components\ImageEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class NewsNoticeInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('title')
                    ->label('Title')
                    ->size('lg')
                    ->weight('bold')
                    ->columnSpanFull(),

                TextEntry::make('slug')
                    ->label('Slug')
                    ->copyable()
                    ->copyMessage('Slug copied!')
                    ->copyMessageDuration(1500),

                TextEntry::make('type')
                    ->label('Type')
                    ->badge()
                    ->formatStateUsing(fn(string $state): string => ucfirst($state))
                    ->color(fn(string $state): string => match ($state) {
                        'news' => 'info',
                        'notice' => 'warning',
                        default => 'gray',
                    }),

                TextEntry::make('date')
                    ->label('Date')
                    ->date('F j, Y')
                    ->placeholder('-'),

                TextEntry::make('author')
                    ->label('Author')
                    ->placeholder('-'),

                IconEntry::make('is_featured')
                    ->label('Featured')
                    ->boolean(),

                TextEntry::make('status')
                    ->label('Status')
                    ->badge()
                    ->formatStateUsing(fn(bool $state): string => $state ? 'Active' : 'Inactive')
                    ->color(fn(bool $state): string => $state ? 'success' : 'danger'),

                TextEntry::make('description')
                    ->label('Description')
                    ->placeholder('-')
                    ->columnSpanFull(),

                ImageEntry::make('image_path')
                    ->label('Image')
                    ->height(300)
                    ->placeholder('-')
                    ->columnSpanFull(),

                TextEntry::make('created_at')
                    ->label('Created At')
                    ->dateTime()
                    ->placeholder('-'),

                TextEntry::make('updated_at')
                    ->label('Updated At')
                    ->dateTime()
                    ->placeholder('-'),
            ])
            ->columns(2);
    }
}
