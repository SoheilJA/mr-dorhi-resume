<?php

namespace App\Http\Controllers;

use App\Models\SiteSetting;
use Illuminate\Support\Carbon;

class SeoController extends Controller
{
    public function sitemap()
    {
        $last = SiteSetting::max('updated_at');

        return response()
            ->view('sitemap', ['lastmod' => $last ? Carbon::parse($last)->toAtomString() : null])
            ->header('Content-Type', 'application/xml; charset=UTF-8');
    }

    public function robots()
    {
        $body = "User-agent: *\nDisallow: /admin\n\nSitemap: " . url('/sitemap.xml') . "\n";

        return response($body, 200, ['Content-Type' => 'text/plain; charset=UTF-8']);
    }
}
