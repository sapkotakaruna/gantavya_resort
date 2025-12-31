<?php

namespace App\Filament\Resources\Galleries\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;
use Filament\Forms\Components\Repeater;


class GalleryForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->required()
                    ->maxLength(255),

                FileUpload::make('main_image')
                    ->image()
                    ->directory('gallery/main')
                    ->label('Main Image')
                    ->required(),

                Toggle::make('status')
                    ->default(true),

                Repeater::make('images')
                    ->relationship()
                    ->label('Gallery Images')
                    ->schema([
                        FileUpload::make('image')
                            ->image()
                            ->directory('gallery/images')
                            ->required(),
                    ])
                    ->grid(3)
                    ->collapsible()
                    ->addActionLabel('Add Image')

            ]);
    }
}
