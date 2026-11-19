<?php

namespace App\Filament\Content;

use App\Support\Bilingual;
use App\Support\ImageUpload;
use Filament\Schemas\Components\Tabs\Tab;
use Filament\Support\Icons\Heroicon;

class CollabTab
{
    public static function make(): Tab
    {
        return Tab::make('همراهان')
            ->icon(Heroicon::OutlinedBuildingOffice2)
            ->schema([
                Bilingual::text('collab.index_label', 'برچسب بخش'),
                Bilingual::text('collab.title', 'عنوان بخش'),
                Bilingual::textarea('collab.sub', 'زیرعنوان', 2),
                Bilingual::text('collab.count_word', 'کلمه‌ی کنار تعداد (مثلاً «مجموعه»)'),
                Bilingual::text('collab.op_label', 'عنوان گروه اجرایی'),
                Bilingual::text('collab.op_logo_alt', 'alt لوگوهای گروه اجرایی'),
                ImageUpload::make('collab.op_logos', 'لوگوها — همراهی اجرایی و عملیاتی', 'logos', 256)
                    ->multiple()
                    ->reorderable()
                    ->panelLayout('grid')
                    ->maxFiles(30),
                Bilingual::text('collab.co_label', 'عنوان گروه مشاوره‌ای'),
                Bilingual::text('collab.co_logo_alt', 'alt لوگوهای گروه مشاوره‌ای'),
                ImageUpload::make('collab.co_logos', 'لوگوها — همراهی مشاوره‌ای', 'logos', 256)
                    ->multiple()
                    ->reorderable()
                    ->panelLayout('grid')
                    ->maxFiles(60),
            ]);
    }
}
