@props(['product'])

<article class="product-card reveal group">
    <div class="relative overflow-hidden rounded-[1.5rem] bg-sand">
        <div class="absolute left-4 top-4 z-10 badge">{{ $product['badge'] }}</div>
        <button class="absolute right-4 top-4 z-10 heart-btn" aria-label="Add {{ $product['name'] }} to favorites" data-toast="{{ $product['name'] }} saved">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><path d="M20.8 8.7c0 5.1-8.8 10.1-8.8 10.1S3.2 13.8 3.2 8.7A4.7 4.7 0 0 1 12 6.4a4.7 4.7 0 0 1 8.8 2.3Z"/></svg>
        </button>
        <img src="{{ $product['image'] }}" alt="{{ $product['name'] }}" loading="lazy" class="aspect-[4/3] w-full object-cover transition duration-700 group-hover:scale-105">
    </div>
    <div class="pt-5">
        <div class="flex items-start justify-between gap-4">
            <div>
                <p class="text-xs font-semibold uppercase tracking-[.14em] text-espresso/40">{{ $product['category'] }}</p>
                <h3 class="mt-1 font-display text-2xl">{{ $product['name'] }}</h3>
            </div>
            <p class="font-semibold">{{ $product['price'] }}</p>
        </div>
        <p class="mt-3 text-sm leading-6 text-espresso/55">{{ $product['description'] }}</p>
        <button class="product-link mt-5" data-toast="{{ $product['name'] }} selected">View product <span>↗</span></button>
    </div>
</article>
