<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\GradeResource\Pages;
use App\Filament\Admin\Resources\GradeResource\RelationManagers;
use App\Models\Grade;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Models\Student;


class GradeResource extends Resource
{
    protected static ?string $model = Grade::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationLabel = 'Grades';
    protected static ?string $pluralModelLabel = 'Grades';
    protected static ?string $modelLabel = 'Grade';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('student_id')
                    ->label('Nama')
                    ->relationship('student', 'nama')
                    ->searchable()
                    ->required()
                    ->reactive() // supaya bisa trigger update saat berubah
                    ->afterStateUpdated(function ($state, callable $set) {
                        // Ambil kelas dari model Student berdasar student_id yg dipilih
                        $kelas = Student::find($state)?->kelas;
                        // Set nilai kelas ke input kelas
                        $set('kelas', $kelas);
                    }),

                Forms\Components\TextInput::make('mata_pelajaran')
                    ->label('Mata Pelajaran')
                    ->required()
                    ->maxLength(255),

                Forms\Components\TextInput::make('kelas')
                    ->label('Kelas')
                    ->required()
                    ->maxLength(255),

                Forms\Components\TextInput::make('nilai')
                    ->label('Nilai')
                    ->numeric()
                    ->required()
                    ->minValue(0)
                    ->maxValue(100),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('student.nama')
                    ->label('Student')
                    ->sortable()
                    ->searchable(),

                Tables\Columns\TextColumn::make('mata_pelajaran')
                    ->label('Mata Pelajaran')
                    ->sortable()
                    ->searchable(),

                Tables\Columns\TextColumn::make('kelas')
                    ->label('Kelas')
                    ->sortable()
                    ->searchable(),

                Tables\Columns\TextColumn::make('nilai')
                    ->label('Nilai')
                    ->sortable(),

                Tables\Columns\TextColumn::make('created_at')
                    ->label('Created At')
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
            'index' => Pages\ListGrades::route('/'),
            'create' => Pages\CreateGrade::route('/create'),
            'edit' => Pages\EditGrade::route('/{record}/edit'),
        ];
    }
}