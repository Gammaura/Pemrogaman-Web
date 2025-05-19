<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\StudentResource\Pages;
use App\Filament\Admin\Resources\StudentResource\RelationManagers;
use App\Models\Student;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class StudentResource extends Resource
{
    protected static ?string $model = Student::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationLabel = 'Siswa';
    protected static ?string $pluralModelLabel = 'Siswa';
    protected static ?string $modelLabel = 'Siswa';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nama')
                    ->label('Nama')
                    ->required()
                    ->maxLength(255),

                Forms\Components\TextInput::make('nisn')
                    ->label('NISN')
                    ->required()
                    ->unique(ignoreRecord: true)
                    ->maxLength(255),

                Forms\Components\Select::make('kelas')
                ->label('Kelas')
                ->options([
                    '10 IPA 1' => '10 IPA 1',
                    '10 IPA 2' => '10 IPA 2',
                    '10 IPA 3' => '10 IPA 3',
                    '10 IPA 4' => '10 IPA 4',
                    '10 IPS 1' => '10 IPS 1',
                    '10 IPS 2' => '10 IPS 2',
                    '10 IPS 3' => '10 IPS 3',
                    '10 IPS 4' => '10 IPS 4',
                    '11 IPA 1' => '11 IPA 1',
                    '11 IPA 2' => '11 IPA 2',
                    '11 IPA 3' => '11 IPA 3',
                    '11 IPA 4' => '11 IPA 4',
                    '11 IPS 1' => '11 IPS 1',
                    '11 IPS 2' => '11 IPS 2',
                    '11 IPS 3' => '11 IPS 3',
                    '11 IPS 4' => '11 IPS 4',
                    '12 IPA 1' => '12 IPA 1',
                    '12 IPA 2' => '12 IPA 2',
                    '12 IPA 3' => '12 IPA 3',
                    '12 IPA 4' => '12 IPA 4',
                    '12 IPS 1' => '12 IPS 1',
                    '12 IPS 2' => '12 IPS 2',
                    '12 IPS 3' => '12 IPS 3',
                    '12 IPS 4' => '12 IPS 4',
                ])
                ->searchable()
                ->required(),
                

                Forms\Components\DatePicker::make('tanggal_lahir')
                    ->label('Tanggal Lahir')
                    ->required(),

                Forms\Components\Textarea::make('alamat')
                    ->label('Alamat')
                    ->required()
                    ->maxLength(65535),

                Forms\Components\TextInput::make('wali_murid')
                    ->label('Wali Murid')
                    ->required()
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nama')
                    ->label('Nama')
                    ->sortable()
                    ->searchable(),

                Tables\Columns\TextColumn::make('nisn')
                    ->sortable()
                    ->searchable(),

                Tables\Columns\TextColumn::make('kelas')
                    ->sortable()
                    ->searchable(),

                Tables\Columns\TextColumn::make('tanggal_lahir')
                    ->label('Tanggal Lahir')
                    ->date()
                    ->sortable(),

                Tables\Columns\TextColumn::make('wali_murid')
                    ->label('Wali Murid')
                    ->sortable()
                    ->searchable(),

                Tables\Columns\TextColumn::make('created_at')
                    ->label('Dibuat')
                    ->dateTime()
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
            'index' => Pages\ListStudents::route('/'),
            'create' => Pages\CreateStudent::route('/create'),
            'edit' => Pages\EditStudent::route('/{record}/edit'),
        ];
    }
}