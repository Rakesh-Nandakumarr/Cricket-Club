<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\FileUploadResource\Pages;
use App\Filament\Admin\Resources\FileUploadResource\RelationManagers;
use App\Models\FileUpload;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class FileUploadResource extends Resource
{
    protected static ?string $model = FileUpload::class;
    
    protected static ?string $navigationGroup = 'Content';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
            Forms\Components\Section::make()
                ->schema([
                    Forms\Components\TextInput::make('file_name')
                        ->label('File Name')
                        ->required(),
                    Forms\Components\Select::make('document_type')
                        ->label('Document Type')
                        ->options([
                            'Objects & By-Laws' => 'Objects & By-Laws',
                            'Minutes' => 'Minutes',
                            'Financial Reports' => 'Financial Reports',
                            'Executive Committee minutes' => 'Executive Committee minutes',
                            'Miscellaneous Documents' => 'Miscellaneous Documents',
                        ])
                        ->required(),
                    Forms\Components\FileUpload::make('file_path')
                        ->label('File Path')
                        ->openable()
                        ->directory('files')
                        ->disk('public')
                        ->downloadable()
                        ->required(),
                    Forms\Components\Toggle::make('is_active')
                        ->label('Is Active'),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('file_name')
                    ->label('File Name')
                    ->searchable()
                    ->sortable(),
                //is_active column
                Tables\Columns\IconColumn::make('is_active')
                    ->label('Is Active')
                    ->boolean()
                    ->sortable(),
                Tables\Columns\TextColumn::make('file_path')
                    ->label('File Path')
                    ->searchable()
                    ->sortable(),
                //add created_at and updated_at columns
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Created At')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('updated_at')
                    ->label('Updated At')
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

    public static function getLabel(): string
    {
        return 'Documents';
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
            'index' => Pages\ListFileUploads::route('/'),
            'create' => Pages\CreateFileUpload::route('/create'),
            'edit' => Pages\EditFileUpload::route('/{record}/edit'),
        ];
    }
}
