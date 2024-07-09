<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\PlayerResource\Pages;
use App\Filament\Admin\Resources\PlayerResource\RelationManagers;
use App\Models\Player;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\IconColumn;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\Section;


class PlayerResource extends Resource
{
    protected static ?string $model = Player::class;

    protected static ?string $navigationGroup = 'Sports';

    protected static ?string $navigationIcon = 'heroicon-o-user';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
            Section::make()
                ->schema([
                    
                    TextInput::make('first_name')
                        ->label('First Name')
                        ->required(),
                    TextInput::make('last_name')
                        ->label('Last Name')
                        ->required(),
                    TextInput::make('jersey_number')
                        ->label('Jersey Number')
                        ->required(),
                    Select::make('team_id')
                        ->label('Team')
                        ->relationship('team', 'name')
                        ->preload()
                        ->required(),
                    TextInput::make('photo')
                        ->label('Photo')
                        ->nullable(),
                    TextInput::make('player_role')
                        ->label('Player Role')
                        ->required(),
                    TextInput::make('batting_style')
                        ->label('Batting Style')
                        ->nullable(),
                    TextInput::make('bowling_style')
                        ->label('Bowling Style')
                        ->nullable(),
                    Toggle::make('is_active')
                        ->label('Is Active'),
                ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('first_name')
                    ->label('First Name')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('last_name')
                    ->label('Last Name')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('jersey_number')
                    ->label('Jersey Number')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('team')
                    ->label('Team')
                    ->getStateUsing(function ($record) {
                        return $record->team->name;
                    })
                    ->searchable()
                    ->sortable(),
                TextColumn::make('player_role')
                    ->label('Player Role')
                    ->searchable()
                    ->sortable(),
                IconColumn::make('is_active')
                    ->label('Is Active')
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
            'index' => Pages\ListPlayers::route('/'),
            'create' => Pages\CreatePlayer::route('/create'),
            'edit' => Pages\EditPlayer::route('/{record}/edit'),
        ];
    }
}
