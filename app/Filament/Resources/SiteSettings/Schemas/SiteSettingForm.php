<?php

namespace App\Filament\Resources\SiteSettings\Schemas;

use Filament\Schemas\Schema;
use Filament\Schemas\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;

class SiteSettingForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema->components([

            /*
            |--------------------------------------------------------------------------
            | BASIC SITE INFORMATION
            |--------------------------------------------------------------------------
            */
            Section::make('Basic Information')
                ->schema([
                    TextInput::make('site_name')
                        ->label('Site Name')
                        ->required()
                        ->maxLength(255),

                    FileUpload::make('logo')
                        ->label('Logo')
                        ->image()
                        ->directory('site/logo')
                        ->imagePreviewHeight('100'),

                    TextInput::make('location')
                        ->label('Location')
                        ->maxLength(255),

                    TextInput::make('email')
                        ->label('Email')
                        ->email()
                        ->maxLength(255),

                    TextInput::make('phone')
                        ->label('Phone')
                        ->maxLength(50),

                    TextInput::make('office_hour')
                        ->label('Office Hours')
                        ->placeholder('Sun–Fri: 9:00 AM – 5:00 PM'),
                ])
                ->columns(2)
                ->collapsible(),

            /*
            |--------------------------------------------------------------------------
            | SOCIAL MEDIA LINKS
            |--------------------------------------------------------------------------
            */
            Section::make('Social Media Links')
                ->schema([
                    TextInput::make('facebook_link')
                        ->label('Facebook')
                        ->url(),

                    TextInput::make('instagram_link')
                        ->label('Instagram')
                        ->url(),

                    TextInput::make('x_link')
                        ->label('X (Twitter)')
                        ->url(),

                    TextInput::make('youtube_link')
                        ->label('YouTube')
                        ->url(),

                    TextInput::make('linkedin_link')
                        ->label('LinkedIn')
                        ->url(),
                ])
                ->columns(2)
                ->collapsible(),

            /*
            |--------------------------------------------------------------------------
            | FOOTER MENU LINKS
            |--------------------------------------------------------------------------
            */
            Section::make('Footer Menu Links')
                ->description('Minimum 4 footer links')
                ->schema([
                    TextInput::make('footer_menu_1_title')
                        ->label('Footer Link 1 Title')
                        ->nullable(),

                    TextInput::make('footer_menu_1_link')
                        ->label('Footer Link 1 URL')
                        ->url()
                        ->nullable(),

                    TextInput::make('footer_menu_2_title')
                        ->label('Footer Link 2 Title')
                        ->required(),

                    TextInput::make('footer_menu_2_link')
                        ->label('Footer Link 2 URL')
                        ->url()
                        ->nullable(),

                    TextInput::make('footer_menu_3_title')
                        ->label('Footer Link 3 Title')
                        ->nullable(),

                    TextInput::make('footer_menu_3_link')
                        ->label('Footer Link 3 URL')
                        ->url()
                        ->nullable(),

                    TextInput::make('footer_menu_4_title')
                        ->label('Footer Link 4 Title')
                        ->nullable(),

                    TextInput::make('footer_menu_4_link')
                        ->label('Footer Link 4 URL')
                        ->url()
                        ->nullable(),
                ])
                ->columns(2)
                ->collapsible(),
        ]);
    }
}
