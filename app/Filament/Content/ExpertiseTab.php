<?php

namespace App\Filament\Content;

use App\Support\Bilingual;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Select;
use Filament\Schemas\Components\Tabs\Tab;
use Filament\Support\Icons\Heroicon;

class ExpertiseTab
{
    public static function make(): Tab
    {
        return Tab::make('تخصص‌ها')
            ->icon(Heroicon::OutlinedSparkles)
            ->schema([
                Bilingual::text('expertise.index_label', 'برچسب بخش'),
                Bilingual::text('expertise.title', 'عنوان بخش'),
                Bilingual::textarea('expertise.sub', 'زیرعنوان', 2),
                Repeater::make('expertise.items')
                    ->label('کارت‌های تخصص')
                    ->schema([
                        Select::make('icon')
                            ->label('آیکن')
                            ->options([
                                'structure' => 'ساختار',
                                'growth' => 'رشد',
                                'compass' => 'مسیر',
                                'speed' => 'بهره‌وری',
                                'network' => 'شبکه / سیستم',
                                'target' => 'هدف',
                            ])
                            ->default('structure')
                            ->required(),
                        Bilingual::text('title', 'عنوان'),
                        Bilingual::textarea('desc', 'توضیح', 3),
                    ])
                    ->itemLabel(fn(array $state): ?string => $state['title']['fa'] ?? null)
                    ->reorderable()
                    ->collapsible()
                    ->addActionLabel('افزودن کارت'),
            ]);
    }
}
