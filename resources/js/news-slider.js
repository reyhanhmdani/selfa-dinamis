
/**
 * School News Slider
 * Handles the "Alive" animation where the center item is prominent
 * and the track flows like a conveyor belt.
 */

export function initNewsSlider() {
    const track = document.querySelector('.news-track');
    if (!track) return;

    const cards = Array.from(track.children);
    if (cards.length === 0) return;

    // Clone items for infinite loop illusion
    // We clone enough items to fill the screen width twice
    const cardWidth = cards[0].offsetWidth + 32; // Width + Gap (2rem)
    const clonesNeeded = 5; // Simple heuristic for now

    // Clone Start (Append to end)
    for (let i = 0; i < clonesNeeded; i++) {
        const clone = cards[i].cloneNode(true);
        clone.classList.add('clone');
        track.appendChild(clone);
    }
    
    // Clone End (Prepend to start)
    for (let i = cards.length - 1; i >= cards.length - clonesNeeded; i--) {
        const clone = cards[i].cloneNode(true);
        clone.classList.add('clone');
        track.insertBefore(clone, track.firstChild);
    }

    // Re-query all cards including clones
    const allCards = Array.from(track.querySelectorAll('.news-card'));
    let currentIndex = clonesNeeded; // Start at the first real item
    let isDragging = false;
    let startPos = 0;
    let currentTranslate = 0;
    let prevTranslate = 0;
    let animationID;
    let autoPlayInterval;

    // Initial Position (Center the first real item)
    // We need to calculate the offset to center the "currentIndex" card
    const updatePosition = () => {
        const trackCenter = track.parentElement.offsetWidth / 2;
        const cardCenter = (cardWidth / 2);
        const position = -((currentIndex * cardWidth) - trackCenter + cardCenter);
        
        currentTranslate = position;
        prevTranslate = position;
        setSliderPosition();
    };

    function setSliderPosition() {
        track.style.transform = `translateX(${currentTranslate}px)`;
    }

    // Auto Play Logic (The "Conveyor Belt")
    function startAutoPlay() {
        if(window.innerWidth <= 768) return; // Disable on mobile (native scroll)

        clearInterval(autoPlayInterval);
        autoPlayInterval = setInterval(() => {
            if(!isDragging) {
                currentIndex++;
                updateSlideTransition();
            }
        }, 3000); // 3 seconds per slide
    }

    function stopAutoPlay() {
        clearInterval(autoPlayInterval);
    }

    function updateSlideTransition() {
        track.style.transition = 'transform 0.5s cubic-bezier(0.25, 1, 0.5, 1)';
        const trackCenter = track.parentElement.offsetWidth / 2;
        const cardCenter = (cardWidth / 2);
        const position = -((currentIndex * cardWidth) - trackCenter + cardCenter);
        currentTranslate = position;
        prevTranslate = position;
        setSliderPosition();

        // Wait for transition to end to check loop
        track.addEventListener('transitionend', checkIndex);
    }

    function checkIndex() {
        track.classList.remove('active'); // Helper to maybe remove transition
        track.style.transition = 'none';

        // If we reached the end clones, jump back to start real items
        if (currentIndex >= allCards.length - clonesNeeded) {
            currentIndex = clonesNeeded;
            const trackCenter = track.parentElement.offsetWidth / 2;
            const cardCenter = (cardWidth / 2);
            currentTranslate = -((currentIndex * cardWidth) - trackCenter + cardCenter);
            prevTranslate = currentTranslate;
            setSliderPosition();
        }

        // If we reached the start clones, jump forward to end real items
        if (currentIndex < clonesNeeded) {
            currentIndex = allCards.length - (clonesNeeded * 2); 
            const trackCenter = track.parentElement.offsetWidth / 2;
            const cardCenter = (cardWidth / 2);
            currentTranslate = -((currentIndex * cardWidth) - trackCenter + cardCenter);
            prevTranslate = currentTranslate;
            setSliderPosition();
        }
        
        track.removeEventListener('transitionend', checkIndex);
    }


    // Initialize
    // Wait for layout to be stable
    requestAnimationFrame(() => {
        updatePosition();
        if(window.innerWidth > 768) {
            startAutoPlay();
        }
    });

    // Resize Handler
    window.addEventListener('resize', () => {
        // Recalculate basic metrics
        // We might need to re-query cardWidth if responsive
        updatePosition();
        setSliderPosition();
    });

    // --- Drag / Swipe Logic ---
    
    // Mouse Events
    track.addEventListener('mousedown', dragStart);
    track.addEventListener('touchstart', dragStart);

    track.addEventListener('touchmove', dragMove);
    track.addEventListener('mousemove', dragMove);

    track.addEventListener('mouseup', dragEnd);
    track.addEventListener('mouseleave', dragEnd);
    track.addEventListener('touchend', dragEnd);

    // Context Menu (Right Click) should also stop drag
    track.addEventListener('contextmenu', (e) => {
        if(isDragging) {
            e.preventDefault(); 
            dragEnd();
        }
    });

    function dragStart(event) {
        // Only left mouse button (0) or touch
        if (event.type === 'mousedown' && event.button !== 0) return;

        stopAutoPlay();
        isDragging = true;
        startPos = getPositionX(event);
        animationID = requestAnimationFrame(animation);
        track.style.cursor = 'grabbing';
        track.style.transition = 'none';
        
        // Prevent default only for mouse to avoid text selection
        // For touch, we might want to allow scroll if vertical
        if(event.type === 'mousedown') event.preventDefault();
    }

    function dragEnd() {
        if(!isDragging) return;
        
        isDragging = false;
        cancelAnimationFrame(animationID);
        track.style.cursor = 'grab';

        const movedBy = currentTranslate - prevTranslate;

        // Snap to nearest slide
        if (movedBy < -100) currentIndex += 1;
        if (movedBy > 100) currentIndex -= 1;

        updateSlideTransition();
        startAutoPlay();
    }

    function dragMove(event) {
        if (isDragging) {
            const currentPosition = getPositionX(event);
            currentTranslate = prevTranslate + currentPosition - startPos;
        }
    }

    function getPositionX(event) {
        return event.type.includes('mouse') ? event.pageX : event.touches[0].clientX;
    }

    function animation() {
        setSliderPosition();
        if (isDragging) requestAnimationFrame(animation);
    }
}

