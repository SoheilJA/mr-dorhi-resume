@use('App\Support\Site')
@php
    $locale = app()->getLocale();
    $other = $locale === 'fa' ? 'en' : 'fa';
    $title = Site::text('seo.title');
    $description = Site::text('seo.description');
    $url = route('home', ['locale' => $locale]);
    $image = Site::url(Site::get('seo.og_image')) ?: Site::url(Site::get('hero.portrait'));
    $image = url($image ?: '/images/portrait.jpg');

    $schema = array_filter([
      '@context' => 'https://schema.org',
      '@type' => 'Person',
      'name' => Site::text('general.brand_name'),
      'alternateName' => data_get(Site::get('general.brand_name'), $other),
      'url' => $url,
      'image' => $image,
      'jobTitle' => Site::text('seo.job_title'),
      'description' => $description,
      'worksFor' => [
        '@type' => 'Organization',
        'name' => Site::text('seo.org_name'),
        'url' => $url,
      ],
      'email' => 'mailto:' . Site::get('general.email'),
      'telephone' => Site::get('general.phone'),
      'address' => [
        '@type' => 'PostalAddress',
        'addressLocality' => Site::text('seo.city'),
        'addressRegion' => Site::text('seo.region'),
        'addressCountry' => 'IR',
      ],
      'sameAs' => ['https://www.instagram.com/' . Site::get('general.instagram')],
      'knowsAbout' => array_values((array) data_get(Site::get('seo.knows_about'), $locale, [])),
    ]);
@endphp
<title>{{ $title }}</title>
<meta name="description" content="{{ $description }}"/>
<meta name="robots" content="index, follow, max-image-preview:large"/>
<meta name="author" content="{{ Site::text('general.brand_name') }}"/>
<link rel="canonical" href="{{ $url }}"/>
<link rel="alternate" hreflang="fa" href="{{ route('home', ['locale' => 'fa']) }}"/>
<link rel="alternate" hreflang="en" href="{{ route('home', ['locale' => 'en']) }}"/>
<link rel="alternate" hreflang="x-default" href="{{ route('home', ['locale' => 'en']) }}"/>
<meta name="theme-color" content="#F8F8F6"/>

<meta property="og:type" content="website"/>
<meta property="og:site_name" content="{{ Site::text('seo.site_name') }}"/>
<meta property="og:title" content="{{ $title }}"/>
<meta property="og:description" content="{{ $description }}"/>
<meta property="og:url" content="{{ $url }}"/>
<meta property="og:image" content="{{ $image }}"/>
<meta property="og:locale" content="{{ $locale === 'fa' ? 'fa_IR' : 'en_US' }}"/>
<meta property="og:locale:alternate" content="{{ $locale === 'fa' ? 'en_US' : 'fa_IR' }}"/>
<meta name="twitter:card" content="summary_large_image"/>
<meta name="twitter:title" content="{{ $title }}"/>
<meta name="twitter:description" content="{{ $description }}"/>
<meta name="twitter:image" content="{{ $image }}"/>

<script
    type="application/ld+json">{!! json_encode($schema, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_HEX_TAG) !!}</script>
