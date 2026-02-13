/**
 * Scroll Animations using Intersection Observer
 * Handles reveal effects for elements as they scroll into view.
 */

export function initAllAnimations() {
    document.body.classList.add('js-enabled'); // Enable animations only if JS loads
    initPageLoader();
    initHeroAnimation();
    initScrollAnimations();
    initStatsCounter();
    initParallax();
    initMobileAutoHover();
    initCardTilt();
}

function initMobileAutoHover() {
    if (window.innerWidth >= 1024) return;

    const cards = document.querySelectorAll('.program-card, .news-card, .program-mini-card'); 
    
    const observerOptions = {
        root: null,
        rootMargin: '-20% 0px -20% 0px', 
        threshold: 0.5
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('hover-active');
            } else {
                entry.target.classList.remove('hover-active');
            }
        });
    }, observerOptions);

    cards.forEach(card => observer.observe(card));
}

function initPageLoader() {
    const loader = document.getElementById('page-loader');
    if (!loader) return;

    const hasVisited = sessionStorage.getItem('selfa_visited');

    if (!hasVisited) {
        // Kunjungan pertama — tampilkan full loader
        const MIN_DISPLAY = 2200;
        const startTime = Date.now();

        window.addEventListener('load', () => {
            const elapsed = Date.now() - startTime;
            const remaining = Math.max(0, MIN_DISPLAY - elapsed);

            setTimeout(() => {
                loader.classList.add('loaded');
                sessionStorage.setItem('selfa_visited', '1');
                setTimeout(() => { loader.style.display = 'none'; }, 800);
            }, remaining);
        });
    } else {
        // Sudah pernah berkunjung — skip loader
        loader.style.display = 'none';
    }

    // Quick page transition untuk semua navigasi internal
    initPageTransition();
}

function initPageTransition() {
    const transition = document.getElementById('page-transition');
    if (!transition) return;

    document.addEventListener('click', (e) => {
        const link = e.target.closest('a[href]');
        if (!link) return;

        const href = link.getAttribute('href');

        // Skip: external links, hash links, new tab, mailto, tel, javascript
        if (!href ||
            href.startsWith('#') ||
            href.startsWith('mailto:') ||
            href.startsWith('tel:') ||
            href.startsWith('javascript:') ||
            link.target === '_blank' ||
            link.hasAttribute('download') ||
            e.ctrlKey || e.metaKey || e.shiftKey
        ) return;

        // Skip: external URLs
        try {
            const url = new URL(href, window.location.origin);
            if (url.origin !== window.location.origin) return;
            if (url.pathname === window.location.pathname && url.hash) return;
        } catch (_e) {
            return;
        }

        e.preventDefault();
        transition.classList.add('active');

        setTimeout(() => {
            window.location.href = href;
        }, 300);
    });

    // Saat kembali ke halaman (back/forward button)
    window.addEventListener('pageshow', (e) => {
        if (e.persisted) {
            transition.classList.remove('active');
        }
    });
}

function initScrollAnimations() {
    const observerOptions = {
        threshold: 0.15,
        rootMargin: "0px 0px -50px 0px"
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                entry.target.classList.add('active');
                
                // Optional: Stop observing once revealed (for one-time animation)
                // observer.unobserve(entry.target); 
            }
        });
    }, observerOptions);

    // Elements to animate
    const animatedElements = document.querySelectorAll(
        '.reveal, .reveal-left, .reveal-right, .reveal-scale, .reveal-rotate, .reveal-blur, .reveal-bounce'
    );
    
    animatedElements.forEach((el) => observer.observe(el));

    // Staggered Containers (for lists/grids)
    const staggerContainers = document.querySelectorAll('.stagger-container');
    
    staggerContainers.forEach(container => {
        const staggerObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if(entry.isIntersecting) {
                    entry.target.classList.add('active');
                    // Find all stagger items within this container
                    const items = entry.target.querySelectorAll('.stagger-item');
                    items.forEach((item, index) => {
                        // Add delay via inline style or class
                        // Here we use css transitions, so we just add the active class
                        // The CSS should handle the delay if using nth-child, 
                        // OR we can manually add a delay style here if needed.
                        // For this implementation, we rely on the parent .stagger-container.active 
                        // triggering child animations via CSS, OR we animate children manually.
                        
                        // Let's use a simple timeout loop for manual staggering if CSS isn't enough
                        setTimeout(() => {
                            item.classList.add('active');
                        }, index * 100); 
                    });
                    staggerObserver.unobserve(entry.target);
                }
            });
        }, { threshold: 0.1, rootMargin: "0px 0px -100px 0px" });
        
        staggerObserver.observe(container);
    });
}

function initParallax() {
    // Parallax effect for Hero particles or bg
    document.addEventListener('mousemove', (e) => {
        const particles = document.querySelector('.hero-particles');
        if(particles) {
            const x = (window.innerWidth - e.pageX * 5) / 100;
            const y = (window.innerHeight - e.pageY * 5) / 100;
            particles.style.transform = `translateX(${x}px) translateY(${y}px)`;
        }
    });
}

function initHeroAnimation() {
    const heroContent = document.querySelector('.hero-content');
    if(heroContent) {
        // Simple sequence fade in
        const children = heroContent.children;
        Array.from(children).forEach((child, index) => {
            child.style.opacity = '0';
            child.style.transform = 'translateY(20px)';
            child.style.transition = 'opacity 0.8s ease-out, transform 0.8s ease-out';
            
            setTimeout(() => {
                child.style.opacity = '1';
                child.style.transform = 'translateY(0)';
            }, 500 + (index * 200)); // Start after loader (500ms) + stagger
        });
    }
}

function initStatsCounter() {
    const statsSection = document.querySelector('.stats-section');
    if (!statsSection) return;

    const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                const counters = entry.target.querySelectorAll('.stat-number');
                counters.forEach((counter) => {
                    const target = +counter.getAttribute('data-target');
                    const suffix = counter.getAttribute('data-suffix') || '';
                    const duration = 2000; // 2 seconds
                    const increment = target / (duration / 16); // 60fps

                    let current = 0;
                    const updateCounter = () => {
                        current += increment;
                        if (current < target) {
                            counter.innerText = Math.ceil(current) + suffix;
                            requestAnimationFrame(updateCounter);
                        } else {
                            counter.innerText = target + suffix;
                        }
                    };
                    updateCounter();
                });
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.5 });

    observer.observe(statsSection);
}

function initCardTilt() {
    if ('ontouchstart' in window) return;
  
    const cards = document.querySelectorAll('.program-card, .program-mini-card');
    cards.forEach((card) => {
      card.addEventListener('mousemove', (e) => {
        const rect = card.getBoundingClientRect();
        const x = e.clientX - rect.left;
        const y = e.clientY - rect.top;
        const centerX = rect.width / 2;
        const centerY = rect.height / 2;
        const rotateX = (y - centerY) / 15;
        const rotateY = (centerX - x) / 15;
  
        card.style.transform = `perspective(800px) rotateX(${rotateX}deg) rotateY(${rotateY}deg) translateY(-8px)`;
      });
  
      card.addEventListener('mouseleave', () => {
        card.style.transform = '';
      });
    });
  }
