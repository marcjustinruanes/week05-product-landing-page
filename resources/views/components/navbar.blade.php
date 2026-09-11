<header id="site-nav" class="fixed inset-x-0 top-0 z-50 transition-all duration-300">
    <nav class="shell flex h-20 items-center justify-between">
        <a href="#" class="brand" aria-label="Badong Footwear home">
            <span class="brand-mark">B</span>
            <span><strong>BADONG</strong><small>FOOTWEAR</small></span>
        </a>

        <div class="hidden items-center gap-7 lg:flex">
            <a href="#" class="nav-link">Home</a>
            <a href="#features" class="nav-link">Features</a>
            <a href="#collection" class="nav-link">Collection</a>
            <a href="#pricing" class="nav-link">Pricing</a>
            <a href="#testimonials" class="nav-link">Testimonials</a>
            <a href="#contact" class="nav-link">Contact</a>
        </div>

        <div class="hidden items-center gap-2 sm:flex">
            <button class="nav-icon" aria-label="Search" data-toast="Search is ready for future Laravel integration">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><circle cx="11" cy="11" r="6.5"/><path d="m16 16 4 4"/></svg>
            </button>
            <button class="nav-icon" aria-label="Shopping bag" data-toast="Your bag is empty">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M6 8.5h12l1 12H5l1-12Z"/><path d="M9 9V6a3 3 0 0 1 6 0v3"/></svg>
            </button>
            <button class="nav-link font-semibold" data-toast="Account sign-in is not part of this demo yet">Sign In</button>
            <a href="#collection" class="btn-nav">Get Started</a>
        </div>

        <button id="menu-toggle" class="nav-icon lg:hidden" aria-label="Open menu" aria-expanded="false">
            <svg id="menu-open" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M4 7h16M4 12h16M4 17h16"/></svg>
            <svg id="menu-close" class="hidden" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="m6 6 12 12M18 6 6 18"/></svg>
        </button>
    </nav>

    <div id="mobile-menu" class="hidden border-t border-espresso/10 bg-cream/95 backdrop-blur-xl lg:hidden">
        <div class="shell flex flex-col gap-1 py-5">
            <a href="#" class="mobile-link">Home</a>
            <a href="#features" class="mobile-link">Features</a>
            <a href="#collection" class="mobile-link">Collection</a>
            <a href="#pricing" class="mobile-link">Pricing</a>
            <a href="#testimonials" class="mobile-link">Testimonials</a>
            <a href="#contact" class="mobile-link">Contact</a>
            <div class="mt-4 flex gap-3">
                <button class="btn-secondary flex-1" data-toast="Account sign-in is not part of this demo yet">Sign In</button>
                <a href="#collection" class="btn-primary flex-1">Get Started</a>
            </div>
        </div>
    </div>
</header>
