<!doctype html>
<html lang="{{ app()->getLocale() }}" dir="{{ app()->getLocale() === 'fa' ? 'rtl' : 'ltr' }}">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <!-- ================= SEO ================= -->
    @include('partials.seo')
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
