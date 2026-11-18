@use('App\Support\Site')
<!-- ================= Hero ================= -->
<section class="hero" id="hero" aria-labelledby="hero-title">
    <div class="container-x" style="position:relative;height:100%">
        <div class="hero-hairlines" aria-hidden="true">
            <span style="left:0"></span><span style="left:25%"></span><span style="left:50%"></span><span
                style="left:75%"></span><span style="left:100%"></span>
        </div>

        <div class="hero-grid">
            <div class="hero-copy">
                <p class="eyebrow">{{ Site::text('hero.eyebrow') }}</p>
                <h1 class="hero-title" id="hero-title">
                    <span class="line-mask"><span class="line-inner">{{ Site::text('hero.title_line1') }}</span></span>
                    <span class="line-mask"><span
                            class="line-inner"><span>{{ Site::text('hero.title_line2_pre') }}</span> <span
                                class="accent">{{ Site::text('hero.title_line2_accent') }}</span></span></span>
                    <span class="line-mask"><span class="line-inner">{{ Site::text('hero.title_line3') }}</span></span>
                </h1>
                <p class="hero-desc">{{ Site::text('hero.desc') }}</p>

                <div class="hero-actions">
                    <a class="btn btn-primary" href=" {{ Site::get("general.booking_url") }} " target="_blank"
                       rel="noopener">{{ Site::text('hero.cta_primary') }}</a>
                    <a class="link-arrow" href="#journey">
                        <span>{{ Site::text('hero.cta_secondary') }}</span>
                        <svg class="flip-rtl" width="16" height="16" viewBox="0 0 24 24" fill="none"
                             stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"
                             aria-hidden="true">
                            <path d="M5 12h14M13 6l6 6-6 6"/>
                        </svg>
                    </a>
                </div>

                <div class="hero-meta">
                    <div class="meta-item">
                        <span class="meta-label">{{ Site::text('hero.meta_exp_label') }}</span>
                        <span class="meta-value">{{ Site::text('hero.meta_exp_value') }}</span>
                    </div>
                    <div class="meta-item">
                        <span class="meta-label">{{ Site::text('hero.meta_loc_label') }}</span>
                        <span class="meta-value">{{ Site::text('hero.meta_loc_value') }}</span>
                    </div>
                </div>
            </div>

            <div class="hero-visual">
                <figure class="portrait-card">
                    <div class="portrait-frame" aria-hidden="true"></div>
                    <img src="/images/portrait.webp"
                         alt="{{ Site::text('hero.portrait_alt') }}"
                         width="880"
                         height="1108"
                         fetchpriority="high"
                         decoding="async"
                    />
                </figure>
                <p class="portrait-caption">
                    {{ Site::text("hero.portrait_caption") }}
                </p>
            </div>
        </div>
    </div>

    <div class="scroll-hint" aria-hidden="true">
        <span>
            {{ Site::text('hero.scroll') }}
        </span>
        <span class="wheel"></span>
    </div>
</section>
