@use('App\Support\Site')
<section class="section" id="expertise" aria-labelledby="expertise-title">
    <div class="container-x">
        <div class="section-head">
            <p class="section-index">{{ Site::number('02') }} — {{ Site::text('expertise.index_label') }}</p>
            <h2 class="section-title" id="expertise-title">{{ Site::text('expertise.title') }}</h2>
            <p class="section-sub">{{ Site::text('expertise.sub') }}</p>
        </div>

        <div class="expertise-grid">
            @foreach (Site::get('expertise.items', []) as $item)
                <article class="exp-card">
                    <div class="exp-top">
            <span class="exp-icon" aria-hidden="true">
              @include('partials.exp-icon', ['icon' => $item['icon'] ?? 'structure'])
            </span>
                        <span class="exp-index">{{ Site::number(sprintf('%02d', $loop->iteration)) }}</span>
                    </div>
                    <h3 class="exp-title">{{ Site::localize($item['title'] ?? null) }}</h3>
                    <p class="exp-desc">{{ Site::localize($item['desc'] ?? null) }}</p>
                </article>
            @endforeach
        </div>
    </div>
</section>
