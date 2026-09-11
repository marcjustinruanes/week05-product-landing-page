<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $products = [
        [
            'name' => 'Liliw Classic',
            'description' => 'A relaxed everyday silhouette inspired by local footwear culture.',
            'price' => '₱499',
            'category' => 'Everyday',
            'image' => '/images/shoe-1.svg',
            'badge' => 'Featured',
        ],
        [
            'name' => 'Badong Comfort',
            'description' => 'A clean, comfortable pair made for long days and easy styling.',
            'price' => '₱599',
            'category' => 'Comfort',
            'image' => '/images/shoe-2.svg',
            'badge' => 'Popular',
        ],
        [
            'name' => 'Heritage Pair',
            'description' => 'A heritage-inspired style that brings Liliw character to every step.',
            'price' => '₱699',
            'category' => 'Heritage',
            'image' => '/images/shoe-3.svg',
            'badge' => 'Signature',
        ],
    ];

    $features = [
        ['icon' => 'craft', 'title' => 'Local Craftsmanship', 'description' => 'A footwear story deeply connected to Liliw, Laguna.'],
        ['icon' => 'comfort', 'title' => 'Everyday Comfort', 'description' => 'Styles designed around practical, everyday wear.'],
        ['icon' => 'quality', 'title' => 'Quality Materials', 'description' => 'Thoughtful materials and construction for daily use.'],
        ['icon' => 'durability', 'title' => 'Built for Daily Life', 'description' => 'Reliable footwear made to move with you.'],
        ['icon' => 'heritage', 'title' => 'Filipino Heritage', 'description' => 'A modern expression of local footwear culture.'],
        ['icon' => 'liliw', 'title' => 'Rooted in Liliw', 'description' => 'Proudly connected to one of Laguna’s footwear destinations.'],
    ];

    $categories = [
        ['name' => 'Sandals', 'image' => '/images/category-sandals.svg'],
        ['name' => 'Slippers', 'image' => '/images/category-slippers.svg'],
        ['name' => 'Casual Footwear', 'image' => '/images/category-casual.svg'],
        ['name' => 'Heritage Styles', 'image' => '/images/category-heritage.svg'],
    ];

    $testimonials = [
        ['name' => 'Maria', 'role' => 'Liliw Customer', 'quote' => 'A simple, comfortable pair that feels right for everyday errands and weekends.', 'avatar' => '/images/avatar-1.svg'],
        ['name' => 'Joshua', 'role' => 'Laguna Customer', 'quote' => 'I like discovering local footwear. Badong has that familiar Liliw character with a clean style.', 'avatar' => '/images/avatar-2.svg'],
        ['name' => 'Ana', 'role' => 'Local Shopper', 'quote' => 'Comfortable, practical, and easy to pair with everyday outfits.', 'avatar' => '/images/avatar-3.svg'],
    ];

    $plans = [
        ['name' => 'Everyday', 'eyebrow' => 'For daily essentials', 'price' => 'From ₱499', 'features' => ['Everyday slippers', 'Casual styles', 'Comfort-focused picks'], 'featured' => false],
        ['name' => 'Signature', 'eyebrow' => 'For standout pairs', 'price' => 'From ₱599', 'features' => ['Featured footwear', 'Popular styles', 'Versatile designs'], 'featured' => true],
        ['name' => 'Heritage', 'eyebrow' => 'For timeless character', 'price' => 'From ₱699', 'features' => ['Heritage-inspired styles', 'Distinctive details', 'Premium presentation'], 'featured' => false],
    ];

    return view('pages.home', compact('products', 'features', 'categories', 'testimonials', 'plans'));
});
