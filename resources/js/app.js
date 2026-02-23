import './bootstrap';
import { initAllAnimations, initPageLoaderExport } from './animations';
import { initGallery } from './gallery';
import { initNavbarInteractions } from './navbar';
import { initNewsSlider } from './news-slider';
import { initBackground3D } from './background-3d';

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

const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
const isDesktop = window.matchMedia('(min-width: 1024px)').matches;

if (!prefersReducedMotion) {
    initAllAnimations();
}

if (!prefersReducedMotion && isDesktop) {
    initBackground3D();
}
