<?php

namespace App\Filament\Content;

use App\Support\Bilingual;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Tabs\Tab;
use Filament\Support\Icons\Heroicon;

class AboutTab
{
    public static function make(): Tab
    {
        return Tab::make('درباره')
            ->icon(Heroicon::OutlinedUser)
            ->schema([
                Bilingual::text('about.index_label', 'برچسب بخش'),
                Bilingual::text('about.title', 'عنوان بخش'),
                Bilingual::textarea('about.lead', 'پاراگراف اصلی', 3),
                Bilingual::textarea('about.p2', 'پاراگراف دوم', 5),
                Bilingual::textarea('about.p3', 'پاراگراف سوم', 4),
                Grid::make(2)->schema([
                    TextInput::make('about.stat_number')
                        ->label('عدد آمار')
                        ->numeric()
                        ->required(),
                    TextInput::make('about.stat_suffix')
                        ->label('پسوند عدد (مثلاً +)')
                        ->maxLength(5),
                ]),
                Bilingual::text('about.stat_label', 'توضیح آمار'),
                Repeater::make('about.principles')
                    ->label('اصول سه‌گانه')
                    ->schema([
                        Bilingual::text('title', 'عنوان'),
                        Bilingual::textarea('desc', 'توضیح', 2),
                    ])
                    ->itemLabel(fn(array $state): ?string => $state['title']['fa'] ?? null)
                    ->reorderable()
                    ->collapsible()
                    ->addActionLabel('افزودن اصل'),
                Bilingual::text('about.strip_caption', 'زیرنویس نوار عکس‌ها'),
            ]);
    }
}
