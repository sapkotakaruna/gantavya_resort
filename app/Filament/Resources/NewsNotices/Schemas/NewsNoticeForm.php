<?php

namespace App\Filament\Resources\NewsNotices\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Get;
use Filament\Schemas\Schema;

class NewsNoticeForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->label('Title')
                    ->required()
                    ->maxLength(255)
                    ->live(onBlur: true)
                    ->columnSpanFull(),

                TextInput::make('slug')
                    ->label('Slug')
                    ->disabled()
                    ->dehydrated(false)
                    ->helperText('Slug will be automatically generated from the title.')
                    ->columnSpanFull(),

                Select::make('type')
                    ->label('Type')
                    ->options([
                        'news' => 'News',
                        'notice' => 'Notice',
                    ])
                    ->required()
                    ->default('news'),

                DatePicker::make('date')
                    ->label('Date')
                    ->displayFormat('Y-m-d')
                    ->nullable(),

                TextInput::make('author')
                    ->label('Author')
                    ->maxLength(255)
                    ->nullable(),

                Toggle::make('is_featured')
                    ->label('Featured')
                    ->default(false)
                    ->helperText('Featured items will be highlighted on the website.'),

                Textarea::make('description')
                    ->label('Description')
                    ->rows(5)
                    ->nullable()
                    ->columnSpanFull(),

                FileUpload::make('image_path')
                    ->label('Image')
                    ->image()
                    ->imageEditor()
                    ->imageEditorAspectRatios([
                        '16:9',
                        '4:3',
                        '1:1',
                    ])
                    ->maxSize(2048)
                    ->helperText('Upload an image for this news/notice. Maximum size: 2MB.')
                    ->columnSpanFull(),

                Toggle::make('status')
                    ->label('Active')
                    ->default(true)
                    ->helperText('Enable to make this news/notice visible on the website.'),
            ])
            ->columns(2);
    }
}
