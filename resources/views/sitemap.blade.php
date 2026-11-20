{!! '<?xml version="1.0" encoding="UTF-8"?>' !!}
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:xhtml="http://www.w3.org/1999/xhtml">
    @foreach (['fa', 'en'] as $locale)
        <url>
            <loc>{{ route('home', ['locale' => $locale]) }}</loc>
            @if ($lastmod)
                <lastmod>{{ $lastmod }}</lastmod>
            @endif
            <xhtml:link rel="alternate" hreflang="fa" href="{{ route('home', ['locale' => 'fa']) }}"/>
            <xhtml:link rel="alternate" hreflang="en" href="{{ route('home', ['locale' => 'en']) }}"/>
            <xhtml:link rel="alternate" hreflang="x-default" href="{{ route('home', ['locale' => 'en']) }}"/>
        </url>
    @endforeach
</urlset>
