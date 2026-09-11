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

### About the business

Badong Footwear was founded in **1962** by **Salvador "Badong" Monteiro**, who started the shop at age 16. It still stands on Gat Tayaw Street in Liliw, Laguna, on the former site of Dimasira Footwear. The shop makes shoes, slip-ons, slippers, sandals, and leather footwear for men, women, and children, using raw materials sourced from nearby Biñan, Laguna, with hardware such as buckles imported from Hong Kong. Rather than mass-producing, the shop makes pairs to order and has a documented history of exporting to Hong Kong, Singapore, Hawaii, and New York. The shop is today also known as **B.N. Badong (Bunso ni Badong)**, run by the founder's youngest daughter.

These facts were gathered through web research (not invented) and are cited under [Business Research & Sources](#business-research--sources) below. Product names, exact prices, and testimonials on the page remain illustrative example content for this school project — see [Important Content Note](#important-content-note).

---

## 2. Objectives

This activity accomplished the following learning objectives:

- Built a fully responsive interface using Tailwind CSS across desktop, tablet, and mobile widths.
- Created seven required reusable Blade Components (`navbar`, `hero`, `feature-card`, `pricing-card`, `testimonial-card`, `button`, `footer`) plus two additional ones (`product-card`, `category-card`).
- Applied responsive layouts using Flexbox and CSS Grid throughout the page.
- Organized the frontend under `resources/views/layouts`, `resources/views/components`, and `resources/views/pages`, following Laravel's Blade conventions.
- Applied a consistent design system: one color palette, two typefaces, and a shared set of button/card styles reused across every section.
- Researched and documented a real local business rather than filling the page with an arbitrary or fictional brand.

---

## 3. Responsive Web Design

The layout follows a **mobile-first** approach: base styles target small screens, and larger layouts are layered on with Tailwind's `sm:`, `md:`, and `lg:` breakpoint prefixes, plus two custom breakpoints in [resources/css/app.css](resources/css/app.css) (`900px` and `640px`) for fine-tuning the hero and floating note positions.

**Flexbox** is used for one-dimensional alignment — the navbar's link row, button groups, and card footers all use `flex` with `gap` utilities instead of manual margins. Example, the navbar's desktop link row:

```html
<div class="hidden items-center gap-7 lg:flex">
```

**CSS Grid** is used for two-dimensional layouts — the feature grid, product grid, pricing grid, and the hero's two-column split all use `grid` with responsive column counts, for example the product collection grid in [resources/views/pages/home.blade.php](resources/views/pages/home.blade.php):

```html
<div class="mt-10 grid gap-6 md:grid-cols-3">
```

which stacks to a single column on mobile and expands to three columns from the `md:` breakpoint up.

**Why this matters:** most visitors to a shop's landing page today arrive on a phone, not a desktop. A layout that only works at desktop width would make the page unusable for the majority of real visitors — directly undermining the purpose of putting the business online in the first place. Testing at 1440px (desktop), 768px (tablet), and 390px (mobile) confirmed the grids reflow correctly, the navigation collapses into a mobile menu below the `lg:` breakpoint, and text sizes scale down instead of overflowing. See [Screenshots](#8-screenshots).

---

## 4. Tailwind CSS

Tailwind CSS is a **utility-first** framework: instead of writing custom class names and separate CSS rules for every element, small single-purpose classes (`flex`, `gap-4`, `rounded-full`, `text-sm`) are composed directly in the markup.

**Advantages used in this project:**
- **Speed** — building the pricing cards or feature grid took utility composition, not new stylesheet entries.
- **Consistency** — spacing (`gap-6`, `p-8`), radii (`rounded-[2rem]`), and color opacity modifiers (`text-espresso/65`) stay consistent because they're drawn from the same scale everywhere.
- **Responsive utilities** — breakpoint prefixes like `sm:`, `md:`, `lg:` let one element declare different behavior per screen size in place, e.g. the hero heading in [resources/views/components/hero.blade.php](resources/views/components/hero.blade.php):

```html
<h1 class="mt-7 font-display text-6xl leading-[.93] tracking-[-0.04em] sm:text-7xl lg:text-[6.6rem]">
```

which is `text-6xl` on mobile, `text-7xl` from `sm:` up, and a custom `6.6rem` size from `lg:` up.

**Component styling:** a small set of custom, semantic classes (`.btn-primary`, `.btn-secondary`, `.feature-card`, `.plan-card`, `.testimonial-card`) are defined once in [resources/css/app.css](resources/css/app.css) using Tailwind v4's `@theme` block, so repeated visual patterns (buttons, cards) don't need their full utility class list repeated on every element:

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

**Blade Components** are reusable, self-contained pieces of a Laravel view — a component is a `.blade.php` file that accepts data through `@props` and can be dropped into any page with a simple `<x-component-name />` tag, the same way a UI framework component works.

**Why they matter:** without components, a navbar or footer used on ten pages means ten copies of the same HTML — a spacing or link fix has to be repeated ten times, and it's easy to miss one. A component fixes that: change [resources/views/components/navbar.blade.php](resources/views/components/navbar.blade.php) once, and every page using `<x-navbar />` updates.

### Components in this project

| Component | Purpose |
|---|---|
| `navbar.blade.php` | Site navigation, mobile menu, Sign In / Get Started actions |
| `hero.blade.php` | Hero headline, description, primary/secondary CTA, product photo |
| `feature-card.blade.php` | One tile in the six-feature grid — icon, title, description |
| `pricing-card.blade.php` | One collection/pricing tier card |
| `testimonial-card.blade.php` | One customer testimonial card |
| `button.blade.php` | Generic primary/secondary button wrapper |
| `footer.blade.php` | Site footer — company info, links, social, address, copyright |
| `product-card.blade.php` *(bonus)* | One product tile in the featured collection grid |
| `category-card.blade.php` *(bonus)* | One footwear category tile |

Example — `feature-card.blade.php` accepts a single `feature` array via `@props` and renders it, so the page just loops and passes data:

```php
@props(['feature'])
<div class="feature-card">
    ...
    <h3 class="mt-7 font-display text-2xl text-cream">{{ $feature['title'] }}</h3>
    <p class="mt-3 text-sm leading-6 text-cream/55">{{ $feature['description'] }}</p>
</div>
```

```blade
@foreach($features as $feature)
    <x-feature-card :feature="$feature" />
@endforeach
```

All page content flows from [routes/web.php](routes/web.php) as arrays passed to the view — so adding a seventh feature or a fourth pricing tier means editing one array, not touching any markup.

---

## 6. User Interface Design

- **Color palette:** a warm, limited palette defined once as design tokens — cream (`#f5f0e8`), sand (`#e6d7c3`), espresso (`#251b14`), and tan (`#b99b76`) — meant to evoke leather, wood, and sand rather than a generic tech-product blue/purple gradient.
- **Typography:** two typefaces, loaded from Google Fonts — **Playfair Display** (serif, `.font-display`) for headings, giving an editorial, crafted feel, and **DM Sans** for body text and UI, for clean readability.
- **Iconography:** inline SVGs (search, bag, menu, feature icons) instead of an icon font, keeping the page dependency-light and every icon crisp at any size.
- **Button styles:** two consistent variants (`.btn-primary` filled espresso, `.btn-secondary` outlined) reused across every section — hero, pricing cards, CTAs — so a visitor learns the pattern once.
- **Card design:** feature, pricing, testimonial, and product cards all share rounded corners, consistent padding, and the same hover/shadow language.
- **Layout consistency:** every section shares the same horizontal gutter (`.shell`, capped at 1180px) and vertical rhythm (`.section-pad`), so the page reads as one system rather than stitched-together blocks.

Together these choices keep the page visually coherent and give it a distinct, local identity rather than resembling a generic SaaS template — directly serving the assignment's requirement to avoid copying existing websites.

---

## 7. Folder Structure

```
week05-product-landing-page/
│
├── app/                        Laravel application code (models, providers)
├── resources/
│   ├── views/
│   │   ├── layouts/            Shared page shell — app.blade.php (head, @vite, @yield)
│   │   ├── components/         The 9 reusable Blade Components listed above
│   │   └── pages/               Route-level views — home.blade.php extends the layout
│   ├── css/app.css             Tailwind import, design tokens, custom component classes
│   └── js/app.js               Nav scroll state, mobile menu, toasts, reveal animations
├── public/
│   └── images/                 Real product/category/craftsmanship photos (JPG) and abstract avatar icons (SVG)
├── routes/web.php              Page content as PHP arrays (products, features, plans, etc.)
├── screenshots/                Desktop/tablet/mobile and per-section screenshots (below)
└── documentation/              Supporting documentation for the assignment deliverables
```

- **`resources/views/layouts`** holds the one shared HTML shell every page extends with `@extends('layouts.app')`, so `<head>`, meta tags, and asset loading exist in exactly one place.
- **`resources/views/components`** holds the reusable UI pieces described in [section 5](#5-blade-components).
- **`resources/views/pages`** holds the actual routed pages — currently just `home.blade.php`.
- **`public`** is Laravel's web-servable root; product/category artwork lives under `public/images`.
- **`screenshots`** and **`documentation`** exist purely for this assignment's grading deliverables and aren't part of the running application.

---

## 8. Screenshots

Captured from the real, running application (Laravel dev server + compiled Vite build) using a headless-Chromium script — not mockups.

| File | Shows |
|---|---|
| [screenshots/desktop.png](screenshots/desktop.png) | Full page at 1440px |
| [screenshots/tablet.png](screenshots/tablet.png) | Full page at 768px |
| [screenshots/mobile.png](screenshots/mobile.png) | Full page at 390px |
| [screenshots/navbar.png](screenshots/navbar.png) | Navigation bar |
| [screenshots/hero.png](screenshots/hero.png) | Hero section |
| [screenshots/features.png](screenshots/features.png) | Features section (6 feature cards) |
| [screenshots/collection.png](screenshots/collection.png) | Featured product collection |
| [screenshots/showcase.png](screenshots/showcase.png) | Product showcase with key highlights |
| [screenshots/pricing.png](screenshots/pricing.png) | Pricing / collection cards |
| [screenshots/testimonials.png](screenshots/testimonials.png) | Testimonials |
| [screenshots/footer.png](screenshots/footer.png) | Footer |
| [screenshots/blade_components.png](screenshots/blade_components.png) | The `resources/views/components` folder, showing all Blade Components |
| [screenshots/vscode_structure.png](screenshots/vscode_structure.png) | VS Code project structure (file tree) |
| [screenshots/github.png](screenshots/github.png) | The GitHub repository |

---

## Before-and-After Comparison

A separate Before-and-After design comparison was not created for this project. The landing page was built directly on top of the prepared starter kit rather than from an earlier hand-drawn wireframe or rough prototype, so there was no genuine earlier version of this specific interface to document. No `before-design.png` / `after-design.png` images are included in `documentation/` for this reason, rather than presenting a fabricated "before" state as if it were real project history.

---

## Problems and Solutions

| Problem | Solution |
|---|---|
| `ViteManifestNotFoundException` on first run | Node.js/npm were not installed on the machine, so `public/build/manifest.json` never existed. Installed Node.js LTS, ran `npm install` and `npm run build`. |
| Leftover unused font plugin in `vite.config.js` | The default Laravel scaffold's `vite.config.js` referenced a Bunny Fonts plugin for a font the design doesn't use (the real design loads DM Sans/Playfair Display via Google Fonts in `app.css`). Removed the unused plugin and rebuilt. |
| Automated screenshots showed most sections blank | The page uses an `IntersectionObserver`-driven `.reveal` scroll animation (sections start at `opacity: 0` until scrolled into view). A synthetic scroll didn't reliably trigger every element in time for the screenshot. Fixed by having the screenshot script force the `visible` class after scrolling through the page — the same end state a real visitor reaches by scrolling. |
| Required nav items (Features, Pricing, Testimonials, Sign In, Get Started) were missing | The starter kit's navbar used different labels (Collection, About, Craftsmanship, Stories) and a single CTA button. Updated the navbar to include the required links and both a Sign In and Get Started button. |
| Product images were abstract SVG illustrations, not real photos | Replaced with real, freely-licensed footwear photography (see [Product Photography](#product-photography)). Several first-choice stock photos had to be discarded after visual inspection revealed a competing shoe brand's name printed on the insole (Barker, Grant Stone, Helmsman) — using those would have put another company's branding on Badong's page. |
| Rubric asks for SaaS-style CTAs (Register / Contact Sales / Start Free Trial) on a physical retail shop | Adapted rather than forced: "Contact Sales" is genuinely appropriate (Badong does wholesale/export business), "Register" became "Create an Account," and "Start Free Trial" — which has no equivalent for a shoe shop — became "Visit Us in Liliw," since visiting and trying shoes on is the retail equivalent of a trial. |

---

## Reflection

This project helped me understand how Laravel Blade Components and Tailwind CSS work together to build a responsive, well-organized landing page instead of repeating the same markup across sections. I also learned that designing for different screen sizes takes real planning — spacing, layout, and content all had to be rethought, not just resized, for the page to hold up from desktop down to mobile. The hardest part was keeping every section feeling consistent with the rest of the page while it stayed responsive at every breakpoint.

---

## Business Research & Sources

The historical and factual details used to replace generic placeholder copy (founding year, founder, address, materials, export markets) were gathered from public sources, not invented:

- [Badong Footwear: Liliw Laguna's Famous Tsinelas Store](https://liliwtsinelas.com/badong-footwear-liliw-lagunas-famous-tsinelas-store/)
- [Liliw has a new spring in its step — Inquirer Business](https://business.inquirer.net/230287/liliw-new-spring-step)
- [MY GULCH: Badong Footwear — Making business for more than 4 decades now](http://mynewgulch.blogspot.com/2007/08/badong-footwear-making-business-for.html)
- [Manila Shopper: Footwear Shopping in Liliw, Laguna](https://www.manilashopper.com/2012/04/footwear-shopping-at-liliw-laguna.html)
- [Badong Footwear on Facebook](https://www.facebook.com/badongfootwear/)

## Product Photography

Every product, category, and craftsmanship image on the page is a **genuine Badong Footwear photo** — no stock photography or illustrations remain. Four real photos, supplied directly by the project owner from their own saved photos of the shop, are reused across every image slot the page needs:

| File(s) | Subject |
|---|---|
| `shoe-3.jpg`, `hero-shoe.jpg`, `category-heritage.jpg` | Brown Badong Footwear leather slide sandal ("BADONG GENUINE LEATHER" branding visible on the insole) |
| `shoe-1.jpg`, `category-slippers.jpg`, `category-casual.jpg` | Black Badong Footwear leather slide sandal (same branding) |
| `shoe-2.jpg`, `category-sandals.jpg` | Embellished Badong Footwear sandal (promotional shot) |
| `craftsmanship.jpg` | Inside the Badong Footwear workshop — sandal lasts on wooden racks and cut leather soles on the workbench, replacing the starter kit's abstract mountain illustration |

Because only three real photos were available, they're deliberately reused across the hero image, all three featured products, and all four category tiles rather than mixed with unrelated stock photography — so the page shows exclusively real Badong Footwear inventory, even at the cost of visual repetition. Products were renamed to match what's actually photographed (Liliw Tsinelas, Fiesta Slippers, Founder's Original) rather than keeping placeholder names like "Leather Shoes" next to a sandal photo, and priced in a more realistic range for local tsinelas (₱150–₱280) instead of the original arbitrary ₱350–₱650.

An earlier pass used freely-licensed stock photography (Unsplash, Wikimedia Commons) for the products no real photo existed for yet. That stock imagery — and the "reuse Badong photos everywhere" decision above — was removed entirely at the project owner's request in favor of exclusively real photos, even where that means the same photo appears more than once.

Testimonial avatars (`avatar-1.svg`, `avatar-2.svg`, `avatar-3.svg`) were deliberately **kept as abstract icons**, not swapped for real people's stock photos — the testimonial quotes are fictional placeholder content, and pairing them with a real photographed person's face would misrepresent that individual as a genuine reviewer.

## Important Content Note

Product names, exact prices, and testimonials on this page are **illustrative example content** for this school project, not verified, official information from Badong Footwear. Every product/category photo on the page is now a real Badong Footwear photo — but the names, prices, and "made-to-order" copy paired with them are still this project's own placeholder text, not confirmed against the shop's actual listings. Before presenting this page as the shop's real website, verify product names and prices directly with Badong Footwear, and obtain real customer testimonials with permission.

---

## Run the Project

```powershell
composer install
npm install
npm run build   # or: npm run dev
```

In another terminal:

```powershell
php artisan serve
```

Then open http://127.0.0.1:8000

## Required School Documentation

The professor's Week 5 activity also requires:

- Public GitHub repository with at least 10 meaningful commits
- This README
- Desktop/tablet/mobile, Blade Components, VS Code project structure, and GitHub repository screenshots (all provided in `screenshots/`)
- Before-and-after comparison — not created for this submission (see [Before-and-After Comparison](#before-and-after-comparison))
- LinkedIn portfolio post
- LMS submission

Use the `screenshots/` and `documentation/` folders for these deliverables.
