<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CareerResource\Pages;
use App\Filament\Resources\CareerResource\RelationManagers;
use App\Models\Career;
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
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Str;


class CareerResource extends Resource
{
    protected static ?string $model = Career::class;

    public static function getNavigationGroup(): ?string
    {
        return 'Careers';
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


                Toggle::make('is_active')
                    ->label('Job status')
                    ->required()
                    ->inline(false),

                DatePicker::make('deadline')
                    ->label('Application Deadline')
                    ->required(),




                TextInput::make('department')
                    ->label('Department')
                    ->required(),

                TextInput::make('location')
                    ->label('Location')
                    ->required(),

                Select::make('career_category_id')
                    ->label('Category')
                    ->relationship('category', 'name')
                    ->required(),

                RichEditor::make('description')
                    ->columnSpan(2)
                    ->label('Job Summary')
                    ->required(),

                RichEditor::make('responsibilities')
                    ->columnSpan(2)
                    ->label('Responsibilities')
                    ->required(),

                RichEditor::make('required_skills')
                    ->columnSpan(2)
                    ->label('Required Skills')
                    ->required(),


                RichEditor::make('qualifications')
                    ->columnSpan(2)
                    ->label('Qualifications')
                    ->required(),

                RichEditor::make('benefits')
                    ->columnSpan(2)
                    ->label('Benefits')
                    ->required(),

                RichEditor::make('application_process')
                    ->columnSpan(2)
                    ->label('How to Apply')
                    ->required(),



                RichEditor::make('contact_info')
                    ->columnSpan(2)
                    ->label('Contact Information'),




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


                TextColumn::make('category.name')
                    ->label('Category')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('deadline')
                    ->label('Application Deadline')
                    ->searchable()
                    ->sortable(),


                    TextColumn::make('is_active')
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
            'index' => Pages\ListCareers::route('/'),
            // 'create' => Pages\CreateCareer::route('/create'),
            // 'edit' => Pages\EditCareer::route('/{record}/edit'),
        ];
    }
}
