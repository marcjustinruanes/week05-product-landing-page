@props(['category'])

<a href="#collection" class="category-card group reveal">
    <div class="relative overflow-hidden rounded-[1.5rem] bg-sand">
        <img src="{{ $category['image'] }}" alt="{{ $category['name'] }}" loading="lazy" class="aspect-[4/5] w-full object-cover transition duration-700 group-hover:scale-105">
        <div class="absolute inset-x-0 bottom-0 p-5">
            <div class="flex items-center justify-between rounded-2xl bg-cream/90 px-4 py-3 backdrop-blur">
                <span class="font-semibold">{{ $category['name'] }}</span>
                <span class="category-arrow">↗</span>
            </div>
        </div>
    </div>
</a>
