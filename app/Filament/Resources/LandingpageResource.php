<?php

namespace App\Filament\Resources;

use App\Filament\Resources\LandingpageResource\Pages;
use App\Filament\Resources\LandingpageResource\RelationManagers;
use App\Models\Landingpage;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Tabs;
use Filament\Forms\Components\Tabs\Tab;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;

use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Log;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;

class LandingpageResource extends Resource
{
    protected static ?string $model = Landingpage::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Tabs::make('Tabs')
                ->tabs([
                    Tab::make('Website Details')
                        ->schema([
                            TextInput::make('website_title')->label('Website Title'),
                            FileUpload::make('website_logo')
                                ->disk('public')
                                ->directory('landingpage/website_logo')
                                ->getUploadedFileNameForStorageUsing(
                                    fn(TemporaryUploadedFile $file): string => 'logo_' . rand(1, 1000) . '_' . date('His_dmY') . '.' . pathinfo($file->getClientOriginalName(), PATHINFO_EXTENSION)
                                )
                                ->openable()
                                ->downloadable()
                                // ->image('jpg')
                                ->imageEditor()
                                ->imageEditorAspectRatios([
                                    '16:9',
                                    '4:3',
                                    '1:1',
                                ]),
                            Textarea::make('deskripsi')->label('Deskripsi')
                                ->rows(15),
                        ]),
                    Tab::make('Home Section')
                        ->schema([
                            Repeater::make('home_section')
                                ->schema([
                                    TextInput::make('title')->label('Judul Content'),
                                    Textarea::make('content')->label('Isi Content'),
                                    FileUpload::make('image')
                                        ->disk('public')
                                        ->directory('landingpage/home_section')
                                        ->getUploadedFileNameForStorageUsing(
                                            fn(TemporaryUploadedFile $file): string => 'avatar_' . rand(1, 1000) . '_' . date('His_dmY') . '.' . pathinfo($file->getClientOriginalName(), PATHINFO_EXTENSION)
                                        )
                                        ->openable()
                                        ->downloadable()
                                        // ->image('jpg')
                                        ->imageEditor()
                                        ->imageEditorAspectRatios([
                                            '16:9',
                                            '4:3',
                                            '1:1',
                                        ])
                                        ->columnSpan(2),
                                ])
                                ->columns(2),
                        ]),
                    Tab::make('Section 2')
                        ->schema([
                            Repeater::make('section_2')
                                ->schema([
                                    FileUpload::make('avatar')
                                        ->disk('public')
                                        ->directory('landingpage/section_2')
                                        ->getUploadedFileNameForStorageUsing(
                                            fn(TemporaryUploadedFile $file): string => 'avatar_' . rand(1, 1000) . '_' . date('His_dmY') . '.' . pathinfo($file->getClientOriginalName(), PATHINFO_EXTENSION)
                                        )
                                        ->openable()
                                        ->downloadable()
                                        // ->image('jpg')
                                        ->imageEditor()
                                        ->imageEditorAspectRatios([
                                            '16:9',
                                            '4:3',
                                            '1:1',
                                        ])
                                        ->columnSpan(2),
                                ])
                                ->columns(2),
                        ]),
                    Tab::make('Section About Us')
                        ->schema([
                            TextInput::make('sub_title')->label('Sub Title Content'),
                            TextInput::make('title')->label('Content Title'),
                            Textarea::make('content')->label('Content'),
                        ]),
                    Tab::make('Section Promotion')
                        ->schema([
                            Repeater::make('section_promotion')
                                ->schema([
                                    TextInput::make('sub_title')->label('Sub Title Content'),
                                    TextInput::make('title')->label('Content Title'),
                                    FileUpload::make('background')
                                        ->disk('public')
                                        ->directory('landingpage/section_2')
                                        ->getUploadedFileNameForStorageUsing(
                                            fn(TemporaryUploadedFile $file): string => 'avatar_' . rand(1, 1000) . '_' . date('His_dmY') . '.' . pathinfo($file->getClientOriginalName(), PATHINFO_EXTENSION)
                                        )
                                        ->openable()
                                        ->downloadable()
                                        // ->image('jpg')
                                        ->imageEditor()
                                        ->imageEditorAspectRatios([
                                            '16:9',
                                            '4:3',
                                            '1:1',
                                        ])
                                        ->columnSpan(2),
                                ])
                                ->columns(2),
                        ]),
                    Tab::make('Section Review')
                        ->schema([
                            Repeater::make('section_review')
                                ->schema([
                                    TextInput::make('name')->label('Name Customer'),
                                    Textarea::make('review')->label('Review'),
                                    FileUpload::make('avatar')
                                        ->disk('public')
                                        ->directory('landingpage/section_2')
                                        ->getUploadedFileNameForStorageUsing(
                                            fn(TemporaryUploadedFile $file): string => 'avatar_' . rand(1, 1000) . '_' . date('His_dmY') . '.' . pathinfo($file->getClientOriginalName(), PATHINFO_EXTENSION)
                                        )
                                        ->openable()
                                        ->downloadable()
                                        // ->image('jpg')
                                        ->imageEditor()
                                        ->imageEditorAspectRatios([
                                            '16:9',
                                            '4:3',
                                            '1:1',
                                        ])
                                        ->columnSpan(2),
                                ])
                                ->columns(2),
                        ]),
                ])->columnSpanFull()
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
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
            'index' => Pages\ListLandingpages::route('/'),
            'create' => Pages\CreateLandingpage::route('/create'),
            'edit' => Pages\EditLandingpage::route('/{record}/edit'),
        ];
    }
}
