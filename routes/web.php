<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $products = [
        [
            'name' => 'Liliw Tsinelas',
            'description' => 'A handmade everyday tsinelas built the same way Badong has made pairs since 1962.',
            'price' => '₱150',
            'category' => 'Tsinelas',
            'image' => '/images/shoe-1.jpg',
            'badge' => 'Featured',
        ],
        [
            'name' => 'Fiesta Slide',
            'description' => 'A dressed-up statement slide from Badong\'s sandal collection, finished with embellished detailing.',
            'price' => '₱280',
            'category' => 'Dress Sandals',
            'image' => '/images/shoe-2.jpg',
            'badge' => 'Popular',
        ],
        [
            'name' => "Founder's Original",
            'description' => 'A made-to-order slide sandal in the tradition Badong is known for exporting abroad.',
            'price' => '₱220',
            'category' => 'Heritage',
            'image' => '/images/shoe-3.jpg',
            'badge' => 'Signature',
        ],
    ];

    $features = [
        ['icon' => 'craft', 'title' => 'Handmade Since 1962', 'description' => 'Founded by Salvador "Badong" Monteiro on Gat Tayaw Street, Liliw.'],
        ['icon' => 'comfort', 'title' => 'Everyday Comfort', 'description' => 'Styles designed around practical, everyday wear.'],
        ['icon' => 'quality', 'title' => 'Quality Over Mass Production', 'description' => 'No factory lines — every pair is made to order, never mass produced.'],
        ['icon' => 'durability', 'title' => 'Locally Sourced Materials', 'description' => 'Raw materials from nearby Biñan, Laguna, shaped by hand in Liliw.'],
        ['icon' => 'heritage', 'title' => 'From Liliw to the World', 'description' => 'A local workshop with a history of exporting to Hong Kong, Singapore, Hawaii, and New York.'],
        ['icon' => 'liliw', 'title' => 'Rooted in Liliw', 'description' => 'Proudly part of Gat Tayaw Street, one of Laguna’s footwear destinations.'],
    ];

    $categories = [
        ['name' => 'Sandals', 'image' => '/images/category-sandals.jpg'],
        ['name' => 'Slippers', 'image' => '/images/category-slippers.jpg'],
        ['name' => 'Casual Footwear', 'image' => '/images/category-casual.jpg'],
        ['name' => 'Heritage Styles', 'image' => '/images/category-heritage.jpg'],
    ];

    $testimonials = [
        ['name' => 'Maria', 'role' => 'Liliw Customer', 'quote' => 'A simple, comfortable pair that feels right for everyday errands and weekends.', 'avatar' => '/images/avatar-1.svg'],
        ['name' => 'Joshua', 'role' => 'Laguna Customer', 'quote' => 'I like discovering local footwear. Badong has that familiar Liliw character with a clean style.', 'avatar' => '/images/avatar-2.svg'],
        ['name' => 'Ana', 'role' => 'Local Shopper', 'quote' => 'Comfortable, practical, and easy to pair with everyday outfits.', 'avatar' => '/images/avatar-3.svg'],
    ];

    $plans = [
        ['name' => 'Everyday', 'eyebrow' => 'For daily essentials', 'price' => 'From ₱150', 'features' => ['Everyday tsinelas', 'Slippers and casual styles', 'Comfort-focused picks'], 'featured' => false],
        ['name' => 'Signature', 'eyebrow' => 'For standout pairs', 'price' => 'From ₱280', 'features' => ['Statement slides', 'Locally sourced materials', 'Embellished detailing'], 'featured' => true],
        ['name' => 'Heritage', 'eyebrow' => 'For timeless character', 'price' => 'From ₱220', 'features' => ['Made-to-order sandals', 'Export-grade craftsmanship', 'Since 1962 on Gat Tayaw Street'], 'featured' => false],
    ];

    return view('pages.home', compact('products', 'features', 'categories', 'testimonials', 'plans'));
});
