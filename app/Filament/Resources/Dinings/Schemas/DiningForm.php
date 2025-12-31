<?php

namespace App\Filament\Resources\Dinings\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;
use Filament\Forms\Components\Repeater;

class DiningForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->required(fn($get) => $get('type') === 'menu'),
                Select::make('type')
                    ->options(['dining' => 'Dining', 'menu' => 'Menu'])
                    ->required(),
                FileUpload::make('image')
                    ->image(),

                TextInput::make('price')
                    ->numeric()
                    ->prefix('Rs')
                    ->default(null),
                TextInput::make('time')
                    ->default(null),

                Repeater::make('dining_hours')
                    ->schema([
                        TextInput::make('meal')
                            ->label('Dining type') // Breakfast, Lunch, Dinner
                            ->required(),
                    ])
                    ->default(null),
                Textarea::make('description')
                    ->default(null)
                    ->columnSpanFull(),
                Toggle::make('status')
                    ->required(),
                TextInput::make('rank')
                    ->required()
                    ->numeric()
                    ->default(0),
            ]);
    }
}
