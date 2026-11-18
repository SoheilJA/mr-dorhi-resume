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
    /**
     * آپلود تصویر با تبدیل خودکار به WebP.
     * اگر $height داده شود، تصویر به همان نسبت برش می‌خورد؛ وگرنه فقط کوچک می‌شود.
     */
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
            ->saveUploadedFileUsing(function (TemporaryUploadedFile $file) use ($directory, $width, $height): string {
                $image = (new ImageManager(new Driver()))->read($file->getRealPath());

                $height !== null
                    ? $image->cover($width, $height)
                    : $image->scaleDown(width: $width);

                $path = $directory . '/' . Str::uuid() . '.webp';

                Storage::disk('uploads')->put($path, (string)$image->toWebp(quality: 82));

                return $path;
            });
    }
}
