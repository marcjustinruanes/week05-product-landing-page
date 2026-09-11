# Badong Footwear — Responsive Product Landing Page

**Course:** ITST 302 – Client-Server Technologies · Week 5 · Module 1 – Frontend Development with Laravel

**Mini Project:** MP04 – Responsive Product Landing Page

**Stack:** Laravel · Blade Components · Tailwind CSS · Vite · JavaScript

A responsive product landing page built for **Badong Footwear**, a real, long-running footwear shop on Gat Tayaw Street in Liliw, Laguna — the town widely known as the "Footwear Capital of the Philippines."

---

## 1. Introduction

A **product landing page** is a single, focused web page designed to introduce a product or business, communicate its value quickly, and move a visitor toward an action — exploring a catalog, contacting the business, or making a purchase. Unlike a full multi-page site, everything a first-time visitor needs is on one scrollable page: who the business is, what it sells, why it's trustworthy, and how to take the next step.

Landing pages matter for small, local businesses in particular. Many, like Badong Footwear, have relied for decades on foot traffic and word of mouth along a physical street. A well-built landing page gives that same business a digital front door — a way to be found, understood, and trusted by someone who has never walked down Gat Tayaw Street.

The purpose of this project was to design and build that landing page using Laravel Blade Components and Tailwind CSS, applying component-based architecture and responsive design principles to a real local business rather than a generic template.

### About the Business

Badong Footwear was founded in **1962** by **Salvador "Badong" Monteiro**, who started the shop at age 16. It still stands on Gat Tayaw Street in Liliw, Laguna, on the former site of Dimasira Footwear. The shop makes shoes, slip-ons, slippers, sandals, and leather footwear for men, women, and children, using raw materials sourced from nearby Biñan, Laguna, with hardware such as buckles imported from Hong Kong. Rather than mass-producing, the shop makes pairs to order and has a documented history of exporting to Hong Kong, Singapore, Hawaii, and New York. The shop is today also known as **B.N. Badong (Bunso ni Badong)**, run by the founder's youngest daughter.

These facts were gathered through web research and are cited under [Business Research & Sources](#business-research--sources) below. Product names, exact prices, and testimonials on the page remain illustrative example content for this school project — see [Important Content Note](#important-content-note).

---

## 2. Objectives

This activity accomplished the following learning objectives:

- Built a fully responsive interface using Tailwind CSS across desktop, tablet, and mobile widths.

- Created seven required reusable Blade Components (`navbar`, `hero`, `feature-card`, `pricing-card`, `testimonial-card`, `button`, `footer`) plus two additional components (`product-card`, `category-card`).

- Applied responsive layouts using Flexbox and CSS Grid throughout the page.

- Organized the frontend under `resources/views/layouts`, `resources/views/components`, and `resources/views/pages`, following Laravel's Blade conventions.

- Applied a consistent design system: one color palette, two typefaces, and a shared set of button/card styles reused across every section.

- Researched and documented a real local business rather than filling the page with an arbitrary or fictional brand.

---

## 3. Responsive Web Design

The layout follows a **mobile-first** approach: base styles target small screens, and larger layouts are layered on with Tailwind's `sm:`, `md:`, and `lg:` breakpoint prefixes, plus two custom breakpoints in [`resources/css/app.css`](resources/css/app.css) (`900px` and `640px`) for fine-tuning the hero and floating note positions.

**Flexbox** is used for one-dimensional alignment — the navbar's link row, button groups, and card footers all use `flex` with `gap` utilities instead of manual margins.

Example, the navbar's desktop link row:

```html
<div class="hidden items-center gap-7 lg:flex">
```

**CSS Grid** is used for two-dimensional layouts — the feature grid, product grid, pricing grid, and the hero's two-column split all use `grid` with responsive column counts.

For example, the product collection grid in [`resources/views/pages/home.blade.php`](resources/views/pages/home.blade.php):

```html
<div class="mt-10 grid gap-6 md:grid-cols-3">
```

This stacks to a single column on mobile and expands to three columns from the `md:` breakpoint up.

**Why this matters:** most visitors to a shop's landing page today arrive on a phone, not a desktop. A layout that only works at desktop width would make the page difficult to use on smaller devices. Testing at 1440px (desktop), 768px (tablet), and 390px (mobile) confirmed that the grids reflow correctly, the navigation collapses into a mobile menu below the `lg:` breakpoint, and text sizes scale down instead of overflowing. See [Screenshots](#8-screenshots).

---

## 4. Tailwind CSS

Tailwind CSS is a **utility-first** framework: instead of writing custom class names and separate CSS rules for every element, small single-purpose classes such as `flex`, `gap-4`, `rounded-full`, and `text-sm` are composed directly in the markup.

### Advantages Used in This Project

- **Speed** — building the pricing cards or feature grid used utility composition instead of creating new stylesheet entries for every element.

- **Consistency** — spacing (`gap-6`, `p-8`), radii (`rounded-[2rem]`), and color opacity modifiers (`text-espresso/65`) stay consistent because they are drawn from the same design system.

- **Responsive utilities** — breakpoint prefixes like `sm:`, `md:`, and `lg:` let one element declare different behavior for different screen sizes.

For example, the hero heading in [`resources/views/components/hero.blade.php`](resources/views/components/hero.blade.php):

```html
<h1 class="mt-7 font-display text-6xl leading-[.93] tracking-[-0.04em] sm:text-7xl lg:text-[6.6rem]">
```

This uses `text-6xl` on mobile, `text-7xl` from `sm:` up, and a custom `6.6rem` size from `lg:` up.

### Component Styling

A small set of custom, semantic classes (`.btn-primary`, `.btn-secondary`, `.feature-card`, `.plan-card`, `.testimonial-card`) are defined once in [`resources/css/app.css`](resources/css/app.css) using Tailwind v4's `@theme` block. This allows repeated visual patterns such as buttons and cards to maintain consistent styling.

```css
@theme {
    --font-sans: "DM Sans", sans-serif;
    --font-display: "Playfair Display", serif;
    --color-cream: #f5f0e8;
    --color-sand: #e6d7c3;
    --color-espresso: #251b14;
    --color-tan: #b99b76;
}
```

---

## 5. Blade Components

**Blade Components** are reusable, self-contained pieces of a Laravel view. A component is a `.blade.php` file that can accept data through `@props` and can be used in a page with a simple `<x-component-name />` tag.

### Why Blade Components Matter

Without components, a navbar or footer used on multiple pages would require repeated HTML. A spacing or link change would then have to be updated in several places.

With a reusable component, the change only needs to be made in one file. For example, updating [`resources/views/components/navbar.blade.php`](resources/views/components/navbar.blade.php) updates every page that uses `<x-navbar />`.

### Components in This Project

| Component | Purpose |
|---|---|
| `navbar.blade.php` | Site navigation, mobile menu, Sign In / Get Started actions |
| `hero.blade.php` | Hero headline, description, primary/secondary CTA, product photo |
| `feature-card.blade.php` | One tile in the six-feature grid — icon, title, description |
| `pricing-card.blade.php` | One collection/pricing tier card |
| `testimonial-card.blade.php` | One customer testimonial card |
| `button.blade.php` | Generic primary/secondary button wrapper |
| `footer.blade.php` | Site footer — company information, links, social, address, copyright |
| `product-card.blade.php` | One product tile in the featured collection grid |
| `category-card.blade.php` | One footwear category tile |

### Blade Component Example

The `feature-card.blade.php` component accepts a single `feature` array through `@props` and renders the data passed to it.

```php
@props(['feature'])

<div class="feature-card">
    ...

    <h3 class="mt-7 font-display text-2xl text-cream">
        {{ $feature['title'] }}
    </h3>

    <p class="mt-3 text-sm leading-6 text-cream/55">
        {{ $feature['description'] }}
    </p>
</div>
```

The component can then be reused inside a loop:

```blade
@foreach($features as $feature)
    <x-feature-card :feature="$feature" />
@endforeach
```

All page content flows from [`routes/web.php`](routes/web.php) as arrays passed to the view. This means that adding another feature or pricing tier can be done by editing the data array instead of repeating the markup.

---

## 6. User Interface Design

- **Color palette:** a warm, limited palette defined as design tokens — cream (`#f5f0e8`), sand (`#e6d7c3`), espresso (`#251b14`), and tan (`#b99b76`). These colors were selected to evoke leather, wood, and sand rather than using a generic technology-focused color scheme.

- **Typography:** two typefaces are used — **Playfair Display** for headings, giving an editorial and crafted feel, and **DM Sans** for body text and interface elements for clean readability.

- **Iconography:** inline SVGs are used for icons such as search, bag, menu, and feature icons. This keeps the page lightweight while keeping the icons crisp at different sizes.

- **Button styles:** two consistent variants (`.btn-primary` and `.btn-secondary`) are reused across the hero, pricing cards, and CTA sections.

- **Card design:** feature, pricing, testimonial, and product cards use rounded corners, consistent padding, and a shared hover/shadow style.

- **Layout consistency:** every section shares the same horizontal gutter (`.shell`, capped at 1180px) and vertical rhythm (`.section-pad`), helping the page feel like one complete design system.

Together, these choices keep the page visually coherent and give it a distinct local identity rather than resembling a generic SaaS template.

---

## 7. Folder Structure

```text
week05-product-landing-page/

├── app/
│   └── Laravel application code

├── resources/
│   ├── views/
│   │   ├── layouts/
│   │   │   └── app.blade.php
│   │   ├── components/
│   │   │   ├── navbar.blade.php
│   │   │   ├── hero.blade.php
│   │   │   ├── feature-card.blade.php
│   │   │   ├── pricing-card.blade.php
│   │   │   ├── testimonial-card.blade.php
│   │   │   ├── button.blade.php
│   │   │   ├── footer.blade.php
│   │   │   ├── product-card.blade.php
│   │   │   └── category-card.blade.php
│   │   └── pages/
│   │       └── home.blade.php
│   │
│   ├── css/
│   │   └── app.css
│   │
│   └── js/
│       └── app.js
│
├── public/
│   └── images/
│
├── routes/
│   └── web.php
│
├── screenshots/
│
└── documentation/
```

- **`resources/views/layouts`** holds the shared HTML shell that pages extend with `@extends('layouts.app')`.

- **`resources/views/components`** holds the reusable Blade Components described in [Section 5](#5-blade-components).

- **`resources/views/pages`** holds the actual routed pages, including `home.blade.php`.

- **`public/images`** contains the product, category, and craftsmanship images used by the landing page.

- **`routes/web.php`** contains the page route and the data arrays used by the landing page.

- **`screenshots`** contains screenshots prepared for the assignment's documentation and grading requirements.

- **`documentation`** contains supporting documentation for the assignment deliverables.

---

## 8. Screenshots

The screenshots were captured from the real running Laravel application and show the completed landing page at different screen sizes and individual sections.

| File | Shows |
|---|---|
| [screenshots/desktop.png](screenshots/desktop.png) | Full page at 1440px |
| [screenshots/tablet.png](screenshots/tablet.png) | Full page at 768px |
| [screenshots/mobile.png](screenshots/mobile.png) | Full page at 390px |
| [screenshots/navbar.png](screenshots/navbar.png) | Navigation bar |
| [screenshots/hero.png](screenshots/hero.png) | Hero section |
| [screenshots/features.png](screenshots/features.png) | Features section with six feature cards |
| [screenshots/collection.png](screenshots/collection.png) | Featured product collection |
| [screenshots/showcase.png](screenshots/showcase.png) | Product showcase with key highlights |
| [screenshots/pricing.png](screenshots/pricing.png) | Pricing / collection cards |
| [screenshots/testimonials.png](screenshots/testimonials.png) | Testimonials |
| [screenshots/footer.png](screenshots/footer.png) | Footer |
| [screenshots/blade-components.png](screenshots/blade-components.png) | `resources/views/components` folder showing the Blade Components |
| [screenshots/vscode-structure.png](screenshots/vscode-structure.png) | VS Code project structure |
| [screenshots/github.png](screenshots/github.png) | GitHub repository |

---

## Problems and Solutions

| Problem | Solution |
|---|---|
| `ViteManifestNotFoundException` on first run | Node.js/npm were not installed on the machine, so `public/build/manifest.json` did not exist. Installed Node.js LTS, ran `npm install`, and ran `npm run build`. |
| Leftover unused font plugin in `vite.config.js` | The default Laravel scaffold referenced a Bunny Fonts plugin that was not used by the design. The unused plugin was removed and the project was rebuilt. |
| Automated screenshots showed most sections blank | The page uses an `IntersectionObserver`-driven `.reveal` animation. The screenshot process was adjusted to force the `visible` class after scrolling through the page so the completed sections appeared correctly. |
| Required navigation items were missing | The starter navbar used different labels and only one CTA. It was updated to include the required Features, Pricing, Testimonials, Sign In, and Get Started items. |
| Product images were abstract illustrations instead of real photos | The product and category images were replaced with real Badong Footwear photos. This also avoided using unrelated footwear branding in the final design. |
| SaaS-style CTA requirements did not fully match a physical footwear shop | The CTA wording was adapted to fit the business. "Register" became "Create an Account," while "Start Free Trial" became "Visit Us in Liliw." |

---

## Reflection

This project helped me understand how Laravel Blade Components and Tailwind CSS work together to build a responsive and well-organized landing page instead of repeating the same markup across sections. I also learned that designing for different screen sizes takes real planning because spacing, layout, and content need to work properly from desktop down to mobile. The hardest part was keeping every section visually consistent while making sure the page remained responsive at different breakpoints.

---

## Business Research & Sources

The historical and factual details used to replace generic placeholder copy were gathered from public sources:

- [Badong Footwear: Liliw Laguna's Famous Tsinelas Store](https://liliwtsinelas.com/badong-footwear-liliw-lagunas-famous-tsinelas-store/)

- [Liliw has a new spring in its step — Inquirer Business](https://business.inquirer.net/230287/liliw-new-spring-step)

- [MY GULCH: Badong Footwear — Making business for more than 4 decades now](http://mynewgulch.blogspot.com/2007/08/badong-footwear-making-business-for.html)

- [Manila Shopper: Footwear Shopping in Liliw, Laguna](https://www.manilashopper.com/2012/04/footwear-shopping-at-liliw-laguna.html)

- [Badong Footwear on Facebook](https://www.facebook.com/badongfootwear/)

---

## Product Photography

The product, category, and craftsmanship images used on the page are based on genuine Badong Footwear photos supplied for this project.

| File(s) | Subject |
|---|---|
| `shoe-3.jpg`, `hero-shoe.jpg`, `category-heritage.jpg` | Brown Badong Footwear leather slide sandal with "BADONG GENUINE LEATHER" branding visible on the insole |
| `shoe-1.jpg`, `category-slippers.jpg`, `category-casual.jpg` | Black Badong Footwear leather slide sandal |
| `shoe-2.jpg`, `category-sandals.jpg` | Embellished Badong Footwear sandal |
| `craftsmanship.jpg` | Inside the Badong Footwear workshop, including sandal lasts and leather materials |

Because only three product photos were available, they were deliberately reused across the hero image, featured products, and category tiles rather than mixing them with unrelated stock photography. This keeps the visual content consistent with the selected business.

The featured products were named to match the photographs used in the project:

- **Liliw Tsinelas**
- **Fiesta Slippers**
- **Founder’s Original**

The displayed prices are also illustrative examples for the school project.

An earlier pass used freely licensed stock photography for products where no real photo was available. That stock imagery was removed in favor of using the available Badong Footwear photos throughout the final version.

Testimonial avatars (`avatar-1.svg`, `avatar-2.svg`, `avatar-3.svg`) were deliberately kept as abstract icons instead of using real people's stock photos because the testimonial quotes are fictional placeholder content.

---

## Important Content Note

Product names, exact prices, and testimonials on this page are **illustrative example content** for this school project, not verified official information from Badong Footwear.

The product and category photographs used in the page are based on Badong Footwear photos supplied for the project. However, the displayed product names, prices, descriptions, and testimonial content should not be treated as official business information.

Before presenting this page as an official business website, product names and prices should be verified directly with Badong Footwear, and real customer testimonials should be obtained with permission.

---

## Run the Project

Install the PHP dependencies:

```powershell
composer install
```

Install the frontend dependencies:

```powershell
npm install
```

Build the frontend assets:

```powershell
npm run build
```

Or run the Vite development server:

```powershell
npm run dev
```

In another terminal, start the Laravel development server:

```powershell
php artisan serve
```

Then open:

```text
http://127.0.0.1:8000
```
