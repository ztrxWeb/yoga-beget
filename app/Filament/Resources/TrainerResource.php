<?php

namespace App\Filament\Resources;

use App\Models\Trainer;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Support\Str;

class TrainerResource extends Resource
{
    protected static ?string $model = Trainer::class;

    public static function getModelLabel(): string
    {
        return 'Тренер'; 
    }
    public static function getPluralModelLabel(): string
    {
        return 'Тренера';
    }
    

    protected static ?string $navigationIcon = 'heroicon-o-user-group';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->label('Имя')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Textarea::make('bio')
                    ->label('Описание')
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('specialization')
                    ->label('Специализация')
                    ->required()
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->label('Имя')
                    ->searchable(),
                Tables\Columns\TextColumn::make('specialization')
                    ->label('Специализация')
                    ->searchable(),
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
            'index' => \App\Filament\Resources\TrainerResource\Pages\ListTrainers::route('/'),
            'create' => \App\Filament\Resources\TrainerResource\Pages\CreateTrainer::route('/create'),
            'edit' => \App\Filament\Resources\TrainerResource\Pages\EditTrainer::route('/{record}/edit'),
        ];
    }
}