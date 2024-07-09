<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\MembershipResource\Pages;
use App\Filament\Admin\Resources\MembershipResource\RelationManagers;
use App\Models\Membership;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class MembershipResource extends Resource
{
    protected static ?string $model = Membership::class;

    protected static ?string $navigationGroup = 'Sports';
    protected static ?string $navigationIcon = 'heroicon-o-user-group';


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
            Forms\Components\Section::make()
                ->schema([
                    Forms\Components\TextInput::make('first_name')
                        ->label('First Name')
                        ->required(),
                    Forms\Components\TextInput::make('last_name')
                        ->label('Last Name')
                        ->required(),
                    Forms\Components\TextInput::make('phone_number')
                        ->label('Phone Number')
                        ->numeric()
                        ->required(),
                    Forms\Components\TextInput::make('mailing_address')
                        ->label('Mailing Address')
                        ->required(),
                    Forms\Components\TextInput::make('postal_code')
                        ->label('Postal Code')
                        ->required(),
                    Forms\Components\TextInput::make('email')
                        ->label('Email')
                        ->email()
                        ->required(),
                    Forms\Components\Toggle::make('is_active')
                        ->label('Is Active'),
                    Forms\Components\Toggle::make('is_membership_paid')
                        ->label('Is Membership Paid'),
                    Forms\Components\Datepicker::make('membership_paid_date')
                        ->label('Membership Paid Date')
                        ->nullable(),
                ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('first_name')
                    ->label('First Name')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('last_name')
                    ->label('Last Name')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('phone_number')
                    ->label('Phone Number')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('mailing_address')
                    ->label('Mailing Address')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('postal_code')
                    ->label('Postal Code')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('email')
                    ->label('Email')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\BooleanColumn::make('is_active')
                    ->label('Is Active')
                    ->sortable(),
                Tables\Columns\BooleanColumn::make('is_membership_paid')
                    ->label('Is Membership Paid')
                    ->sortable(),
                Tables\Columns\TextColumn::make('membership_paid_date')
                    ->label('Membership Paid Date')
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
            'index' => Pages\ListMemberships::route('/'),
            'create' => Pages\CreateMembership::route('/create'),
            'edit' => Pages\EditMembership::route('/{record}/edit'),
        ];
    }
}
