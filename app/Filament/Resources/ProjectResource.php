<?php

namespace App\Filament\Resources;

use App\Models\ProjectCategory;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\BadgeColumn;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\DateColumn;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Grid;

use Filament\Resources\Pages\{CreateRecord, EditRecord, ListRecords};

use App\Filament\Resources\ProjectResource\Pages;
use App\Filament\Resources\ProjectResource\RelationManagers;
use App\Models\Project;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ProjectResource extends Resource
{
    protected static ?string $model = Project::class;

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
            Grid::make(2)->schema([
                TextInput::make('title')
                    ->required()
                    ->maxLength(255),

                Select::make('project_category_id')
                    ->label('Project Category')
                    ->relationship('category', 'name')
                    ->searchable()
                    ->required(),


                /*Select::make('project_category_id')
                    ->label('Project Type')
                    ->options(ProjectCategory::all()->pluck('name', 'id'))
                    ->searchable()
                    ->required(),*/

                TextInput::make('location')
                    ->label('Project Location')
                    ->maxLength(255),

                Select::make('status')
                    ->options([
                        'Planned' => 'Planned',
                        'Ongoing' => 'Ongoing',
                        'Completed' => 'Completed',
                    ])
                    ->required(),

                TextInput::make('budget')
                    ->numeric()
                    ->prefix('K')
                    ->label('Project Budget'),

                TextInput::make('contractor')
                    ->maxLength(255),

                DatePicker::make('start_date')
                    ->label('Start Date'),

                DatePicker::make('end_date')
                    ->label('End Date'),
            ]),

            Textarea::make('description')
                ->label('Project Description')
                ->rows(5)
                ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
        ->columns([
            TextColumn::make('title')->searchable()->sortable(),
            TextColumn::make('category.name')->label('Category')->sortable(),
            TextColumn::make('location')->sortable(),
            BadgeColumn::make('status')
                ->badge()
                ->color(fn (string $state): string => match ($state) {
                    'Planned' => 'gray',
                    'Ongoing' => 'warning',
                    'Completed' => 'success',
                    default => 'secondary',
                }),
            TextColumn::make('budget')->money('PGK', true),
            TextColumn::make('contractor')->label('Contractor'),
            TextColumn::make('start_date')->date(),
            TextColumn::make('end_date')->date(),
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
            'index' => Pages\ListProjects::route('/'),
            'create' => Pages\CreateProject::route('/create'),
            'edit' => Pages\EditProject::route('/{record}/edit'),
        ];
    }
}
