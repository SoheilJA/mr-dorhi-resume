@use('App\Support\Site')
@php $items = array_values((array) Site::get('insights.items', [])); @endphp
<section class="section" id="insights" aria-labelledby="insights-title">
    <div class="container-x">
        <div class="section-head">
            <p class="section-index">{{ Site::number('05') }} — {{ Site::text('insights.index_label') }}</p>
            <h2 class="section-title" id="insights-title">{{ Site::text('insights.title') }}</h2>
            <p class="section-sub">{{ Site::text('insights.sub') }}</p>
        </div>

        <div class="insights-carousel" data-carousel>
            @if ($items)
                <div class="insights-track" data-carousel-track tabindex="0" role="region" aria-roledescription="carousel" aria-labelledby="insights-title">
                    @foreach ($items as $item)
                        @include('partials.media-card', ['item' => $item])
                    @endforeach
                </div>
            @endif

            <div class="insights-foot">
                @if ($items)
                    <div class="carousel-nav" data-carousel-nav>
                        <button type="button" class="carousel-btn" data-carousel-prev aria-label="{{ __('site.prev') }}">
                            <svg class="flip-rtl" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M15 6l-6 6 6 6" /></svg>
                        </button>
                        <button type="button" class="carousel-btn" data-carousel-next aria-label="{{ __('site.next') }}">
                            <svg class="flip-rtl" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M9 6l6 6-6 6" /></svg>
                        </button>
                    </div>
                @endif
                <a class="link-arrow" href="{{ Site::get('insights.view_all_url') }}" target="_blank" rel="noopener">
                    <span>{{ Site::text('insights.view_all') }}</span>
                    <svg class="flip-rtl" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                        <path d="M5 12h14M13 6l6 6-6 6" />
                    </svg>
                </a>
            </div>
        </div>
    </div>

    <dialog class="video-dialog" id="video-dialog" aria-label="{{ __('site.video_player') }}">
        <button type="button" class="video-close" aria-label="{{ __('site.close') }}">&times;</button>
        <video controls playsinline preload="none"></video>
    </dialog>
</section>
