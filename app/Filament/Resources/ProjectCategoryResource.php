<?php

namespace App\Filament\Resources;

use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Actions\BulkActionGroup;
use Filament\Tables\Actions\DeleteBulkAction;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

use App\Filament\Resources\ProjectCategoryResource\Pages;
use App\Filament\Resources\ProjectCategoryResource\RelationManagers;
use App\Models\ProjectCategory;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ProjectCategoryResource extends Resource
{

    protected static ?string $navigationGroup = 'Development Modules';
    protected static ?string $navigationLabel = 'Project Categories';
    protected static ?string $pluralModelLabel = 'Project Categories';
    protected static ?string $modelLabel = 'Project Category';

    protected static ?string $model = ProjectCategory::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

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
                TextInput::make('name')
                    ->label('Category Name')
                    ->required()
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('created_at')
                    ->label('Created')
                    ->dateTime('d M Y'),
            ])
            ->actions([
                EditAction::make(),
                DeleteAction::make(),
            ])
            ->bulkActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
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
            'index' => Pages\ListProjectCategories::route('/'),
            'create' => Pages\CreateProjectCategory::route('/create'),
            'edit' => Pages\EditProjectCategory::route('/{record}/edit'),
        ];
    }
}
