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
                Forms\Components\Card::make()
                    ->schema([
                        Forms\Components\TextInput::make('title')
                            ->label('Title')
                            ->required()
                            ->live()
                            ->afterStateUpdated(function (\Filament\Forms\Set $set, $state) {
                                $set('slug', Str::slug($state));
                            }),
                        Forms\Components\TextInput::make('slug')
                            ->label('slug')
                            ->required(),
                        Forms\Components\RichEditor::make('content')
                            ->label('Content')
                            ->required(),
                        Forms\Components\Toggle::make('is_published')
                            ->label('Is Published'),
                        Forms\Components\DateTimePicker::make('publish_at')
                            ->label('Publish At'),
                        Forms\Components\TextInput::make('keywords')
                            ->label('Keywords'),
                    ])->columnSpan(8),

                Forms\Components\Card::make()
                    ->schema([
                        Forms\Components\FileUpload::make('teaser_image')
                            ->label('Teaser Image')
                            ->image()
                            ->directory('photos')
                            ->disk('public')
                            ->imageEditor(),
                        Forms\Components\FileUpload::make('banner_image')
                            ->label('Banner Image')
                            ->image()
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
                Tables\Columns\ImageColumn::make('teaser_image')
                    ->label('Teaser Image'),
                Tables\Columns\TextColumn::make('title')
                    ->label('Title')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('slug')
                    ->label('Slug')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\IconColumn::make('is_published')
                    ->label('Is Published')
                    ->boolean()
                    ->sortable(),
                Tables\Columns\TextColumn::make('publish_at')
                    ->label('Publish At')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('keywords') 
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
