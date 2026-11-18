<?php

namespace App\Filament\Content;

use App\Support\Bilingual;
use Filament\Schemas\Components\Tabs\Tab;
use Filament\Support\Icons\Heroicon;

class ContactTab
{
    public static function make(): Tab
    {
        return Tab::make('تماس')
            ->icon(Heroicon::OutlinedPhone)
            ->schema([
                Bilingual::text('contact.index_label', 'برچسب بخش'),
                Bilingual::text('contact.title', 'عنوان بخش'),
                Bilingual::textarea('contact.desc', 'توضیح', 3),
                Bilingual::text('contact.phone_label', 'برچسب تلفن'),
                Bilingual::text('contact.email_label', 'برچسب ایمیل'),
                Bilingual::text('contact.loc_label', 'برچسب آدرس'),
                Bilingual::text('contact.loc_value', 'آدرس'),
                Bilingual::text('contact.ig_label', 'برچسب اینستاگرام'),
            ]);
    }
}
