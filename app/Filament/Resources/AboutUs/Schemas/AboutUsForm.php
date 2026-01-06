<?php

namespace App\Filament\Resources\AboutUs\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class AboutUsForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->required(),
                TextInput::make('slug')
                    ->label('Slug')
                    ->disabled()
                    ->dehydrated(false)
                    ->helperText('Slug will be automatically generated from the title.'),
                Textarea::make('description')
                    ->default(null)
                    ->columnSpanFull(),
                FileUpload::make('image_path')
                    ->label('Image')
                    ->disk('public')
                    ->directory('aboutus/images')
                    ->visibility('public')
                    ->image(),
                Toggle::make('status')
                    ->required(),
                TextInput::make('rank')
                    ->required()
                    ->numeric()
                    ->default(0),
            ]);
    }
}
