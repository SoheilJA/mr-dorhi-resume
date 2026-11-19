@use('App\Support\Site')
@php $items = array_values((array) Site::get('insights.items', [])); @endphp
<section class="section" id="insights" aria-labelledby="insights-title">
    <div class="container-x">
        <div class="section-head">
            <p class="section-index">{{ Site::number('05') }} — {{ Site::text('insights.index_label') }}</p>
            <h2 class="section-title" id="insights-title">{{ Site::text('insights.title') }}</h2>
            <p class="section-sub">{{ Site::text('insights.sub') }}</p>
        </div>

        @if ($items)
            <div class="insights-layout">
                @include('partials.media-card', ['item' => $items[0], 'featured' => true])
                @if (count($items) > 1)
                    <div class="insights-side">
                        @foreach (array_slice($items, 1) as $item)
                            @include('partials.media-card', ['item' => $item, 'featured' => false])
                        @endforeach
                    </div>
                @endif
            </div>
        @endif

        <div class="view-all-row">
            <a class="link-arrow" href="{{ Site::get('insights.view_all_url') }}" target="_blank" rel="noopener">
                <span>{{ Site::text('insights.view_all') }}</span>
                <svg class="flip-rtl" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                    <path d="M5 12h14M13 6l6 6-6 6" />
                </svg>
            </a>
        </div>
    </div>

    <dialog class="video-dialog" id="video-dialog" aria-label="{{ __('site.video_player') }}">
        <button type="button" class="video-close" aria-label="{{ __('site.close') }}">&times;</button>
        <video controls playsinline preload="none"></video>
    </dialog>
</section>
