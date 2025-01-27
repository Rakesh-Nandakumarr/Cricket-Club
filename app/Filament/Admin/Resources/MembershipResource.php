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
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\IconColumn;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;




class MembershipResource extends Resource
{
    protected static ?string $model = Membership::class;

    protected static ?string $navigationGroup = 'Sports';
    protected static ?string $navigationIcon = 'heroicon-o-user-group';


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
                    DatePicker::make('date_of_birth')
                        ->label('Date of Birth')
                        ->required(),
                    Select::make('gender')
                        ->label('Gender')
                        ->options([
                            'Male' => 'Male',
                            'Female' => 'Female',
                            'Other' => 'Other',
                        ])
                        ->required(),
                    TextInput::make('phone_number')
                        ->label('Phone Number')
                        ->tel()
                        ->required(),
                    TextInput::make('mailing_address')
                        ->label('Mailing Address')
                        ->required(),
                    TextInput::make('city')
                        ->label('City')
                        ->required(),
                    TextInput::make('province')
                        ->label('Province')
                        ->required(),
                    TextInput::make('postal_code')
                        ->label('Postal Code')
                        ->required(),
                    TextInput::make('email')
                        ->label('Email')
                        ->email()
                        ->unique()
                        ->required(),
                    TextInput::make('emergency_contact_name')
                        ->label('Emergency Contact Name')
                        ->required(),
                    TextInput::make('emergency_contact_relationship')
                        ->label('Emergency Contact Relationship')
                        ->required(),
                    TextInput::make('emergency_contact_phone')
                        ->label('Emergency Contact Phone')
                        ->tel()
                        ->required(),
                    TextInput::make('emergency_contact_email')
                        ->label('Emergency Contact Email')
                        ->email()
                        ->required(),
                    Toggle::make('agm_package')
                        ->label('AGM Package'),
                    Toggle::make('consent')
                        ->label('Consent'),
                    Select::make('volunteer_activities')
                        ->label('Volunteer Activities')
                        ->multiple()
                        ->options([
                            'Event Planning' => 'Event Planning',
                            'Fundraising' => 'Fundraising',
                            'Social Media Management' => 'Social Media Management',
                            'Coaching/Training' => 'Coaching/Training',
                            'Community Outreach' => 'Community Outreach',
                            'other' => 'other',
                        ]),
                    TextInput::make('other_activity')
                        ->label('Other Activity'),
                    Toggle::make('agreement')
                        ->label('Agreement')
                        ->required(),
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
                TextColumn::make('phone_number')
                    ->label('Phone Number')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('mailing_address')
                    ->label('Mailing Address')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('postal_code')
                    ->label('Postal Code')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('email')
                    ->label('Email')
                    ->searchable()
                    ->sortable(),
                IconColumn::make('is_active')
                    ->label('Is Active')
                    ->boolean()
                    ->sortable(),
                IconColumn::make('is_membership_paid')
                    ->label('Is Membership Paid')
                    ->boolean()
                    ->sortable(),
                TextColumn::make('membership_paid_date')
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