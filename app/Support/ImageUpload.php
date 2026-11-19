<?php

namespace App\Support;

use Filament\Forms\Components\FileUpload;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Intervention\Image\Drivers\Gd\Driver;
use Intervention\Image\ImageManager;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;

class ImageUpload
{
    public static function make(string $name, string $label, string $directory, int $width, ?int $height = null): FileUpload
    {
        return FileUpload::make($name)
            ->label($label)
            ->disk('uploads')
            ->directory($directory)
            ->visibility('public')
            ->image()
            ->acceptedFileTypes(['image/jpeg', 'image/png', 'image/webp'])
            ->maxSize(8192)
            ->saveUploadedFileUsing(
                fn (TemporaryUploadedFile $file): string => self::convert($file->getRealPath(), $directory, $width, $height)
            );
    }

    /** یک فایل تصویر را به WebP تبدیل و در دیسک uploads ذخیره می‌کند؛ مسیر نسبی را برمی‌گرداند */
    public static function convert(string $sourcePath, string $directory, int $width, ?int $height = null): string
    {
        $image = ImageManager::usingDriver(Driver::class)->decode($sourcePath);

        $height !== null
            ? $image->cover($width, $height)
            : $image->scaleDown(width: $width);

        $path = $directory . '/' . Str::uuid() . '.webp';

        Storage::disk('uploads')->put($path, (string) $image->encodeUsingFileExtension('webp', quality: 82));
        return $path;
    }
}
