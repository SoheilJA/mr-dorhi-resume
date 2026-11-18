<?php

namespace App\Filament\Content;

use App\Support\Bilingual;
use Filament\Forms\Components\Repeater;
use Filament\Schemas\Components\Tabs\Tab;
use Filament\Support\Icons\Heroicon;

class JourneyTab
{
    public static function make(): Tab
    {
        return Tab::make('مسیر حرفه‌ای')
            ->icon(Heroicon::OutlinedMapPin)
            ->schema([
                Bilingual::text('journey.index_label', 'برچسب بخش'),
                Bilingual::text('journey.title', 'عنوان بخش'),
                Bilingual::textarea('journey.sub', 'زیرعنوان', 2),
                Repeater::make('journey.phases')
                    ->label('مراحل مسیر')
                    ->schema([
                        Bilingual::text('tag', 'برچسب (سال یا عنوان کوتاه)'),
                        Bilingual::text('title', 'عنوان'),
                        Bilingual::textarea('desc', 'توضیح', 3),
                    ])
                    ->itemLabel(fn (array $state): ?string => $state['title']['fa'] ?? null)
                    ->reorderable()
                    ->collapsible()
                    ->addActionLabel('افزودن مرحله'),
            ]);
    }
}
