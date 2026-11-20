<?php

namespace App\Filament\Content;

use App\Support\Bilingual;
use App\Support\ImageUpload;
use Filament\Forms\Components\TagsInput;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Tabs\Tab;
use Filament\Support\Icons\Heroicon;

class SeoTab
{
    public static function make(): Tab
    {
        return Tab::make('سئو')
            ->icon(Heroicon::OutlinedMagnifyingGlass)
            ->schema([
                Bilingual::text('seo.site_name', 'نام سایت (برای اشتراک‌گذاری)'),
                Bilingual::text('seo.title', 'عنوان صفحه (Title؛ ترجیحاً زیر ۶۰ کاراکتر)'),
                Bilingual::textarea('seo.description', 'توضیح صفحه (Description؛ ۱۲۰ تا ۱۶۰ کاراکتر)', 3),
                ImageUpload::make('seo.og_image', 'تصویر اشتراک‌گذاری (۱۲۰۰×۶۳۰؛ اگر خالی باشد عکس پرتره)', 'seo', 1200, 630),
                Bilingual::text('seo.job_title', 'عنوان شغلی (برای گوگل)'),
                Bilingual::text('seo.org_name', 'نام شرکت'),
                Bilingual::text('seo.city', 'شهر'),
                Bilingual::text('seo.region', 'استان'),
                Grid::make(2)->schema([
                    TagsInput::make('seo.knows_about.fa')->label('حوزه‌های تخصص (فارسی)'),
                    TagsInput::make('seo.knows_about.en')
                        ->label('حوزه‌های تخصص (English)')
                        ->extraInputAttributes(['dir' => 'ltr']),
                ]),
            ]);
    }
}
