<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\BlogResource\Pages;
use App\Filament\Admin\Resources\BlogResource\RelationManagers;
use App\Models\Blog;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Str;
use Filament\Forms\Set;
use Closure;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\ImageColumn;


class BlogResource extends Resource
{
    protected static ?string $model = Blog::class;

    protected static ?string $navigationGroup = 'Content';

    //use a more suitable icon
    protected static ?string $navigationIcon = 'heroicon-o-document-text';


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make()
                    ->schema([
                        TextInput::make('title')
                            ->label('Title')
                            ->required()
                            ->live(onBlur: true)
                            ->afterStateUpdated(function (\Filament\Forms\Set $set, $state) {
                                $set('slug', Str::slug($state));
                            }),
                        TextInput::make('slug')
                            ->label('slug')
                            ->required(),
                        RichEditor::make('content')
                            ->label('Content')
                            ->required(),
                        Toggle::make('is_published')
                            ->label('Is Published'),
                        DateTimePicker::make('publish_at')
                            ->label('Publish At'),
                        TextInput::make('keywords')
                            ->label('Keywords'),
                    ])->columnSpan(8),

                Section::make()
                    ->schema([
                        FileUpload::make('teaser_image')
                            ->label('Teaser Image')
                            ->directory('photos')
                            ->disk('public')
                            ->imageEditor(),
                        FileUpload::make('banner_image')
                            ->label('Banner Image')
                            ->directory('photos')
                            ->disk('public')
                            ->imageEditor(),
                    ])->columnSpan(4),
            ])->columns(12);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('teaser_image')
                    ->label('Teaser Image'),
                TextColumn::make('title')
                    ->label('Title')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('slug')
                    ->label('Slug')
                    ->searchable()
                    ->sortable(),
                IconColumn::make('is_published')
                    ->label('Is Published')
                    ->boolean()
                    ->sortable(),
                TextColumn::make('publish_at')
                    ->label('Publish At')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('keywords') 
                    ->label('Keywords')
                    ->searchable()
                    ->sortable(),
                    
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
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
            'index' => Pages\ListBlogs::route('/'),
            'create' => Pages\CreateBlog::route('/create'),
            'view' => Pages\ViewBlog::route('/{record}'),
            'edit' => Pages\EditBlog::route('/{record}/edit'),
        ];
    }
}
