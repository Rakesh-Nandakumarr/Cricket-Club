<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\BookingResource\Pages;
use App\Filament\Admin\Resources\BookingResource\RelationManagers;
use App\Models\Booking;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class BookingResource extends Resource
{
    protected static ?string $model = Booking::class;

    protected static ?string $navigationGroup = 'Sports';
    
    protected static ?string $navigationIcon = 'heroicon-o-calendar-days';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
            Forms\Components\Section::make()
                ->heading('Applicant Details')
                ->schema([
                    Forms\Components\TextInput::make('name')
                        ->label('Name')
                        ->required(),
                    Forms\Components\Toggle::make('current_member')
                        ->label('Current Member')
                        ->required(),
                    Forms\Components\TextInput::make('address')
                        ->label('Address')
                        ->required(),
                    Forms\Components\TextInput::make('phone')
                        ->label('Phone')
                        ->required(),
                    Forms\Components\TextInput::make('email')
                        ->label('Email')
                        ->email()
                        ->required(),
                ])->columnSpan(1),
                Forms\Components\Section::make()
                    ->heading('Booking Details')
                    ->schema([
                    Forms\Components\Datepicker::make('booking_date')
                        ->label('Booking Date')
                        ->required(),
                    Forms\Components\Timepicker::make('start_time')
                        ->label('Start Time')
                        ->required(),
                    Forms\Components\Timepicker::make('finish_time')
                        ->label('Finish Time')
                        ->required(),
                    Forms\Components\Radio::make('function_type')
                        ->label('Type of function')
                        ->options([
                            'Private-member' => 'Private member',
                            'Private-non-member' => 'Private non member',
                            'Sponsored' => 'Sponsored',
                        ])
                        ->required(),
                    Forms\Components\Textarea::make('function_nature')
                        ->label('Function Nature')
                        ->required(),
                ])->columnSpan(1),
            
            ])->columns(2);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->label('Name')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\IconColumn::make('current_member')
                    ->label('Current Member')
                    ->boolean()
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('booking_date')
                    ->label('Booking Date')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('start_time')
                    ->label('Start Time')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('finish_time')
                    ->label('Finish Time')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('function_type')
                    ->label('Type of function')
                    ->searchable()
                    ->sortable(),

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
            'index' => Pages\ListBookings::route('/'),
            'create' => Pages\CreateBooking::route('/create'),
            'edit' => Pages\EditBooking::route('/{record}/edit'),
        ];
    }
}
