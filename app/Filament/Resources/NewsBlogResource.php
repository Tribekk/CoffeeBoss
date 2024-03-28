<?php

namespace App\Filament\Resources;

use App\Filament\Resources\NewsBlogResource\Pages;
use App\Filament\Resources\NewsBlogResource\RelationManagers;
use App\Models\NewsBlog;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class NewsBlogResource extends Resource
{

    protected static ?string $pluralModelLabel='Новости';

    protected static ?string $navigationGroup = 'Структура сайта';

    protected static ?string $model = NewsBlog::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Group::make()->schema([
                    Forms\Components\Section::make('Данные поста')->schema([
                        Forms\Components\TextInput::make('title')
                        ->label('Заголовок')
                        ->required()
                        ->unique(),
                        Forms\Components\MarkdownEditor::make('description')
                            ->label('Описание')
                            ->required()
                            ->Live(true)
                            ->unique(),
                    ])
                ]),
                Forms\Components\Group::make()->schema([
                    Forms\Components\Section::make('Загрузите фотографию')->schema([
                        Forms\Components\FileUpload::make('header_photo')
                            ->label('Главное фото')
                            ->required()
                            ->preserveFilenames()
                            ->image()
                            ->imageEditor()
                    ])
                ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('header_photo')
                    ->label('Фотография'),
                Tables\Columns\TextColumn::make('title')
                    ->label('Заголовок'),
                Tables\Columns\TextColumn::make('description')
                    ->label('Описание')
                    ->words(5),
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Созданно')
                    ->date()
                    ->sortable()
                    ->toggleable(),
                Tables\Columns\TextColumn::make('updated_at')
                    ->label('Обновленно')
                    ->date()
                    ->sortable()
                    ->toggleable()
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
            'index' => Pages\ListNewsBlogs::route('/'),
            'create' => Pages\CreateNewsBlog::route('/create'),
            'edit' => Pages\EditNewsBlog::route('/{record}/edit'),
        ];
    }
}
