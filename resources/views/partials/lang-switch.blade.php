@php $current = app()->getLocale(); @endphp
<a class="lang-btn {{ $current === 'fa' ? 'active' : '' }}" href="{{ route('home', ['locale' => 'fa']) }}" hreflang="fa"
   lang="fa" aria-label="فارسی" @if ($current === 'fa') aria-current="true" @endif>فا</a>
<a class="lang-btn {{ $current === 'en' ? 'active' : '' }}" href="{{ route('home', ['locale' => 'en']) }}" hreflang="en"
   lang="en" aria-label="English" @if ($current === 'en') aria-current="true" @endif>EN</a>
