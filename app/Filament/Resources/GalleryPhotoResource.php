<?php

namespace App\Filament\Resources;

use App\Filament\Resources\GalleryPhotoResource\Pages;
use App\Filament\Resources\GalleryPhotoResource\RelationManagers;
use App\Models\GalleryPhoto;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class GalleryPhotoResource extends Resource
{
    protected static ?string $model = GalleryPhoto::class;
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $label='Фотографии галереи';

    protected static ?string $pluralModelLabel='Фотографии галереи';

    protected static ?string $navigationGroup = 'Структура сайта';


    protected static ?string $navigationLabel = 'Фотографии галереи';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Group::make()->schema([
                    Forms\Components\Section::make('Загрузите фотографию')->schema([
                        Forms\Components\MarkdownEditor::make('review')
                            ->label('Описание')
                            ->required()
                            ->Live(true)
                            ->unique(),
                    ])
                ]),
                Forms\Components\Group::make()->schema([
                    Forms\Components\Section::make('Загрузите фотографию')->schema([
                        Forms\Components\FileUpload::make('location')
                            ->label('Фото')
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
                Tables\Columns\ImageColumn::make('location')
                    ->label('Фотография'),
                Tables\Columns\TextColumn::make('review')
                    ->label('Коментарий'),
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
            'index' => Pages\ListGalleryPhotos::route('/'),
            'create' => Pages\CreateGalleryPhoto::route('/create'),
            'edit' => Pages\EditGalleryPhoto::route('/{record}/edit'),
        ];
    }
}
