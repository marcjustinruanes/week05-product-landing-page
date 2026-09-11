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
                    <h2 class="mt-3 max-w-2xl font-display text-3xl leading-tight sm:text-4xl">Founded 1962 by Salvador "Badong" Monteiro.</h2>
                </div>
                <div class="reveal">
                    <p class="text-sm font-semibold text-espresso/70">Gat Tayaw Street, Liliw</p>
                    <p class="mt-1 text-sm text-espresso/55">Monteiro started the shop at age 16; it still stands on the same footwear strip today.</p>
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
            <p class="max-w-md text-sm leading-6 text-espresso/60">Real Badong Footwear leather slippers, each pair still handmade in Liliw the same way since 1962.</p>
        </div>

        <div class="mt-10 grid gap-6 md:grid-cols-3">
            @foreach($products as $product)
                <x-product-card :product="$product" />
            @endforeach
        </div>
    </section>

    <section id="features" class="bg-espresso text-cream">
        <div class="shell section-pad">
            <div class="grid gap-8 lg:grid-cols-2 lg:items-end">
                <div class="reveal">
                    <p class="eyebrow text-tan">Why Badong</p>
                    <h2 class="mt-3 font-display text-4xl sm:text-5xl">Made for the way people actually live.</h2>
                </div>
                <p class="max-w-xl text-sm leading-7 text-cream/65 reveal">Six things that have kept Badong's leather slippers a Liliw staple since 1962.</p>
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
                    <img src="/images/craftsmanship.jpg" alt="Inside the Badong Footwear workshop: leather slipper lasts on wooden racks and cut leather soles on the workbench" class="h-full w-full object-cover">
                </div>
                <div class="flex items-center p-8 sm:p-12 lg:p-16 reveal">
                    <div class="max-w-xl">
                        <p class="eyebrow">Craftsmanship</p>
                        <h2 class="mt-4 font-display text-4xl leading-tight sm:text-5xl">Made with craft. Worn with pride.</h2>
                        <p class="mt-6 leading-7 text-espresso/65">Badong has never chased mass production. Every pair is made to order using raw materials sourced from nearby Biñan, Laguna, with buckles and hardware brought in from Hong Kong and beyond.</p>
                        <div class="mt-8 space-y-5">
                            <div class="flex gap-4"><span class="number-dot">01</span><div><h3 class="font-semibold">Local materials</h3><p class="mt-1 text-sm text-espresso/55">Raw materials sourced from Biñan, Laguna, shaped by hand in Liliw.</p></div></div>
                            <div class="flex gap-4"><span class="number-dot">02</span><div><h3 class="font-semibold">Made to order</h3><p class="mt-1 text-sm text-espresso/55">No factory lines — quality over volume, pair by pair.</p></div></div>
                            <div class="flex gap-4"><span class="number-dot">03</span><div><h3 class="font-semibold">Export heritage</h3><p class="mt-1 text-sm text-espresso/55">A history of shipping to Hong Kong, Singapore, Hawaii, and New York.</p></div></div>
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
                        <img id="showcase-image" src="/images/shoe-1.jpg" alt="Featured Badong footwear" class="h-full w-full object-cover transition duration-500">
                    </div>
                    <div class="mt-4 grid grid-cols-3 gap-3">
                        <button class="showcase-thumb rounded-2xl border-2 border-espresso/70 bg-sand p-2" data-image="/images/shoe-1.jpg" aria-label="Show first product"><img src="/images/shoe-1.jpg" alt="" class="aspect-square w-full rounded-xl"></button>
                        <button class="showcase-thumb rounded-2xl border border-espresso/10 bg-sand p-2" data-image="/images/shoe-2.jpg" aria-label="Show second product"><img src="/images/shoe-2.jpg" alt="" class="aspect-square w-full rounded-xl"></button>
                        <button class="showcase-thumb rounded-2xl border border-espresso/10 bg-sand p-2" data-image="/images/shoe-3.jpg" aria-label="Show third product"><img src="/images/shoe-3.jpg" alt="" class="aspect-square w-full rounded-xl"></button>
                    </div>
                </div>

                <div class="reveal">
                    <p class="eyebrow">Featured pair</p>
                    <h2 id="showcase-name" class="mt-3 font-display text-4xl sm:text-5xl">Liliw Tsinelas</h2>
                    <p class="mt-5 max-w-xl leading-7 text-espresso/60">Handmade in Liliw the same way since 1962 — a pair of genuine leather slippers, built for everyday wear.</p>
                    <div class="mt-7 flex items-center gap-3"><span class="text-2xl font-semibold">₱150</span><span class="badge">Featured</span></div>

                    <div class="mt-8">
                        <p class="text-sm font-semibold">Key highlights</p>
                        <ul class="mt-3 space-y-2">
                            <li class="flex gap-3 text-sm text-espresso/65"><span class="check">✓</span>Hand-cut from locally sourced materials</li>
                            <li class="flex gap-3 text-sm text-espresso/65"><span class="check">✓</span>Made to order, never mass produced</li>
                            <li class="flex gap-3 text-sm text-espresso/65"><span class="check">✓</span>Handmade on Gat Tayaw Street since 1962</li>
                        </ul>
                    </div>

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
            <p class="max-w-md text-sm leading-6 text-espresso/60">From everyday essentials to statement pairs, each collection is rooted in the same Liliw craftsmanship since 1962.</p>
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
                <p class="mt-6 max-w-2xl leading-7 text-cream/65">Badong has been part of Liliw's footwear story since 1962 — handmade leather slippers, still made to order on Gat Tayaw Street today.</p>
                <div class="mt-8 flex flex-wrap gap-3">
                    <button class="btn-light" data-toast="Account creation is not part of this demo yet">Create an Account</button>
                    <a href="#contact" class="btn-secondary border-cream/30 text-cream hover:border-cream/60">Contact Sales</a>
                    <a href="#contact" class="btn-secondary border-cream/30 text-cream hover:border-cream/60">Visit Us in Liliw</a>
                </div>
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
