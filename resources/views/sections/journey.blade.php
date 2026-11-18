@use('App\Support\Site')
<section class="section section-alt" id="journey" aria-labelledby="journey-title">
    <div class="container-x">
        <div class="section-head">
            <p class="section-index">{{ Site::number('03') }} — {{ Site::text('journey.index_label') }}</p>
            <h2 class="section-title" id="journey-title">{{ Site::text('journey.title') }}</h2>
            <p class="section-sub">{{ Site::text('journey.sub') }}</p>
        </div>

        <div class="journey-wrap">
            <div class="journey-track">
                <div class="journey-line" aria-hidden="true"><span class="journey-progress"></span></div>

                @foreach (Site::get('journey.phases', []) as $phase)
                    <article class="phase">
                        <span class="phase-dot" aria-hidden="true"></span>
                        <p class="phase-year">{{ Site::localize($phase['tag'] ?? null) }}</p>
                        <h3 class="phase-title">{{ Site::localize($phase['title'] ?? null) }}</h3>
                        <p class="phase-desc">{{ Site::localize($phase['desc'] ?? null) }}</p>
                    </article>
                @endforeach
            </div>
        </div>
    </div>
</section>
