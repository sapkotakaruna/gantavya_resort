<?php

namespace App\Filament\Resources\Rooms\Schemas;

use Filament\Schemas\Schema;
use Filament\Schemas\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\CheckboxList;


class RoomForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Room Information')
                    ->schema([
                        TextInput::make('name')
                            ->required(),

                        Select::make('room_type')
                            ->options([
                                'Single' => 'Single',
                                'Double' => 'Double',
                                'Deluxe' => 'Deluxe',
                                'Suite' => 'Suite',
                            ])
                            ->required(),

                        TextInput::make('price_per_night')
                            ->numeric()
                            ->required(),

                        TextInput::make('max_guests')
                            ->numeric()
                            ->required(),

                        TextInput::make('size')
                            ->numeric()
                            ->label('Room Size (sq ft)'),
                    ])
                    ->columns(2),
                CheckboxList::make('amenities')
                    ->label('Amenities')
                    ->options([
                        'wifi' => 'Wi-Fi',
                        'bathroom' => 'Bathroom',
                        'shower' => 'Shower',
                        'tv' => 'Flat-screen TV',
                        'telephone' => 'In-room Telephone',
                        'ac' => 'Air Conditioning',
                        'minibar' => 'Mini Bar',
                        'room_service' => 'Room Service',
                    ])
                    ->columns(2)
                    ->columnSpanFull(),

                Section::make('Media')
                    ->schema([
                        FileUpload::make('main_image')
                            ->image()
                            ->directory('rooms/main'),

                        FileUpload::make('gallery_images')
                            ->image()
                            ->multiple()
                            ->directory('rooms/gallery')
                            ->maxFiles(5)
                    ]),

                Section::make('Description')
                    ->schema([
                        RichEditor::make('description'),
                    ]),

                Toggle::make('status')
                    ->label('Active')
                    ->default(true),
            ]);
    }
}
