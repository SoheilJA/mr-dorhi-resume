<?php

namespace App\Filament\Content;

use App\Support\Bilingual;
use Filament\Schemas\Components\Tabs\Tab;
use Filament\Support\Icons\Heroicon;
use App\Support\ImageUpload;

class HeroTab
{
    public static function make(): Tab
    {
        return Tab::make('صفحه اول')
            ->icon(Heroicon::OutlinedHome)
            ->schema([
                ImageUpload::make('hero.portrait', 'عکس پرتره (نسبت ۴ به ۵ پیشنهاد می‌شود)', 'hero', 880, 1108),
                Bilingual::text('hero.eyebrow', 'عنوان کوچک بالای تیتر'),
                Bilingual::text('hero.title_line1', 'تیتر، خط ۱'),
                Bilingual::text('hero.title_line2_pre', 'تیتر، خط ۲ (بخش عادی)'),
                Bilingual::text('hero.title_line2_accent', 'تیتر، خط ۲ (بخش رنگی)'),
                Bilingual::text('hero.title_line3', 'تیتر، خط ۳'),
                Bilingual::textarea('hero.desc', 'توضیح زیر تیتر'),
                Bilingual::text('hero.cta_primary', 'دکمه‌ی اصلی'),
                Bilingual::text('hero.cta_secondary', 'لینک دوم'),
                Bilingual::text('hero.meta_exp_label', 'برچسب تجربه'),
                Bilingual::text('hero.meta_exp_value', 'مقدار تجربه'),
                Bilingual::text('hero.meta_loc_label', 'برچسب محل جلسات'),
                Bilingual::text('hero.meta_loc_value', 'مقدار محل جلسات'),
                Bilingual::text('hero.portrait_alt', 'متن جایگزین عکس'),
                Bilingual::text('hero.portrait_caption', 'زیرنویس عکس'),
                Bilingual::text('hero.scroll', 'متن «اسکرول کنید»'),
            ]);
    }
}
