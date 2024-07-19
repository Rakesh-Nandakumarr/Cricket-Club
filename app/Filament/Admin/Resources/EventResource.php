<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\EventResource\Pages;
use App\Filament\Admin\Resources\EventResource\RelationManagers;
use App\Models\Event;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Section;
use Filament\Tables\Columns\CheckboxColumn;
use Illuminate\Support\Str;

class EventResource extends Resource
{
    protected static ?string $model = Event::class;
    protected static ?string $navigationGroup = 'Content';
    protected static ?string $navigationIcon = 'heroicon-o-calendar-days';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make()
                ->schema([
                TextInput::make('title')
                    ->label('title')
                    ->live(onBlur: true)
                    ->afterStateUpdated(function (\Filament\Forms\Set $set, $state) {
                        $set('slug', Str::slug($state));
                    })
                    ->required(),
                TextInput::make('slug')
                    ->label('Slug')
                    ->required(),
                RichEditor::make('description')
                    ->label('Description')
                    ->required(),
                DateTimePicker::make('start_date')
                    ->label('Start Date & Time')
                    ->required(),
                DateTimePicker::make('end_date')
                    ->label('End Date & Time')
                    ->required(),
                TextInput::make('location')
                    ->label('Location')
                    ->required(),
                TextInput::make('keywords')
                    ->label('Keywords'),
                ]),
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
                TextColumn::make('slug')
                    ->label('Slug')
                    ->toggleable()
                    ->searchable()
                    ->sortable(),
                TextColumn::make('description')
                    ->label('Description')
                    ->limit(50)
                    ->searchable()
                    ->sortable(),
                TextColumn::make('start_date')
                    ->label('Start Date')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('end_date')
                    ->label('End Date')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('location')
                    ->label('Location')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('keywords')
                    ->label('Keywords')
                    ->toggleable()
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
            'index' => Pages\ListEvents::route('/'),
            'create' => Pages\CreateEvent::route('/create'),
            'edit' => Pages\EditEvent::route('/{record}/edit'),
        ];
    }
}
