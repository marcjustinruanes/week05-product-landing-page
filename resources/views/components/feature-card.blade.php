@props(['feature'])

<div class="feature-card">
    <div class="feature-icon">
        @switch($feature['icon'])
            @case('craft')
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><path d="M7 20h10M8 17l8-8 2 2-8 8H8v-2Z"/><path d="m13 6 2-2 5 5-2 2M5 12l4 4"/></svg>
                @break
            @case('comfort')
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><path d="M5 17c2.5-1 4-3.1 5-6l1-3 2 1 1 3c.5 1.7 2 3 4 3h1v4H5v-2Z"/></svg>
                @break
            @case('quality')
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><path d="m12 3 2 4 4 .6-3 3 .7 4.4-3.7-2-3.7 2 .7-4.4-3-3L10 7l2-4Z"/><path d="M8 17h8"/></svg>
                @break
            @case('durability')
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><path d="M6 4h12v5H6zM4 9h16v6H4zM7 15v5M17 15v5"/></svg>
                @break
            @case('heritage')
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><path d="M4 20V9l8-5 8 5v11M7 20v-6h10v6M9 10h6"/></svg>
                @break
            @default
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><circle cx="12" cy="12" r="8"/><path d="M12 8v5l3 2"/></svg>
        @endswitch
    </div>
    <h3 class="mt-7 font-display text-2xl text-cream">{{ $feature['title'] }}</h3>
    <p class="mt-3 text-sm leading-6 text-cream/55">{{ $feature['description'] }}</p>
</div>
