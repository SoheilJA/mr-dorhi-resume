<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;

class SiteSetting extends Model
{
    protected $fillable = ['group', 'data'];

    protected function casts(): array
    {
        return ['data' => 'array'];
    }

    protected static function booted(): void
    {
        // با هر ذخیره یا حذف، کش همان بخش پاک می‌شود
        static::saved(fn (SiteSetting $s) => Cache::forget('site.' . $s->group));
        static::deleted(fn (SiteSetting $s) => Cache::forget('site.' . $s->group));
    }
}
