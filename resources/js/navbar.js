/**
 * Init navbar interactions
 */
export function initNavbarInteractions() {
    // Desktop dropdown
    const dropdownBtn = document.getElementById("dropdown-btn");
    const dropdownMenu = document.getElementById("dropdown-menu");

    if (dropdownBtn && dropdownMenu) {
        dropdownBtn.addEventListener("click", (e) => {
            e.preventDefault();
            e.stopPropagation();
            dropdownBtn.classList.toggle("active");
            dropdownMenu.classList.toggle("active");
        });
    }

    // Mobile menu
    const mobileBtn = document.getElementById("mobile-menu-btn");
    const mobileMenu = document.getElementById("mobile-menu");

    if (mobileBtn && mobileMenu) {
        mobileBtn.addEventListener("click", (e) => {
            e.stopPropagation();
            mobileBtn.classList.toggle("active");
            mobileMenu.classList.toggle("active");
        });
    }

    // Mobile dropdown
    const mobileDropdownBtn = document.getElementById("mobile-dropdown-btn");
    const mobileDropdownContent = document.getElementById(
        "mobile-dropdown-content",
    );

    if (mobileDropdownBtn && mobileDropdownContent) {
        mobileDropdownBtn.addEventListener("click", (e) => {
            e.preventDefault();
            mobileDropdownContent.classList.toggle("active");
        });
    }

    // Close menus on outside click
    document.addEventListener("click", (e) => {
        if (
            dropdownMenu &&
            !dropdownBtn?.contains(e.target) &&
            !dropdownMenu.contains(e.target)
        ) {
            dropdownBtn?.classList.remove("active");
            dropdownMenu.classList.remove("active");
        }

        if (
            mobileMenu &&
            !mobileBtn?.contains(e.target) &&
            !mobileMenu.contains(e.target)
        ) {
            mobileBtn?.classList.remove("active");
            mobileMenu.classList.remove("active");
        }
    });

    // Navbar Scroll Effect
    const navbar = document.querySelector(".navbar");
    if (navbar) {
        window.addEventListener("scroll", () => {
            if (window.scrollY > 50) {
                navbar.classList.add("scrolled");
            } else {
                navbar.classList.remove("scrolled");
            }
        });
    }


}
