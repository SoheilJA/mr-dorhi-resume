@use('App\Support\Site')
<header id="site-header">
    <div class="container-x">
        <div class="header-inner">
            <a class="brand" href="#hero" aria-label="{{ __('site.home_aria', ['name' => Site::text('general.brand_name')]) }}">
                <span>{{ Site::text('general.brand_name') }}</span><span class="brand-dot">.</span>
            </a>

            <nav class="nav-links" aria-label="{{ __('site.main_nav') }}">
                <a class="nav-link" href="#about">{{ Site::text('general.nav_about') }}</a>
                <a class="nav-link" href="#expertise">{{ Site::text('general.nav_expertise') }}</a>
                <a class="nav-link" href="#journey">{{ Site::text('general.nav_journey') }}</a>
                <a class="nav-link" href="#collaborations">{{ Site::text('general.nav_collab') }}</a>
                <a class="nav-link" href="#insights">{{ Site::text('general.nav_insights') }}</a>
            </nav>

            <div class="header-actions">
                <div class="lang-switch" role="group" aria-label="{{ __('site.lang_switch') }}">
                    @include('partials.lang-switch')
                </div>
                <a class="btn btn-primary header-cta" href="{{ Site::get('general.booking_url') }}" target="_blank" rel="noopener">{{ Site::text('general.nav_cta') }}</a>
                <button class="menu-toggle" id="menu-toggle" type="button" aria-expanded="false" aria-controls="mobile-menu"
                        aria-label="{{ __('site.toggle_menu') }}" data-label-open="{{ __('site.open_menu') }}" data-label-close="{{ __('site.close_menu') }}">
                    <span class="bar"></span><span class="bar"></span><span class="bar"></span>
                </button>
            </div>
        </div>
    </div>
</header>

<div id="mobile-menu" aria-label="{{ __('site.mobile_menu') }}">
    <nav>
        <a class="mobile-link" href="#about"><span>{{ Site::text('general.nav_about') }}</span><span class="m-index">{{ Site::number('01') }}</span></a>
        <a class="mobile-link" href="#expertise"><span>{{ Site::text('general.nav_expertise') }}</span><span class="m-index">{{ Site::number('02') }}</span></a>
        <a class="mobile-link" href="#journey"><span>{{ Site::text('general.nav_journey') }}</span><span class="m-index">{{ Site::number('03') }}</span></a>
        <a class="mobile-link" href="#collaborations"><span>{{ Site::text('general.nav_collab') }}</span><span class="m-index">{{ Site::number('04') }}</span></a>
        <a class="mobile-link" href="#insights"><span>{{ Site::text('general.nav_insights') }}</span><span class="m-index">{{ Site::number('05') }}</span></a>
        <a class="mobile-link" href="#contact"><span>{{ Site::text('general.nav_contact') }}</span><span class="m-index">{{ Site::number('06') }}</span></a>
    </nav>
    <div class="mobile-menu-foot">
        <div class="lang-switch">
            @include('partials.lang-switch')
        </div>
        <a class="btn btn-primary" href="{{ Site::get('general.booking_url') }}" target="_blank" rel="noopener">{{ Site::text('general.nav_cta') }}</a>
    </div>
</div>
