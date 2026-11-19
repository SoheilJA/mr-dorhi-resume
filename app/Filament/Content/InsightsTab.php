<?php

namespace App\Filament\Content;

use App\Support\Bilingual;
use App\Support\ImageUpload;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\ToggleButtons;
use Filament\Schemas\Components\Tabs\Tab;
use Filament\Schemas\Components\Utilities\Get;
use Filament\Support\Icons\Heroicon;

class InsightsTab
{
    public static function make(): Tab
    {
        return Tab::make('دیدگاه‌ها')
            ->icon(Heroicon::OutlinedNewspaper)
            ->schema([
                Bilingual::text('insights.index_label', 'برچسب بخش'),
                Bilingual::text('insights.title', 'عنوان بخش'),
                Bilingual::textarea('insights.sub', 'زیرعنوان', 2),
                Bilingual::text('insights.tag_video', 'برچسب ویدئو'),
                Bilingual::text('insights.tag_article', 'برچسب مقاله'),
                Bilingual::text('insights.watch', 'متن «مشاهده»'),
                Bilingual::text('insights.read', 'متن «خواندن»'),
                Bilingual::text('insights.view_all', 'متن «مشاهده همه»'),
                TextInput::make('insights.view_all_url')
                    ->label('آدرس «مشاهده همه»')
                    ->url()
                    ->extraInputAttributes(['dir' => 'ltr']),
                Repeater::make('insights.items')
                    ->label('مطالب (اولین مورد، کارت بزرگ است)')
                    ->schema([
                        Select::make('type')
                            ->label('نوع')
                            ->options(['video' => 'ویدئو', 'article' => 'مقاله'])
                            ->default('video')
                            ->live()
                            ->required(),
                        ImageUpload::make('cover', 'تصویر کاور (نسبت ۱۶ به ۱۰)', 'insights', 900, 563)->required(),
                        Bilingual::text('title', 'عنوان'),
                        Bilingual::textarea('excerpt', 'خلاصه (برای مقاله)', 2, false)
                            ->visible(fn(Get $get): bool => $get('type') === 'article'),
                        ToggleButtons::make('video_source')
                            ->label('منبع ویدئو')
                            ->options(['link' => 'لینک', 'upload' => 'بارگذاری روی سرور'])
                            ->default('link')
                            ->inline()
                            ->live()
                            ->visible(fn(Get $get): bool => $get('type') === 'video'),
                        TextInput::make('url')
                            ->label('لینک (صفحه‌ی مقاله یا ویدئو)')
                            ->url()
                            ->extraInputAttributes(['dir' => 'ltr'])
                            ->required(fn(Get $get): bool => $get('type') === 'article' || $get('video_source') === 'link')
                            ->visible(fn(Get $get): bool => $get('type') === 'article' || $get('video_source') === 'link'),
                        FileUpload::make('video_file')
                            ->label('فایل ویدئو (MP4 یا WebM، حداکثر ۵۰ مگابایت)')
                            ->disk('uploads')
                            ->directory('insights/videos')
                            ->visibility('public')
                            ->acceptedFileTypes(['video/mp4', 'video/webm'])
                            ->maxSize(51200)
                            ->required(fn(Get $get): bool => $get('type') === 'video' && $get('video_source') === 'upload')
                            ->visible(fn(Get $get): bool => $get('type') === 'video' && $get('video_source') === 'upload'),
                    ])
                    ->itemLabel(fn(array $state): ?string => $state['title']['fa'] ?? null)
                    ->reorderable()
                    ->collapsible()
                    ->collapsed()
                    ->addActionLabel('افزودن مطلب'),
            ]);
    }
}
