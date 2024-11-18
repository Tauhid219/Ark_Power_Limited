<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ManagementResource\Pages;
use App\Filament\Resources\ManagementResource\RelationManagers;
use App\Models\Management;
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
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;

class ManagementResource extends Resource
{
    protected static ?string $model = Management::class;

    public static function getNavigationGroup(): ?string
    {
        return 'Site Seetings';
    }

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')
                ->required()
                ->label('Name'),
                
            TextInput::make('designation')
                ->required()
                ->label('Designation'),
                
            Textarea::make('about')
                ->label('About'),

            FileUpload::make('image')
                ->label('Femanagement Image')
                ->image()
                ->required()
                ->getUploadedFileNameForStorageUsing(function ($file) {
                    $uniqueId = uniqid('management_images');
                    return $uniqueId . '.' . $file->getClientOriginalExtension();
                }),


            ]);



    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->label('Name')
                    ->searchable()
                    ->sortable(),
            
                TextColumn::make('designation')
                    ->label('Designation')
                    ->searchable()
                    ->sortable(),

                ImageColumn::make('image')
                    ->label('Image')
                    ->sortable(),
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
            'index' => Pages\ListManagement::route('/'),
            // 'create' => Pages\CreateManagement::route('/create'),
            // 'edit' => Pages\EditManagement::route('/{record}/edit'),
        ];
    }
}
