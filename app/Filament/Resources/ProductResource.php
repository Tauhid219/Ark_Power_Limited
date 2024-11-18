<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProductResource\Pages;
use App\Filament\Resources\ProductResource\RelationManagers;
use App\Models\Product;
use App\Models\Category;
use Faker\Provider\ar_EG\Text;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\Toggle;

use Filament\Forms\Get;
use Filament\Forms\Set;
use Illuminate\Support\Str;

class ProductResource extends Resource
{
    protected static ?string $model = Product::class;

    public static function getNavigationGroup(): ?string
    {
        return 'Products';
    }

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')
                    ->label('Name')
                    ->required()
                    ->live(debounce: 2000)
                    ->afterStateUpdated(function (Get $get, Set $set, ?string $old, ?string $state) {
                        if (($get('slug') ?? '') !== Str::slug($old)) {
                            return;
                        }
    
                        $set('slug', Str::slug($state));
                    }),
                
                TextInput::make('slug')->unique(ignorable: fn ($record) => $record)->required(),
                
                Textarea::make('description')
                    ->label('Description')
                    ->nullable(),
                
                FileUpload::make('image')
                    ->label('Product Image')
                        ->image()
                        ->nullable()
                        // ->directory('favIcons')
                        ->getUploadedFileNameForStorageUsing(function ($file) {
                            $uniqueId = uniqid('product_');
                            return $uniqueId . '.' . $file->getClientOriginalExtension();
                        }), 
                
                Select::make('category_id')
                    ->label('Category')
                    ->options(
                        Category::all()->pluck('name', 'id')
                    )
                    ->required(),

                Toggle::make('status')
                    ->label('Status')
                    ->onColor('success')
                    ->offColor('danger')
                    ->inline(false),
                
                TextInput::make('source_name')
                ->label('Source Name'),
                
                TextInput::make('source_url')
                ->url()
                ->required(),

                
                

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

                ImageColumn::make('image')
                    ->label('Image')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('category.name')
                    ->label('Category')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('status')
                    ->label('Status')
                    ->formatStateUsing(function ($state) {
                        return $state ? 'Active' : 'Inactive';
                    })
                    ->icon(function ($state) {
                        return $state ? 'heroicon-o-check-circle' : 'heroicon-o-x-circle';
                    })
                    ->iconColor(function ($state) {
                        return $state ? 'success' : 'danger';
                    })
                    ->searchable()
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
            'index' => Pages\ListProducts::route('/'),
            // 'create' => Pages\CreateProduct::route('/create'),
            // 'edit' => Pages\EditProduct::route('/{record}/edit'),
        ];
    }
}
