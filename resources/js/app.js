import './bootstrap';
import { initAllAnimations, initPageLoaderExport } from './animations';
import { initGallery } from './gallery';
import { initNavbarInteractions } from './navbar';
import { initNewsSlider } from './news-slider';
import { initBackground3D } from './background-3d';

function initScrollProgress() {
    const progressEl = document.querySelector('.scroll-progress');
    if (!progressEl) return;

    const update = () => {
        const scrollTop = window.scrollY;
        const docHeight = document.documentElement.scrollHeight - window.innerHeight;
        const percentage = docHeight > 0 ? Math.min((scrollTop / docHeight) * 100, 100) : 0;
        progressEl.style.width = `${percentage}%`;
    };

    let ticking = false;
    window.addEventListener('scroll', () => {
        if (ticking) return;
        ticking = true;
        requestAnimationFrame(() => {
            update();
            ticking = false;
        });
    }, { passive: true });

    update();
}

function normalizeScrollOnReload() {
    if ('scrollRestoration' in history) {
        history.scrollRestoration = 'manual';
    }

    const resetToTop = () => window.scrollTo({ top: 0, left: 0, behavior: 'auto' });
    resetToTop();
    window.addEventListener('load', resetToTop);
    window.addEventListener('pageshow', resetToTop);
}

normalizeScrollOnReload();

// Page Loader - ALWAYS runs (no motion preference guard)
initPageLoaderExport();

// Initialize non-animation features
initNavbarInteractions();
initGallery();
initNewsSlider();
initScrollProgress();

const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
const isDesktop = window.matchMedia('(min-width: 1024px)').matches;

if (!prefersReducedMotion) {
    initAllAnimations();
}

if (!prefersReducedMotion && isDesktop) {
    initBackground3D();
}
