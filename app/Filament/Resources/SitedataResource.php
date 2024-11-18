<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SitedataResource\Pages;
use App\Filament\Resources\SitedataResource\RelationManagers;
use App\Models\Sitedata;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\TextColumn;

use Illuminate\Support\Facades\Storage;



class SitedataResource extends Resource
{
    protected static ?string $model = Sitedata::class;

    public static function getNavigationGroup(): ?string
    {
        return 'Site Seetings';
    }

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('siteName')
                    ->label('Site Name')
                    ->required(),
                
                TextInput::make('tagLine')
                    ->label('Tagline')
                    ->nullable(),

                FileUpload::make('logo')
                    ->label('Logo')
                    ->image()
                    ->required()
                    // ->directory('logos')
                    ->getUploadedFileNameForStorageUsing(function ($file) {
                        $uniqueId = uniqid('logo_');
                        return $uniqueId . '.' . $file->getClientOriginalExtension();
                    }),

                FileUpload::make('favIcon')
                    ->label('Favicon')
                    ->image()
                    ->nullable()
                    // ->directory('favIcons')
                    ->getUploadedFileNameForStorageUsing(function ($file) {
                        $uniqueId = uniqid('favIcon_');
                        return $uniqueId . '.' . $file->getClientOriginalExtension();
                    }),

                TextInput::make('address')
                    ->label('Address')
                    ->nullable(),

                TextInput::make('phoneNumber')
                    ->label('Phone Number Sales')
                    ->nullable(),

                 TextInput::make('phoneNumber2')
                    ->label('Phone Number Support')
                    ->nullable(),

                TextInput::make('email')
                    ->label('Email')
                    ->email()
                    ->required(),

                TextInput::make('fbUrl')
                    ->label('Facebook URL')
                    ->nullable(),

                TextInput::make('linkdinUrl')
                    ->label('LinkedIn URL')
                    ->nullable(),

                TextInput::make('twitterUrl')
                    ->label('Twitter URL')
                    ->nullable(),

                TextInput::make('teligramUrl')
                    ->label('Telegram URL')
                    ->nullable(),

                TextInput::make('instragramUrl')
                    ->label('Instagram URL')
                    ->nullable(),

                TextInput::make('youtubeUrl')
                    ->label('YouTube URL')
                    ->nullable(),

                Textarea::make('about')
                    ->label('About')
                    ->nullable(),

                Textarea::make('mission')
                    ->label('Mission')
                    ->nullable(),

                Textarea::make('vision')
                    ->label('Vision')
                    ->nullable(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('siteName')->label('Site Name'),
                TextColumn::make('tagLine')->label('Tagline'),
                TextColumn::make('email')->label('Email'),
                TextColumn::make('phoneNumber')->label('Phone Number'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
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
            'index' => Pages\ListSitedatas::route('/'),
            // 'create' => Pages\CreateSitedata::route('/create'),
            // 'edit' => Pages\EditSitedata::route('/{record}/edit'),
        ];
    
    }


}



