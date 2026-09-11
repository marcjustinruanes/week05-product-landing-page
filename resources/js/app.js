import './bootstrap';

const nav = document.getElementById('site-nav');
const menuToggle = document.getElementById('menu-toggle');
const mobileMenu = document.getElementById('mobile-menu');
const menuOpen = document.getElementById('menu-open');
const menuClose = document.getElementById('menu-close');

window.addEventListener('scroll', () => {
    nav?.classList.toggle('scrolled', window.scrollY > 18);
}, { passive: true });

menuToggle?.addEventListener('click', () => {
    const open = menuToggle.getAttribute('aria-expanded') === 'true';
    menuToggle.setAttribute('aria-expanded', String(!open));
    mobileMenu.classList.toggle('hidden', open);
    menuOpen.classList.toggle('hidden', !open);
    menuClose.classList.toggle('hidden', open);
});

document.querySelectorAll('#mobile-menu a').forEach(link => {
    link.addEventListener('click', () => {
        menuToggle.setAttribute('aria-expanded', 'false');
        mobileMenu.classList.add('hidden');
        menuOpen.classList.remove('hidden');
        menuClose.classList.add('hidden');
    });
});

const toast = document.getElementById('toast');
let toastTimer;
function showToast(message) {
    if (!toast) return;
    toast.textContent = message;
    toast.classList.add('show');
    clearTimeout(toastTimer);
    toastTimer = setTimeout(() => toast.classList.remove('show'), 2200);
}

document.querySelectorAll('[data-toast]').forEach(el => {
    el.addEventListener('click', e => {
        if (el.tagName === 'A' && el.getAttribute('href')?.startsWith('#')) return;
        showToast(el.dataset.toast);
    });
});

document.querySelectorAll('.heart-btn').forEach(btn => {
    btn.addEventListener('click', () => {
        btn.classList.toggle('active');
        showToast(btn.classList.contains('active') ? 'Saved to favorites' : 'Removed from favorites');
    });
});

document.querySelectorAll('.size-btn').forEach(btn => {
    btn.addEventListener('click', () => {
        document.querySelectorAll('.size-btn').forEach(b => {
            b.classList.remove('active');
            b.setAttribute('aria-pressed', 'false');
        });
        btn.classList.add('active');
        btn.setAttribute('aria-pressed', 'true');
    });
});

const showcaseImage = document.getElementById('showcase-image');
document.querySelectorAll('.showcase-thumb').forEach(thumb => {
    thumb.addEventListener('click', () => {
        showcaseImage.src = thumb.dataset.image;
        document.querySelectorAll('.showcase-thumb').forEach(t => t.classList.remove('border-espresso/70'));
        document.querySelectorAll('.showcase-thumb').forEach(t => t.classList.add('border-espresso/10'));
        thumb.classList.remove('border-espresso/10');
        thumb.classList.add('border-espresso/70');
    });
});

const revealObserver = new IntersectionObserver(entries => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.add('visible');
            revealObserver.unobserve(entry.target);
        }
    });
}, { threshold: .12 });

document.querySelectorAll('.reveal').forEach(el => revealObserver.observe(el));

const track = document.getElementById('testimonial-track');
const cards = track ? [...track.children] : [];
let currentTestimonial = 0;

function showTestimonial(index) {
    if (window.innerWidth >= 768 || !cards.length) return;
    currentTestimonial = (index + cards.length) % cards.length;
    cards.forEach((card, i) => card.style.display = i === currentTestimonial ? 'block' : 'none');
}
showTestimonial(0);
window.addEventListener('resize', () => {
    if (window.innerWidth >= 768) cards.forEach(card => card.style.display = '');
    else showTestimonial(currentTestimonial);
});
document.getElementById('testimonial-prev')?.addEventListener('click', () => showTestimonial(currentTestimonial - 1));
document.getElementById('testimonial-next')?.addEventListener('click', () => showTestimonial(currentTestimonial + 1));

setInterval(() => {
    if (document.visibilityState === 'visible' && window.innerWidth < 768) showTestimonial(currentTestimonial + 1);
}, 5000);
