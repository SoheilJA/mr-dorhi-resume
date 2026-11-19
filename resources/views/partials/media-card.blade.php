@use('App\Support\Site')
@php
    $isVideo = ($item['type'] ?? 'article') === 'video';
    $upload = $isVideo && ($item['video_source'] ?? 'link') === 'upload' && ! empty($item['video_file']);
    $title = Site::localize($item['title'] ?? null);
    $excerpt = Site::localize($item['excerpt'] ?? null);
    $classes = 'media-card ' . ($featured ? 'media-featured' : 'media-side') . ($isVideo ? '' : ' media-article');
@endphp
@if ($upload)
    <a class="{{ $classes }}" href="{{ Site::url($item['video_file']) }}" data-video-src="{{ Site::url($item['video_file']) }}" data-video-poster="{{ Site::url($item['cover'] ?? null) }}">
        @else
            <a class="{{ $classes }}" href="{{ $item['url'] ?? '#' }}" target="_blank" rel="noopener">
                @endif
                <div class="media-thumb">
                    @if (! empty($item['cover']))
                        <img src="{{ Site::url($item['cover']) }}" alt="{{ $title }}" width="900" height="563" loading="lazy" decoding="async" />
                    @endif
                    <span class="media-tag">{{ Site::text($isVideo ? 'insights.tag_video' : 'insights.tag_article') }}</span>
                    @if ($isVideo && $featured)
                        <span class="play-badge" aria-hidden="true">
        <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M8 5.5v13l11-6.5-11-6.5z" /></svg>
      </span>
                    @endif
                </div>
                <div class="media-body">
                    <h3 class="media-title">{{ $title }}</h3>
                    @if (! $isVideo && $excerpt !== '')
                        <p class="media-desc">{{ $excerpt }}</p>
                    @endif
                    <span class="media-meta">
      <span>{{ Site::text($isVideo ? 'insights.watch' : 'insights.read') }}</span>
      <svg class="flip-rtl" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12h14M13 6l6 6-6 6" /></svg>
    </span>
                </div>
            </a>
