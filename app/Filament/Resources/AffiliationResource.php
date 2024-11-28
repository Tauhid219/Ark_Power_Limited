<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AffiliationResource\Pages;
use App\Filament\Resources\AffiliationResource\RelationManagers;
use App\Models\Affiliation;
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

class AffiliationResource extends Resource
{
    protected static ?string $model = Affiliation::class;


    public static function getNavigationGroup(): ?string
    {
        return 'Site Settings';
    }

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')
                    ->required()
                    ->label('Affiliation Name'),

                TextInput::make('url')
                    ->url()
                    ->label('URL')
                    ->placeholder('https://example.com'),

                FileUpload::make('logo')
                    ->label('Affiliation logo')
                    ->image()
                    ->required()
                    ->maxSize(6000)
                    ->getUploadedFileNameForStorageUsing(function ($file) {
                        $uniqueId = uniqid('affiliation_logos');
                        return $uniqueId . '.' . $file->getClientOriginalExtension();
                    }),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->searchable()
                    ->label('Name'),
                ImageColumn::make('logo')
                    ->label('Logo'),
                TextColumn::make('url')
                    ->label('URL'),
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
            'index' => Pages\ListAffiliations::route('/'),
            // 'create' => Pages\CreateAffiliation::route('/create'),
            // 'edit' => Pages\EditAffiliation::route('/{record}/edit'),
        ];
    }
}
