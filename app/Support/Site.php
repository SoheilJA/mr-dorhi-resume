<?php

namespace App\Support;

use App\Models\SiteSetting;
use Illuminate\Support\Facades\Cache;

class Site
{
    /** همه‌ی داده‌های یک بخش (مثلاً hero) به‌صورت آرایه */
    public static function group(string $group): array
    {
        return Cache::rememberForever('site.' . $group, function () use ($group) {
            return SiteSetting::where('group', $group)->first()?->data ?? [];
        });
    }

    /** یک مقدار خام با کلید نقطه‌ای، مثل hero.eyebrow */
    public static function get(string $key, mixed $default = null): mixed
    {
        [$group, $path] = array_pad(explode('.', $key, 2), 2, null);
        $data = self::group($group);

        return $path === null ? $data : data_get($data, $path, $default);
    }

    /** متن را به زبان فعلی صفحه برمی‌گرداند (اگر انگلیسی خالی بود، فارسی) */
    public static function text(string $key, string $default = ''): string
    {
        return self::localize(self::get($key), $default);
    }

    /** یک مقدار دوزبانه‌ی {fa, en} را به زبان فعلی تبدیل می‌کند */
    public static function localize(mixed $value, string $default = ''): string
    {
        if (!is_array($value)) {
            return $value === null ? $default : (string)$value;
        }

        $text = $value[app()->getLocale()] ?? null;

        if ($text === null || $text === '') {
            $text = $value['fa'] ?? $default;
        }

        return (string)$text;
    }

    /** اعداد را برای صفحه‌ی فارسی به رقم فارسی تبدیل می‌کند */
    public static function number(string|int $value): string
    {
        $value = (string)$value;

        if (app()->getLocale() !== 'fa') {
            return $value;
        }

        return strtr($value, [
            '0' => '۰', '1' => '۱', '2' => '۲', '3' => '۳', '4' => '۴',
            '5' => '۵', '6' => '۶', '7' => '۷', '8' => '۸', '9' => '۹',
        ]);
    }
}
