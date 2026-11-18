@use('App\Support\Site')
<footer class="site-footer">
    <div class="container-x">
        <div class="footer-top">
            <div>
                <a class="brand" href="#hero" style="color:#fff">
                    <span>{{ Site::text('general.brand_name') }}</span><span class="brand-dot">.</span>
                </a>
                <p class="footer-brand-role">{{ Site::text('general.footer_role') }}</p>
            </div>

            <nav class="footer-nav" aria-label="{{ __('site.main_nav') }}">
                <a href="#about">{{ Site::text('general.nav_about') }}</a>
                <a href="#expertise">{{ Site::text('general.nav_expertise') }}</a>
                <a href="#journey">{{ Site::text('general.nav_journey') }}</a>
                <a href="#collaborations">{{ Site::text('general.nav_collab') }}</a>
                <a href="#insights">{{ Site::text('general.nav_insights') }}</a>
                <a href="#contact">{{ Site::text('general.nav_contact') }}</a>
            </nav>

            <div class="footer-social">
                <a class="social-btn" href="https://www.instagram.com/{{ Site::get('general.instagram') }}" target="_blank" rel="noopener" aria-label="{{ __('site.instagram') }}">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                        <rect x="2" y="2" width="20" height="20" rx="5" />
                        <circle cx="12" cy="12" r="4.5" />
                        <circle cx="17.5" cy="6.5" r="1" fill="currentColor" stroke="none" />
                    </svg>
                </a>
                <div class="lang-switch lang-switch--footer">
                    @include('partials.lang-switch')
                </div>
            </div>
        </div>

        <div class="footer-bottom">
            <p>{{ Site::text('general.footer_copyright') }}</p>
            <a class="fb-link" href="https://dorhi.ir/" target="_blank" rel="noopener">dorhi.ir</a>
        </div>
    </div>
</footer>
