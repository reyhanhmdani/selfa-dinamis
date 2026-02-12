// =============================================
// GALLERY + LIGHTBOX
// =============================================

/**
 * Initialize gallery lightbox functionality
 */
export function initGallery() {
  const lightbox = document.getElementById('lightbox');
  if (!lightbox) return;

  const galleryItems = document.querySelectorAll('.gallery-item');
  const lightboxImage = lightbox.querySelector('.lightbox-image');
  const closeBtn = lightbox.querySelector('.lightbox-close');
  const prevBtn = lightbox.querySelector('.lightbox-prev');
  const nextBtn = lightbox.querySelector('.lightbox-next');
  const thumbsContainer = lightbox.querySelector('.lightbox-thumbs');

  const images = [];
  let currentIndex = 0;

  // Collect all gallery images
  galleryItems.forEach((item) => {
    const img = item.querySelector('img');
    // Use currentSrc if available (for responsive images/picture tag), fallback to src
    if (img) images.push(img.currentSrc || img.src);
  });

  // Generate thumbnails
  if (thumbsContainer && images.length > 0) {
    thumbsContainer.innerHTML = '';
    images.forEach((src, index) => {
      const thumb = document.createElement('img');
      thumb.src = src;
      thumb.alt = `Thumbnail ${index + 1}`;
      thumb.addEventListener('click', () => openLightbox(index));
      thumbsContainer.appendChild(thumb);
    });
  }

  function openLightbox(index) {
    currentIndex = index;
    updateLightboxImage();
    lightbox.classList.add('active');
    document.body.style.overflow = 'hidden';
  }

  function closeLightbox() {
    lightbox.classList.remove('active');
    document.body.style.overflow = '';
  }

  function showPrev() {
    currentIndex = (currentIndex - 1 + images.length) % images.length;
    updateLightboxImage();
  }

  function showNext() {
    currentIndex = (currentIndex + 1) % images.length;
    updateLightboxImage();
  }

  function updateLightboxImage() {
    if (lightboxImage) lightboxImage.src = images[currentIndex];

    // Update thumbnail active state
    if (thumbsContainer) {
      const thumbs = thumbsContainer.querySelectorAll('img');
      thumbs.forEach((thumb, idx) => {
        thumb.classList.toggle('active', idx === currentIndex);
      });

      // Scroll active thumb into view
      if (thumbs[currentIndex]) {
        thumbs[currentIndex].scrollIntoView({
          behavior: 'smooth',
          block: 'nearest',
          inline: 'center',
        });
      }
    }
  }

  // Event listeners
  galleryItems.forEach((item, index) => {
    item.addEventListener('click', () => openLightbox(index));
  });

  if (closeBtn) closeBtn.addEventListener('click', closeLightbox);
  if (prevBtn) prevBtn.addEventListener('click', showPrev);
  if (nextBtn) nextBtn.addEventListener('click', showNext);

  // Keyboard navigation
  document.addEventListener('keydown', (e) => {
    if (!lightbox.classList.contains('active')) return;
    if (e.key === 'ArrowLeft') showPrev();
    if (e.key === 'ArrowRight') showNext();
    if (e.key === 'Escape') closeLightbox();
  });

  // Click backdrop to close
  lightbox.addEventListener('click', (e) => {
    if (e.target === lightbox) closeLightbox();
  });
}
