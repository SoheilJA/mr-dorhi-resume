@use('App\Support\Site')

<!-- ================= 01 · Overview ================= -->
<section class="section section-alt" id="about" aria-labelledby="about-title">
    <div class="container-x">
        <div class="section-head">
            <p class="section-index">{{ Site::number('01') }} — {{ Site::text('about.index_label') }}</p>
            <h2 class="section-title" id="about-title">{{ Site::text('about.title') }}</h2>
        </div>

        <div class="about-grid">
            <div class="about-copy">
                <p class="lead">{{ Site::text('about.lead') }}</p>
                <p>{{ Site::text('about.p2') }}</p>
                <p>{{ Site::text('about.p3') }}</p>
            </div>

            <aside class="about-aside">
                <div class="stat-card">
                    <span class="stat-number" data-count="{{ Site::get('about.stat_number', 20) }}"
                          data-suffix="{{ Site::get('about.stat_suffix', '') }}">{{ Site::number(Site::get('about.stat_number', 20)) }}{{ Site::get('about.stat_suffix', '') }}</span>
                    <span class="stat-label">{{ Site::text('about.stat_label') }}</span>
                </div>
                <div class="principles">
                    @foreach (Site::get('about.principles', []) as $principle)
                        <div class="principle">
                            <h3 class="principle-head"><span
                                    class="p-mark">{{ Site::number(sprintf('%02d', $loop->iteration)) }}</span><span>{{ Site::localize($principle['title'] ?? null) }}</span>
                            </h3>
                            <p class="principle-desc">{{ Site::localize($principle['desc'] ?? null) }}</p>
                        </div>
                    @endforeach
                </div>
            </aside>
        </div>
        <div class="photo-strip">
            @foreach (array_values((array) Site::get('about.photos', [])) as $photo)
                @continue(empty($photo['image']))
                <figure class="photo-item">
                    <img src="{{ Site::url($photo['image']) }}" alt="{{ Site::localize($photo['alt'] ?? null) }}"
                         width="1000" height="750" loading="lazy" decoding="async"/>
                </figure>
            @endforeach
        </div>
        <p class="strip-caption">{{ Site::text('about.strip_caption') }}</p>
    </div>
</section>
