@extends('layouts.app')

@section('title', 'Badong Footwear | Rooted in Liliw')

@section('content')
<x-navbar />

<main>
    <x-hero />

    <section id="about" class="border-y border-espresso/10 bg-white">
        <div class="shell py-8 sm:py-10">
            <div class="grid gap-7 md:grid-cols-4 md:items-center">
                <div class="md:col-span-2 reveal">
                    <p class="eyebrow">Rooted in Liliw</p>
                    <h2 class="mt-3 max-w-2xl font-display text-3xl leading-tight sm:text-4xl">A local footwear story, carried forward.</h2>
                </div>
                <div class="reveal">
                    <p class="text-sm font-semibold text-espresso/70">Local craftsmanship</p>
                    <p class="mt-1 text-sm text-espresso/55">Connected to Liliw's long-standing footwear culture.</p>
                </div>
                <div class="reveal">
                    <p class="text-sm font-semibold text-espresso/70">Everyday comfort</p>
                    <p class="mt-1 text-sm text-espresso/55">Practical styles made for real everyday movement.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="collection" class="shell section-pad">
        <div class="section-heading reveal">
            <div>
                <p class="eyebrow">Featured collection</p>
                <h2 class="mt-3 font-display text-4xl sm:text-5xl">Pairs with a sense of place.</h2>
            </div>
            <p class="max-w-md text-sm leading-6 text-espresso/60">A curated presentation for Badong's footwear story. Product details and prices can be replaced with verified store information later.</p>
        </div>

        <div class="mt-10 grid gap-6 md:grid-cols-3">
            @foreach($products as $product)
                <x-product-card :product="$product" />
            @endforeach
        </div>
    </section>

    <section class="bg-espresso text-cream">
        <div class="shell section-pad">
            <div class="grid gap-8 lg:grid-cols-2 lg:items-end">
                <div class="reveal">
                    <p class="eyebrow text-tan">Why Badong</p>
                    <h2 class="mt-3 font-display text-4xl sm:text-5xl">Made for the way people actually live.</h2>
                </div>
                <p class="max-w-xl text-sm leading-7 text-cream/65 reveal">The experience should feel warm, useful, and unmistakably local — not like a generic marketplace.</p>
            </div>

            <div class="mt-12 grid gap-px overflow-hidden rounded-3xl border border-cream/10 bg-cream/10 sm:grid-cols-2 lg:grid-cols-3">
                @foreach($features as $feature)
                    <x-feature-card :feature="$feature" />
                @endforeach
            </div>
        </div>
    </section>

    <section class="shell section-pad">
        <div class="section-heading reveal">
            <div>
                <p class="eyebrow">Explore by style</p>
                <h2 class="mt-3 font-display text-4xl sm:text-5xl">Find your everyday pair.</h2>
            </div>
        </div>

        <div class="mt-10 grid gap-4 sm:grid-cols-2 lg:grid-cols-4">
            @foreach($categories as $category)
                <x-category-card :category="$category" />
            @endforeach
        </div>
    </section>

    <section id="craftsmanship" class="shell section-pad">
        <div class="overflow-hidden rounded-[2rem] bg-sand">
            <div class="grid lg:grid-cols-2">
                <div class="min-h-[420px] reveal">
                    <img src="/images/craftsmanship.svg" alt="Illustrated local footwear craftsmanship scene" class="h-full w-full object-cover">
                </div>
                <div class="flex items-center p-8 sm:p-12 lg:p-16 reveal">
                    <div class="max-w-xl">
                        <p class="eyebrow">Craftsmanship</p>
                        <h2 class="mt-4 font-display text-4xl leading-tight sm:text-5xl">Made with craft. Worn with pride.</h2>
                        <p class="mt-6 leading-7 text-espresso/65">Badong's identity belongs to Liliw's footwear tradition. The landing page celebrates that local character through a modern, editorial presentation.</p>
                        <div class="mt-8 space-y-5">
                            <div class="flex gap-4"><span class="number-dot">01</span><div><h3 class="font-semibold">Thoughtful materials</h3><p class="mt-1 text-sm text-espresso/55">Keep product information clear and honest.</p></div></div>
                            <div class="flex gap-4"><span class="number-dot">02</span><div><h3 class="font-semibold">Practical construction</h3><p class="mt-1 text-sm text-espresso/55">Footwear should fit real everyday routines.</p></div></div>
                            <div class="flex gap-4"><span class="number-dot">03</span><div><h3 class="font-semibold">Local character</h3><p class="mt-1 text-sm text-espresso/55">A visual identity connected to Liliw.</p></div></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="showcase" class="bg-white">
        <div class="shell section-pad">
            <div class="grid gap-10 lg:grid-cols-[1.05fr_.95fr] lg:items-center">
                <div class="relative rounded-[2rem] bg-cream p-5 reveal">
                    <div class="aspect-square overflow-hidden rounded-[1.5rem] bg-sand">
                        <img id="showcase-image" src="/images/shoe-1.svg" alt="Featured Badong footwear" class="h-full w-full object-cover transition duration-500">
                    </div>
                    <div class="mt-4 grid grid-cols-3 gap-3">
                        <button class="showcase-thumb rounded-2xl border-2 border-espresso/70 bg-sand p-2" data-image="/images/shoe-1.svg" aria-label="Show first product"><img src="/images/shoe-1.svg" alt="" class="aspect-square w-full rounded-xl"></button>
                        <button class="showcase-thumb rounded-2xl border border-espresso/10 bg-sand p-2" data-image="/images/shoe-2.svg" aria-label="Show second product"><img src="/images/shoe-2.svg" alt="" class="aspect-square w-full rounded-xl"></button>
                        <button class="showcase-thumb rounded-2xl border border-espresso/10 bg-sand p-2" data-image="/images/shoe-3.svg" aria-label="Show third product"><img src="/images/shoe-3.svg" alt="" class="aspect-square w-full rounded-xl"></button>
                    </div>
                </div>

                <div class="reveal">
                    <p class="eyebrow">Featured pair</p>
                    <h2 id="showcase-name" class="mt-3 font-display text-4xl sm:text-5xl">Liliw Classic</h2>
                    <p class="mt-5 max-w-xl leading-7 text-espresso/60">A flexible presentation component that can later connect to real Laravel product data.</p>
                    <div class="mt-7 flex items-center gap-3"><span class="text-2xl font-semibold">₱499</span><span class="badge">Featured</span></div>

                    <div class="mt-8">
                        <p class="text-sm font-semibold">Select size</p>
                        <div class="mt-3 flex flex-wrap gap-2" id="sizes">
                            <button class="size-btn" aria-pressed="false">6</button>
                            <button class="size-btn" aria-pressed="false">7</button>
                            <button class="size-btn active" aria-pressed="true">8</button>
                            <button class="size-btn" aria-pressed="false">9</button>
                            <button class="size-btn" aria-pressed="false">10</button>
                        </div>
                    </div>

                    <div class="mt-8 flex flex-wrap gap-3">
                        <button class="btn-primary" data-toast="Added to your bag">Add to Bag <span aria-hidden="true">→</span></button>
                        <button class="btn-secondary" data-toast="Product details opened">View Details</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="pricing" class="shell section-pad">
        <div class="section-heading reveal">
            <div>
                <p class="eyebrow">Collections</p>
                <h2 class="mt-3 font-display text-4xl sm:text-5xl">Three ways to discover Badong.</h2>
            </div>
            <p class="max-w-md text-sm leading-6 text-espresso/60">The assignment requires three pricing cards. For a footwear business, they are presented as collection tiers rather than subscriptions.</p>
        </div>

        <div class="mt-10 grid gap-5 lg:grid-cols-3">
            @foreach($plans as $plan)
                <x-pricing-card :plan="$plan" />
            @endforeach
        </div>
    </section>

    <section id="testimonials" class="bg-sand">
        <div class="shell section-pad">
            <div class="section-heading reveal">
                <div>
                    <p class="eyebrow">Customer notes</p>
                    <h2 class="mt-3 font-display text-4xl sm:text-5xl">Small details. Real experiences.</h2>
                </div>
            </div>

            <div class="mt-10 relative">
                <div id="testimonial-track" class="grid gap-5 md:grid-cols-3">
                    @foreach($testimonials as $testimonial)
                        <x-testimonial-card :testimonial="$testimonial" />
                    @endforeach
                </div>
                <div class="mt-6 flex gap-2 md:hidden">
                    <button id="testimonial-prev" class="icon-btn" aria-label="Previous testimonial">←</button>
                    <button id="testimonial-next" class="icon-btn" aria-label="Next testimonial">→</button>
                </div>
            </div>
        </div>
    </section>

    <section class="shell section-pad">
        <div class="grid gap-6 lg:grid-cols-[1.3fr_.7fr]">
            <div class="rounded-[2rem] bg-espresso p-8 text-cream sm:p-12 reveal">
                <p class="eyebrow text-tan">From Liliw, with every step</p>
                <h2 class="mt-4 max-w-3xl font-display text-4xl leading-tight sm:text-6xl">A footwear brand should feel like it belongs somewhere.</h2>
                <p class="mt-6 max-w-2xl leading-7 text-cream/65">Badong is presented as a local story: rooted in Liliw, shaped by footwear culture, and brought forward through a modern digital experience.</p>
                <a href="#contact" class="btn-light mt-8">Visit / Contact <span aria-hidden="true">↗</span></a>
            </div>
            <div class="rounded-[2rem] border border-espresso/10 bg-white p-8 reveal sm:p-10">
                <p class="eyebrow">A note for this student project</p>
                <p class="mt-5 text-lg leading-8 text-espresso/70">Replace demo product names, prices, reviews, and images with verified information from the actual store before presenting the page as an official business website.</p>
            </div>
        </div>
    </section>

    <section id="contact" class="bg-[#e9dfd0]">
        <div class="shell section-pad">
            <div class="mx-auto max-w-3xl text-center reveal">
                <p class="eyebrow">Start exploring</p>
                <h2 class="mt-4 font-display text-4xl sm:text-6xl">Find your next favorite pair.</h2>
                <p class="mx-auto mt-5 max-w-xl leading-7 text-espresso/60">Discover Badong Footwear and celebrate a local footwear story from Liliw, Laguna.</p>
                <div class="mt-8 flex flex-wrap justify-center gap-3">
                    <a href="#collection" class="btn-primary">Explore Collection <span aria-hidden="true">↓</span></a>
                    <a href="#about" class="btn-secondary">Our Story</a>
                </div>
            </div>
        </div>
    </section>
</main>

<x-footer />

<div id="toast" class="toast" role="status" aria-live="polite"></div>
@endsection
