<svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
    @switch($icon ?? 'structure')
        @case('growth')
            <path d="M3 17l6-6 4 4 8-9" /><path d="M15 6h6v6" />
            @break
        @case('compass')
            <circle cx="12" cy="12" r="9" /><path d="M15.5 8.5l-2 5-5 2 2-5 5-2z" />
            @break
        @case('speed')
            <path d="M4 15a8 8 0 0 1 16 0" /><path d="M12 15l4-4" /><circle cx="12" cy="15" r="1.4" />
            @break
        @case('network')
            <circle cx="5.5" cy="6" r="2.5" /><circle cx="18.5" cy="6" r="2.5" /><circle cx="12" cy="18" r="2.5" /><path d="M7.5 7.5L10.5 16M16.5 7.5L13.5 16M8 6h8" />
            @break
        @case('target')
            <circle cx="12" cy="12" r="9" /><circle cx="12" cy="12" r="5" /><circle cx="12" cy="12" r="1.2" fill="currentColor" />
            @break
        @default
            <rect x="9" y="3" width="6" height="5" rx="1" /><rect x="2" y="16" width="6" height="5" rx="1" /><rect x="16" y="16" width="6" height="5" rx="1" /><path d="M12 8v4M12 12H5v4M12 12h7v4" />
    @endswitch
</svg>
