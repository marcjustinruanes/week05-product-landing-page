@props(['plan'])

<div class="plan-card {{ $plan['featured'] ? 'featured' : '' }} reveal">
    @if($plan['featured'])
        <span class="plan-popular">Most explored</span>
    @endif
    <p class="eyebrow">{{ $plan['eyebrow'] }}</p>
    <h3 class="mt-3 font-display text-4xl">{{ $plan['name'] }}</h3>
    <p class="mt-5 text-2xl font-semibold">{{ $plan['price'] }}</p>
    <div class="my-7 h-px bg-current opacity-10"></div>
    <ul class="space-y-4">
        @foreach($plan['features'] as $item)
            <li class="flex gap-3 text-sm text-espresso/65">
                <span class="check">✓</span>{{ $item }}
            </li>
        @endforeach
    </ul>
    <a href="#collection" class="{{ $plan['featured'] ? 'btn-primary' : 'btn-secondary' }} mt-9 w-full justify-center">Explore <span>→</span></a>
</div>
