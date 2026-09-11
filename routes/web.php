<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $products = [
        [
            'name' => 'Liliw Slip-On',
            'description' => 'A handmade slip-on built the same way Badong has made everyday pairs since 1962.',
            'price' => '₱350',
            'category' => 'Slip-Ons',
            'image' => '/images/shoe-1.svg',
            'badge' => 'Featured',
        ],
        [
            'name' => 'Gat Tayaw Leather',
            'description' => 'A leather pair made from locally sourced materials, finished with imported buckle hardware.',
            'price' => '₱550',
            'category' => 'Leather Shoes',
            'image' => '/images/shoe-2.svg',
            'badge' => 'Popular',
        ],
        [
            'name' => 'Heritage Sandal',
            'description' => 'A made-to-order sandal in the tradition Badong is known for exporting abroad.',
            'price' => '₱650',
            'category' => 'Sandals',
            'image' => '/images/shoe-3.svg',
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
        ['name' => 'Everyday', 'eyebrow' => 'For daily essentials', 'price' => 'From ₱350', 'features' => ['Everyday slip-ons', 'Slippers and casual styles', 'Comfort-focused picks'], 'featured' => false],
        ['name' => 'Signature', 'eyebrow' => 'For standout pairs', 'price' => 'From ₱550', 'features' => ['Leather shoes', 'Locally sourced materials', 'Imported hardware finishing'], 'featured' => true],
        ['name' => 'Heritage', 'eyebrow' => 'For timeless character', 'price' => 'From ₱650', 'features' => ['Made-to-order sandals', 'Export-grade craftsmanship', 'Since 1962 on Gat Tayaw Street'], 'featured' => false],
    ];

    return view('pages.home', compact('products', 'features', 'categories', 'testimonials', 'plans'));
});
