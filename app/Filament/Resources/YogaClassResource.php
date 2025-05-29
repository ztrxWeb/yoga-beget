<?php

namespace App\Filament\Resources;

use App\Models\Trainer;
use App\Models\YogaClass;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class YogaClassResource extends Resource
{
    protected static ?string $model = YogaClass::class;

    public static function getModelLabel(): string
    {
        return 'Занятие';
    }
    public static function getPluralModelLabel(): string
    {
        return 'Занятия';
    }

    protected static ?string $navigationIcon = 'heroicon-o-calendar';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->label('Название')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Textarea::make('description')
                    ->label('Описание')
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\Select::make('trainer_id')
                    ->label('Тренер')
                    ->options(Trainer::all()->pluck('name', 'id'))
                    ->searchable()
                    ->required(),
                Forms\Components\DateTimePicker::make('start_time')
                    ->label('Начало занятия')
                    ->required(),
                Forms\Components\DateTimePicker::make('end_time')
                    ->label('Конец занятия')
                    ->required(),
                Forms\Components\TextInput::make('price')
                    ->label('Цена')
                    ->required()
                    ->numeric(),
                Forms\Components\Select::make('difficulty_level')
                    ->label('Сложность')
                    ->options([
                        'beginner' => 'Начинающий',
                        'intermediate' => 'Средний',
                        'advanced' => 'Профессиональный',
                    ])
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->label('Название')
                    ->searchable(),
                Tables\Columns\TextColumn::make('trainer.name')
                    ->label('Тренер')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('price')
                    ->label('Цена')
                    ->numeric()
                    ->sortable()
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
            'index' => \App\Filament\Resources\YogaClassResource\Pages\ListYogaClasses::route('/'),
            'create' => \App\Filament\Resources\YogaClassResource\Pages\CreateYogaClass::route('/create'),
            'edit' => \App\Filament\Resources\YogaClassResource\Pages\EditYogaClass::route('/{record}/edit'),
        ];
    }
}