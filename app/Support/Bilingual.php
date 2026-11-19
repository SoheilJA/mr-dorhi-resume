<?php

namespace App\Support;

use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Grid;

class Bilingual
{
    public static function text(string $name, string $label, bool $required = true): Grid
    {
        return Grid::make(2)->schema([
            TextInput::make("{$name}.fa")
                ->label("{$label} (فارسی)")
                ->required($required)
                ->maxLength(255),
            TextInput::make("{$name}.en")
                ->label("{$label} (English)")
                ->extraInputAttributes(['dir' => 'ltr'])
                ->maxLength(255),
        ]);
    }

    public static function textarea(string $name, string $label, int $rows = 4, bool $required = true): Grid
    {
        return Grid::make(2)->schema([
            Textarea::make("{$name}.fa")
                ->label("{$label} (فارسی)")
                ->required($required)
                ->rows($rows),
            Textarea::make("{$name}.en")
                ->label("{$label} (English)")
                ->extraInputAttributes(['dir' => 'ltr'])
                ->rows($rows),
        ]);
    }
}
