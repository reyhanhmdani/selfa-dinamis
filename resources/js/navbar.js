/**
 * Init navbar interactions
 */
export function initNavbarInteractions() {
    const setExpanded = (button, expanded) => {
        if (button) {
            button.classList.toggle("active", expanded);
            button.setAttribute("aria-expanded", expanded ? "true" : "false");
        }
    };

    const setHidden = (element, hidden) => {
        if (element) {
            element.classList.toggle("active", !hidden);
            element.setAttribute("aria-hidden", hidden ? "true" : "false");
        }
    };

    // Desktop dropdown
    const dropdownBtn = document.getElementById("dropdown-btn");
    const dropdownMenu = document.getElementById("dropdown-menu");

    if (dropdownBtn && dropdownMenu) {
        dropdownBtn.addEventListener("click", (e) => {
            e.preventDefault();
            e.stopPropagation();
            const willOpen = !dropdownMenu.classList.contains("active");
            setExpanded(dropdownBtn, willOpen);
            setHidden(dropdownMenu, !willOpen);
        });
    }

    // Mobile menu
    const mobileBtn = document.getElementById("mobile-menu-btn");
    const mobileMenu = document.getElementById("mobile-menu");

    if (mobileBtn && mobileMenu) {
        mobileBtn.addEventListener("click", (e) => {
            e.stopPropagation();
            const willOpen = !mobileMenu.classList.contains("active");
            setExpanded(mobileBtn, willOpen);
            setHidden(mobileMenu, !willOpen);
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
            const willOpen = !mobileDropdownContent.classList.contains("active");
            setExpanded(mobileDropdownBtn, willOpen);
            setHidden(mobileDropdownContent, !willOpen);
        });
    }

    // Close menus on outside click
    document.addEventListener("click", (e) => {
        if (
            dropdownMenu &&
            !dropdownBtn?.contains(e.target) &&
            !dropdownMenu.contains(e.target)
        ) {
            setExpanded(dropdownBtn, false);
            setHidden(dropdownMenu, true);
        }

        if (
            mobileMenu &&
            !mobileBtn?.contains(e.target) &&
            !mobileMenu.contains(e.target)
        ) {
            setExpanded(mobileBtn, false);
            setHidden(mobileMenu, true);
            setExpanded(mobileDropdownBtn, false);
            setHidden(mobileDropdownContent, true);
        }
    });

    // Close open menus with Escape
    document.addEventListener("keydown", (e) => {
        if (e.key !== "Escape") return;

        setExpanded(dropdownBtn, false);
        setHidden(dropdownMenu, true);
        setExpanded(mobileBtn, false);
        setHidden(mobileMenu, true);
        setExpanded(mobileDropdownBtn, false);
        setHidden(mobileDropdownContent, true);
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
