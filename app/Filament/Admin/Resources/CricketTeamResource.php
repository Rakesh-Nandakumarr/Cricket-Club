<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\CricketTeamResource\Pages;
use App\Filament\Admin\Resources\CricketTeamResource\RelationManagers;
use App\Models\CricketTeam;
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
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Illuminate\Support\Str;

class CricketTeamResource extends Resource
{
    protected static ?string $model = CricketTeam::class;

    protected static ?string $navigationGroup = 'Sports';

    protected static ?string $navigationIcon = 'heroicon-o-users';


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make()
                ->schema([
                TextInput::make('name')
                    ->label('Name')
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
            ]),
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
                TextColumn::make('slug')
                    ->label('Slug')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('description')
                    ->label('Description')
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
            'index' => Pages\ListCricketTeams::route('/'),
            'create' => Pages\CreateCricketTeam::route('/create'),
            'edit' => Pages\EditCricketTeam::route('/{record}/edit'),
        ];
    }
}
