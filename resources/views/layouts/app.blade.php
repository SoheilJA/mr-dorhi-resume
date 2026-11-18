<!doctype html>
<html lang="{{ app()->getLocale() }}" dir="{{ app()->getLocale() === 'fa' ? 'rtl' : 'ltr' }}">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <!-- ================= SEO ================= -->
    <title>علی درحی | مشاور و مدرس کسب‌وکار — مدیرعامل چابک‌سازان آرکا</title>
    <meta name="description"
          content="وب‌سایت رسمی علی درحی؛ مشاور و مدرس کسب‌وکار و مدیرعامل شرکت مشاوره سازمانی چابک‌سازان آرکا. ۲۰ سال تجربه اجرایی و عملیاتی در صنعت؛ مشاوره سازمانی، بازاریابی، فروش و مدیریت."/>
    <meta name="robots" content="index, follow"/>
    <meta name="author" content="Ali Dorhi"/>
    <link rel="canonical" href="{{ route('home', ['locale' => app()->getLocale()]) }}"/>
    <link rel="alternate" hreflang="fa" href="{{ route('home', ['locale' => 'fa']) }}"/>
    <link rel="alternate" hreflang="en" href="{{ route('home', ['locale' => 'en']) }}"/>
    <link rel="alternate" hreflang="x-default" href="{{ route('home', ['locale' => 'en']) }}"/>
    <meta name="theme-color" content="#F8F8F6"/>

    <!-- Open Graph -->
    <meta property="og:type" content="website"/>
    <meta property="og:site_name" content="Ali Dorhi | علی درحی"/>
    <meta property="og:title" content="علی درحی | مشاور و مدرس کسب‌وکار — مدیرعامل چابک‌سازان آرکا"/>
    <meta property="og:description"
          content="ساختار درست، مسیر رشد پایدار کسب‌وکار است. ۲۰ سال تجربه اجرایی و عملیاتی در صنعت؛ مشاوره سازمانی، بازاریابی، فروش و مدیریت."/>
    <meta property="og:url" content="https://dorhi.ir/"/>
    <meta property="og:image" content="https://dorhi.ir/images/portrait.jpg"/>
    <meta property="og:locale" content="fa_IR"/>
    <meta property="og:locale:alternate" content="en_US"/>
    <meta name="twitter:card" content="summary_large_image"/>
    <meta name="twitter:title" content="علی درحی | مشاور و مدرس کسب‌وکار"/>
    <meta name="twitter:description" content="ساختار درست، مسیر رشد پایدار کسب‌وکار است."/>
    <meta name="twitter:image" content="https://dorhi.ir/images/portrait.jpg"/>

    <!-- Favicon -->
    <link rel="icon" href="/favicon/favicon.ico" sizes="any"/>
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon/favicon-32.png"/>
    <link rel="icon" type="image/png" sizes="192x192" href="/favicon/icon-192.png"/>
    <link rel="apple-touch-icon" href="/favicon/apple-touch-icon.png"/>

    <!-- Fonts (self-hosted, document-relative URLs) -->
    <link rel="preload" href="/fonts/Vazirmatn-Variable.woff2" as="font" type="font/woff2" crossorigin/>
    <link rel="preload" href="/fonts/Inter-Latin-Variable.woff2" as="font" type="font/woff2" crossorigin/>
    @verbatim
        <style>
            @font-face {
                font-family: "Vazirmatn";
                src: url("/fonts/Vazirmatn-Variable.woff2") format("woff2-variations");
                font-weight: 100 900;
                font-style: normal;
                font-display: swap;
            }

            @font-face {
                font-family: "Inter";
                src: url("/fonts/Inter-Latin-Variable.woff2") format("woff2-variations");
                font-weight: 100 900;
                font-style: normal;
                font-display: swap;
            }
        </style>
    @endverbatim

    <!-- Hero portrait: first real image above the fold -->
    <link rel="preload" as="image" href="{{ \App\Support\Site::image('hero.portrait', '/images/portrait.webp') }}" fetchpriority="high" />
    @vite(['resources/css/app.css', 'resources/js/main.js'])
    <!-- Critical preloader styles (rest loads via bundle) -->
    @verbatim
        <style>
            #preloader {
                position: fixed;
                inset: 0;
                z-index: 300;
                background: #F8F8F6;
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
                gap: 1.4rem;
                font-family: "Vazirmatn", Tahoma, sans-serif;
                transition: opacity .55s ease, visibility .55s
            }

            #preloader.done {
                opacity: 0;
                visibility: hidden;
                pointer-events: none
            }

            .preloader-mark {
                font-size: 1.7rem;
                font-weight: 700;
                color: #172B45
            }

            .preloader-mark i {
                font-style: normal;
                color: #2300B2
            }

            .preloader-line {
                width: 148px;
                height: 2px;
                background: #E3E5E6;
                border-radius: 2px;
                overflow: hidden;
                position: relative
            }

            .preloader-fill {
                position: absolute;
                top: 0;
                bottom: 0;
                left: 0;
                width: 100%;
                background: #2300B2;
                transform: scaleX(0);
                transform-origin: left center
            }

            html[dir="rtl"] .preloader-fill {
                transform-origin: right center
            }

            .preloader-caption {
                font-size: .68rem;
                letter-spacing: .32em;
                color: #737A83;
                font-family: "Inter", "Vazirmatn", sans-serif;
                text-transform: uppercase
            }

            @media (prefers-reduced-motion: reduce) {
                #preloader {
                    transition: none
                }
            }
        </style>
    @endverbatim
    <noscript>
        @verbatim
            <style>
                #preloader {
                    display: none
                }
            </style>
        @endverbatim
    </noscript>

    <!-- Structured data: Person -->
    @verbatim
        <script type="application/ld+json">
            {
              "@context": "https://schema.org",
    "@type": "Person",
    "name": "علی درحی",
    "alternateName": "Ali Dorhi",
    "url": "https://dorhi.ir/",
    "image": "https://dorhi.ir/images/portrait.jpg",
    "jobTitle": "Business Consultant & Trainer",
    "description": "مشاور و مدرس کسب‌وکار؛ ۲۰ سال تجربه اجرایی و عملیاتی در صنعت و مدیرعامل شرکت مشاوره سازمانی چابک‌سازان آرکا.",
    "worksFor": {
      "@type": "Organization",
      "name": "چابک‌سازان آرکا",
      "alternateName": "Chabok Sazan Arka",
      "url": "https://dorhi.ir/"
    },
    "email": "mailto:ali.dorhi@gmail.com",
    "telephone": "+98-939-538-9820",
    "address": {
      "@type": "PostalAddress",
      "addressLocality": "Mashhad",
      "addressRegion": "Khorasan Razavi",
      "addressCountry": "IR"
    },
    "sameAs": ["https://www.instagram.com/alidorhi.ir"],
    "knowsAbout": [
      "Organizational Development",
      "Marketing Strategy",
      "Sales Management",
      "Business Management",
      "Productivity Improvement",
      "Systems Thinking"
    ]
  }
        </script>
    @endverbatim
</head>

<body>
<a class="skip-link" href="#main">{{ __('site.skip') }}</a>
<!-- ================= Preloader ================= -->
<div id="preloader" aria-hidden="true">
    <div class="preloader-mark">
        <span>{{ \App\Support\Site::text('general.brand_name') }}</span>
        <i>.</i></div>
    <div class="preloader-line">
        <div class="preloader-fill"></div>
    </div>
    <div class="preloader-caption">dorhi.ir</div>
</div>

@include('partials.header')

<main id="main">

    @yield('content')

</main>

@include('partials.footer')

</body>

</html>
