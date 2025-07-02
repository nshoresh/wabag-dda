<?php

namespace App\Filament\Resources;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\DateTimePicker;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\DateTimeColumn;

use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;

use App\Filament\Resources\NewsResource\Pages;
use App\Filament\Resources\NewsResource\RelationManagers;
use App\Models\News;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class NewsResource extends Resource
{
    protected static ?string $model = News::class;

    protected static ?string $navigationIcon = 'heroicon-o-newspaper';
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
                TextInput::make('title')->required()->maxLength(255),
                Forms\Components\RichEditor::make('content')
                    ->label('News Content')
                    ->required()
                    ->toolbarButtons([
                        'bold',
                        'italic',
                        'underline',
                        'strike',        //WYSIWYG editor
                        'link',
                        'bulletList',
                        'orderedList',
                        'blockquote',
                        'codeBlock',
                    ])
                    ->columnSpanFull(),

                DateTimePicker::make('published_at')->label('Published At')->nullable(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')->sortable()->searchable(),
                TextColumn::make('published_at')->dateTime()->sortable(),
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

            ->defaultSort('published_at', 'desc');
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
            'index' => Pages\ListNews::route('/'),
            'create' => Pages\CreateNews::route('/create'),
            'edit' => Pages\EditNews::route('/{record}/edit'),
        ];
    }
}
