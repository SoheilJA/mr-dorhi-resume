<?php


namespace App\Filament\Content;

use App\Support\Bilingual;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Tabs\Tab;
use Filament\Support\Icons\Heroicon;

class GeneralTab
{
    public static function make(): Tab
    {
        return Tab::make('عمومی و منو')
            ->icon(Heroicon::OutlinedCog6Tooth)
            ->schema([
                Bilingual::text('general.brand_name', 'نام برند (هدر و فوتر)'),
                Bilingual::text('general.nav_about', 'منو: درباره'),
                Bilingual::text('general.nav_expertise', 'منو: تخصص‌ها'),
                Bilingual::text('general.nav_journey', 'منو: مسیر حرفه‌ای'),
                Bilingual::text('general.nav_collab', 'منو: همراهان'),
                Bilingual::text('general.nav_insights', 'منو: دیدگاه‌ها'),
                Bilingual::text('general.nav_contact', 'منو: تماس'),
                Bilingual::text('general.nav_cta', 'دکمه‌ی رزرو مشاوره'),
                TextInput::make('general.booking_url')
                    ->label('لینک دکمه‌ی رزرو مشاوره')
                    ->url()
                    ->required()
                    ->extraInputAttributes(['dir' => 'ltr']),
                Grid::make(3)->schema([
                    TextInput::make('general.phone')
                        ->label('تلفن')
                        ->required()
                        ->extraInputAttributes(['dir' => 'ltr']),
                    TextInput::make('general.email')
                        ->label('ایمیل')
                        ->email()
                        ->required()
                        ->extraInputAttributes(['dir' => 'ltr']),
                    TextInput::make('general.instagram')
                        ->label('آیدی اینستاگرام')
                        ->prefix('@')
                        ->required()
                        ->extraInputAttributes(['dir' => 'ltr']),
                ]),
                Bilingual::text('general.footer_role', 'فوتر: عنوان شغلی'),
                Bilingual::text('general.footer_copyright', 'فوتر: متن کپی‌رایت'),
            ]);
    }
}
