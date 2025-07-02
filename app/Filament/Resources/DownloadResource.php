<?php

namespace App\Filament\Resources;

use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\TextColumn;

use App\Filament\Resources\DownloadResource\Pages;
use App\Filament\Resources\DownloadResource\RelationManagers;
use App\Models\Download;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class DownloadResource extends Resource
{
    protected static ?string $model = Download::class;

    protected static ?string $navigationIcon = 'heroicon-o-arrow-down-tray';
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
                Textarea::make('description')->nullable()->rows(4),
                FileUpload::make('file_path')
                ->label('Upload File')
                ->disk('public')
                ->directory('downloads')
                ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')->sortable()->searchable(),
                //TextColumn::make('file_path')->label('File')->wrap(),
                TextColumn::make('file_path')
                    ->label('Download')
                    ->url(fn ($record) => asset('storage/' . $record->file_path))
                    ->openUrlInNewTab()
                    ->formatStateUsing(fn ($state) => 'Download File')
                    ->icon('heroicon-o-arrow-down-tray'),
                TextColumn::make('created_at')->label('Uploaded')->dateTime(),
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

            ->defaultSort('created_at', 'desc');
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
            'index' => Pages\ListDownloads::route('/'),
            'create' => Pages\CreateDownload::route('/create'),
            'edit' => Pages\EditDownload::route('/{record}/edit'),
        ];
    }
}
