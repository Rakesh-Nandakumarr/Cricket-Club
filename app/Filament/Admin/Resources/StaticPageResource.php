<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\StaticPageResource\Pages;
use App\Filament\Admin\Resources\StaticPageResource\RelationManagers;
use App\Models\StaticPage;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Str;


class StaticPageResource extends Resource
{

    protected static ?string $navigationGroup = 'Content';

    protected static ?string $model = StaticPage::class;

    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //use a card to group the fields
                Forms\Components\Section::make()
                    ->schema([                
                Forms\Components\TextInput::make('title')
                    ->required()
                    ->required()
                    ->live()
                    ->afterStateUpdated(function (\Filament\Forms\Set $set, $state) {
                        $set('slug', Str::slug($state));
                    })
                    ->unique(StaticPage::class, 'title', ignoreRecord: true),
                Forms\Components\TextInput::make('slug')
                    ->required()
                    ->unique(StaticPage::class, 'slug', ignoreRecord: true),
                Forms\Components\Builder::make('content')
                    ->blocks([
                        Forms\Components\Builder\Block::make('heading')
                            ->schema([
                                Forms\Components\TextInput::make('content')
                                    ->label('Heading')
                                    ->required(),
                                Forms\Components\Select::make('level')
                                    ->options([
                                        'h1' => 'Heading 1',
                                        'h2' => 'Heading 2',
                                        'h3' => 'Heading 3',
                                        'h4' => 'Heading 4',
                                        'h5' => 'Heading 5',
                                        'h6' => 'Heading 6',
                                    ])
                                    ->required(),
                            ])
                            ->columns(2),
                        Forms\Components\Builder\Block::make('paragraph')
                            ->schema([
                                Forms\Components\Textarea::make('content')
                                    ->label('Paragraph')
                                    ->required(),
                            ]),
                        Forms\Components\Builder\Block::make('image')
                            ->schema([
                                Forms\Components\FileUpload::make('url')
                                    ->label('Image')
                                    ->image()
                                    ->required(),
                                Forms\Components\TextInput::make('alt')
                                    ->label('Alt text')
                                    ->required(),
                            ]),
                    ])
                    ->label('Page Content')

                ])
            ]);
    }

    public static function table(Tables\Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id'),
                Tables\Columns\TextColumn::make('title')->limit(50),
                Tables\Columns\TextColumn::make('slug')->limit(50),
                Tables\Columns\TextColumn::make('created_at')->dateTime(),
                Tables\Columns\TextColumn::make('updated_at')->dateTime(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
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
            'index' => Pages\ListStaticPages::route('/'),
            'create' => Pages\CreateStaticPage::route('/create'),
            'edit' => Pages\EditStaticPage::route('/{record}/edit'),
        ];
    }
}
