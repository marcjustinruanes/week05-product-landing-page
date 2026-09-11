<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $products = [
        [
            'name' => 'Liliw Tsinelas',
            'description' => 'A handmade pair of leather slippers, built the same way Badong has made pairs since 1962.',
            'price' => '₱150',
            'category' => 'Leather Slippers',
            'image' => '/images/shoe-1.jpg',
            'badge' => 'Featured',
        ],
        [
            'name' => 'Fiesta Slippers',
            'description' => 'A dressed-up pair of embellished slippers from Badong\'s collection, finished with statement detailing.',
            'price' => '₱280',
            'category' => 'Embellished Slippers',
            'image' => '/images/shoe-2.jpg',
            'badge' => 'Popular',
        ],
        [
            'name' => "Founder's Original",
            'description' => 'A made-to-order pair of leather slippers in the tradition Badong is known for exporting abroad.',
            'price' => '₱220',
            'category' => 'Leather Slippers',
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
        ['name' => 'Embellished Slippers', 'image' => '/images/category-sandals.jpg'],
        ['name' => 'Everyday Slippers', 'image' => '/images/category-slippers.jpg'],
        ['name' => 'Casual Leather Slippers', 'image' => '/images/category-casual.jpg'],
        ['name' => 'Heritage Slippers', 'image' => '/images/category-heritage.jpg'],
    ];

    $testimonials = [
        ['name' => 'Maria', 'role' => 'Liliw Customer', 'quote' => 'A simple, comfortable pair that feels right for everyday errands and weekends.', 'avatar' => '/images/avatar-1.svg'],
        ['name' => 'Joshua', 'role' => 'Laguna Customer', 'quote' => 'I like discovering local footwear. Badong has that familiar Liliw character with a clean style.', 'avatar' => '/images/avatar-2.svg'],
        ['name' => 'Ana', 'role' => 'Local Shopper', 'quote' => 'Comfortable, practical, and easy to pair with everyday outfits.', 'avatar' => '/images/avatar-3.svg'],
    ];

    $plans = [
        ['name' => 'Everyday', 'eyebrow' => 'For daily essentials', 'price' => 'From ₱150', 'features' => ['Everyday leather slippers', 'Comfort-focused picks', 'Handmade since 1962'], 'featured' => false],
        ['name' => 'Signature', 'eyebrow' => 'For standout pairs', 'price' => 'From ₱280', 'features' => ['Embellished slippers', 'Statement detailing', 'Dressed-up styles'], 'featured' => true],
        ['name' => 'Heritage', 'eyebrow' => 'For timeless character', 'price' => 'From ₱220', 'features' => ['Made-to-order leather slippers', 'Export-grade craftsmanship', 'Since 1962 on Gat Tayaw Street'], 'featured' => false],
    ];

    return view('pages.home', compact('products', 'features', 'categories', 'testimonials', 'plans'));
});
