<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PostResource\Pages;
use App\Filament\Resources\PostResource\RelationManagers;
use App\Models\Post;
use App\Models\BlogCategory;
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
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Toggle;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;

use Filament\Forms\Get;
use Filament\Forms\Set;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class PostResource extends Resource
{
    protected static ?string $model = Post::class;

    public static function getNavigationGroup(): ?string
    {
        return 'News & Events';
    }

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('title')
                    ->label('Title')
                    ->required()
                    ->live(debounce: 2000)
                    ->afterStateUpdated(function (Get $get, Set $set, ?string $old, ?string $state) {
                        if (($get('slug') ?? '') !== Str::slug($old)) {
                            return;
                        }

                        $set('slug', Str::slug($state));
                    }),

                TextInput::make('slug')->unique(ignorable: fn($record) => $record)->required(),


                Select::make('category_id')
                    ->label('Category')
                    ->options(fn() => BlogCategory::pluck('name', 'id'))
                    ->required(),

                FileUpload::make('featured_image')
                    ->label('Featured Image')
                    ->image()
                    ->required()
                    // ->directory('favIcons')
                    ->getUploadedFileNameForStorageUsing(function ($file) {
                        $uniqueId = uniqid('post_featured');
                        return $uniqueId . '.' . $file->getClientOriginalExtension();
                    }),

                Toggle::make('published')
                    ->label('Status')
                    ->onColor('success')
                    ->offColor('danger')
                    ->required()
                    ->inline(false),

                DatePicker::make('published_at')
                    ->label('Published At')
                    ->default(now())
                    ->required()
                    ->displayFormat('Y-m-d H:i:s'),

                RichEditor::make('content')
                    ->label('Content')
                    ->columnSpanFull()
                    ->required(),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')
                    ->label('Title')
                    ->searchable()
                    ->sortable(),

                ImageColumn::make('featured_image')
                    ->label('Featured image')
                    ->searchable()
                    ->sortable(),
                
                TextColumn::make('category.name')
                    ->label('Category')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('published_at')
                    ->label('Published')
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
            'index' => Pages\ListPosts::route('/'),
            // 'create' => Pages\CreatePost::route('/create'),
            // 'edit' => Pages\EditPost::route('/{record}/edit'),
        ];
    }
}
