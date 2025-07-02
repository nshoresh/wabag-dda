<?php

namespace App\Filament\Resources;

use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;

use App\Filament\Resources\PlanResource\Pages;
use App\Filament\Resources\PlanResource\RelationManagers;
use App\Models\Plan;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PlanResource extends Resource
{
    protected static ?string $model = Plan::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'Development Modules';
    
    public static function canViewAny(): bool
{
    /** @var User|null $user */
    $user = Auth::user();

    return $user?->hasAnyRole(['admin', 'editor']);
}

public static function canView(Model $record): bool
{
    /** @var User|null $user */
    $user = Auth::user();

    return $user?->hasAnyRole(['admin', 'editor']);
}

public static function canCreate(): bool
{
    /** @var User|null $user */
    $user = Auth::user();

    return $user?->hasAnyRole(['admin', 'editor']);
}

public static function canEdit(Model $record): bool
{
    /** @var User|null $user */
    $user = Auth::user();

    return $user?->hasAnyRole(['admin', 'editor']);
}

public static function canDelete(Model $record): bool
{
    /** @var User|null $user */
    $user = Auth::user();

    return $user?->hasAnyRole('admin'); // Only admins can delete
}


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
            ->required()
            ->maxLength(255),

        Forms\Components\Textarea::make('description')
            ->label('Plan Description')
            ->rows(5)
            ->maxLength(2000),

        Forms\Components\DatePicker::make('start_date')
            ->label('Start Date'),

        Forms\Components\DatePicker::make('end_date')
            ->label('End Date'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
        Tables\Columns\TextColumn::make('title')
            ->searchable()
            ->sortable(),

        Tables\Columns\TextColumn::make('start_date')
            ->label('Start')
            ->date()
            ->sortable(),

        Tables\Columns\TextColumn::make('end_date')
            ->label('End')
            ->date()
            ->sortable(),

        Tables\Columns\TextColumn::make('created_at')
            ->label('Created')
            ->dateTime()
            ->since(),

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
            ])

            ->defaultSort('start_date', 'desc');
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
            'index' => Pages\ListPlans::route('/'),
            'create' => Pages\CreatePlan::route('/create'),
            'edit' => Pages\EditPlan::route('/{record}/edit'),
        ];
    }
}
