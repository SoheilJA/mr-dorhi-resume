@use('App\Support\Site')
@php
    $groups = [
      ['class' => 'operational', 'label' => 'collab.op_label', 'alt' => 'collab.op_logo_alt', 'logos' => array_values((array) Site::get('collab.op_logos', []))],
      ['class' => 'consulting', 'label' => 'collab.co_label', 'alt' => 'collab.co_logo_alt', 'logos' => array_values((array) Site::get('collab.co_logos', []))],
    ];
@endphp
<section class="section section-dark" id="collaborations" aria-labelledby="collab-title">
    <div class="container-x">
        <div class="section-head">
            <p class="section-index">{{ Site::number('04') }} — {{ Site::text('collab.index_label') }}</p>
            <h2 class="section-title" id="collab-title">{{ Site::text('collab.title') }}</h2>
            <p class="section-sub">{{ Site::text('collab.sub') }}</p>
        </div>

        <div class="collab-groups">
            @foreach ($groups as $group)
                <div class="collab-group">
                    <div class="group-head">
                        <h3 class="group-label">{{ Site::text($group['label']) }}</h3>
                        <span class="group-count">{{ Site::number(count($group['logos'])) }} {{ Site::text('collab.count_word') }}</span>
                    </div>
                    <ul class="logo-grid {{ $group['class'] }}" role="list">
                        @foreach ($group['logos'] as $logo)
                            <li class="logo-cell"><img src="{{ Site::url($logo) }}" alt="{{ Site::text($group['alt']) }}" width="240" height="160" loading="lazy" decoding="async" /></li>
                        @endforeach
                    </ul>
                </div>
            @endforeach
        </div>
    </div>
</section>
