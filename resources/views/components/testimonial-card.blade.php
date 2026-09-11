@props(['testimonial'])

<article class="testimonial-card reveal">
    <div class="flex items-center justify-between">
        <div class="flex gap-3">
            <img src="{{ $testimonial['avatar'] }}" alt="{{ $testimonial['name'] }}" class="h-11 w-11 rounded-full object-cover">
            <div><p class="font-semibold">{{ $testimonial['name'] }}</p><p class="text-xs text-espresso/45">{{ $testimonial['role'] }}</p></div>
        </div>
        <div class="flex gap-0.5 text-sm" aria-label="5 out of 5 stars">★★★★★</div>
    </div>
    <p class="mt-8 font-display text-2xl leading-snug">“{{ $testimonial['quote'] }}”</p>
</article>
