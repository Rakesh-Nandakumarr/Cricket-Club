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
use Filament\Forms\Components\Datepicker;
use Filament\Forms\Components\Radio;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Timepicker;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\Section;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\IconColumn;


class BookingResource extends Resource
{
    protected static ?string $model = Booking::class;

    protected static ?string $navigationGroup = 'Sports';
    
    protected static ?string $navigationIcon = 'heroicon-o-calendar-days';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
            Section::make()
                ->heading('Applicant Details')
                ->schema([
                    TextInput::make('name')
                        ->label('Name')
                        ->required(),
                    Toggle::make('current_member')
                        ->label('Current Member')
                        ->required(),
                    TextInput::make('address')
                        ->label('Address')
                        ->required(),
                    TextInput::make('phone')
                        ->label('Phone')
                        ->required(),
                    TextInput::make('email')
                        ->label('Email')
                        ->email()
                        ->required(),
                ])->columnSpan(1),
                Section::make()
                    ->heading('Booking Details')
                    ->schema([
                    Datepicker::make('booking_date')
                        ->label('Booking Date')
                        ->required(),
                    Timepicker::make('start_time')
                        ->label('Start Time')
                        ->required(),
                    Timepicker::make('finish_time')
                        ->label('Finish Time')
                        ->required(),
                    Radio::make('function_type')
                        ->label('Type of function')
                        ->options([
                            'Private-member' => 'Private member',
                            'Private-non-member' => 'Private non member',
                            'Sponsored' => 'Sponsored',
                        ])
                        ->required(),
                    Textarea::make('function_nature')
                        ->label('Function Nature')
                        ->required(),
                ])->columnSpan(1),
            
            ])->columns(2);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->label('Name')
                    ->searchable()
                    ->sortable(),
                IconColumn::make('current_member')
                    ->label('Current Member')
                    ->boolean()
                    ->searchable()
                    ->sortable(),
                TextColumn::make('booking_date')
                    ->label('Booking Date')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('start_time')
                    ->label('Start Time')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('finish_time')
                    ->label('Finish Time')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('function_type')
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
