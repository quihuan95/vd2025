/**
 * WCES 2025 Custom JavaScript
 * Optimized for performance and user experience
 */
console.log("Custom.js loaded");

(function ($) {
    "use strict";

    // Initialize when document is ready
    $(document).ready(function () {
        initializeComponents();
        setupEventListeners();
        optimizePerformance();
    });

    /**
     * Initialize all components
     */
    function initializeComponents() {
        initNavigation();
        initCountdown();
        initCarousels();
        initLazyLoading();
        initScrollToTop();
        initFormValidation();
        initAccessibility();
    }

    /**
     * Setup event listeners
     */
    function setupEventListeners() {
        // Window resize handler
        $(window).on("resize", debounce(handleResize, 250));

        // Scroll handler
        $(window).on("scroll", throttle(handleScroll, 100));

        // Form submission handler
        $("form").on("submit", handleFormSubmit);

        // Image load handler
        $("img").on("load", handleImageLoad);
    }

    /**
     * Initialize navigation
     */
    function initNavigation() {
        // Mobile menu toggle
        $(".navbar-toggle").on("click", function (e) {
            e.preventDefault();
            const target = $(this).attr("data-bs-target");
            $(target).toggleClass("show");
        });

        // Smooth scrolling for anchor links
        $('a[href^="#"]').on("click", function (e) {
            const target = $(this.getAttribute("href"));
            if (target.length) {
                e.preventDefault();
                $("html, body").animate(
                    {
                        scrollTop: target.offset().top - 80,
                    },
                    800,
                    "easeInOutCubic"
                );
            }
        });

        // Active menu item highlighting
        highlightActiveMenuItem();
    }

    /**
     * Initialize countdown timer
     */
    function initCountdown() {
        const countdownElement = $(".f-countdown");
        if (countdownElement.length === 0) return;

        // Set target date (October 31, 2025)
        const targetDate = new Date("2025-10-31T00:00:00").getTime();
        console.log(targetDate);
        function updateCountdown() {
            const now = new Date().getTime();
            const distance = targetDate - now;

            if (distance < 0) {
                $(".fDay").text("0");
                return;
            }

            const days = Math.floor(distance / (1000 * 60 * 60 * 24));
            const hours = Math.floor(
                (distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60)
            );
            const minutes = Math.floor(
                (distance % (1000 * 60 * 60)) / (1000 * 60)
            );
            const seconds = Math.floor((distance % (1000 * 60)) / 1000);

            // Update display
            $(".f-countdown .row .col-count:nth-child(1) .fDay").text(days);
            $(".f-countdown .row .col-count:nth-child(2) .fDay").text(hours);
            $(".f-countdown .row .col-count:nth-child(3) .fDay").text(minutes);
            $(".f-countdown .row .col-count:nth-child(4) .fDay").text(seconds);
        }

        // Update immediately and then every second
        updateCountdown();
        setInterval(updateCountdown, 1000);
    }

    /**
     * Initialize carousels
     */
    function initCarousels() {
        // Banner carousel
        if ($(".f-banner .fGalleryImages").length) {
            $(".f-banner .fGalleryImages").bxSlider({
                mode: "fade",
                auto: true,
                controls: false,
                pager: true,
                speed: 1500,
                pause: 3000,
                responsive: true,
                adaptiveHeight: true,
            });
        }

        // Numbers carousel
        if ($(".numbers-carousel").length) {
            $(".numbers-carousel").owlCarousel({
                autoplayTimeout: 5000,
                autoplayHoverPause: true,
                margin: 20,
                nav: false,
                dots: true,
                slideTransition: "linear",
                navText: [
                    '<i class="fa-solid fa-angle-left"></i>',
                    '<i class="fa-solid fa-angle-right"></i>',
                ],
                responsive: {
                    0: {
                        items: 1,
                        loop: true,
                        autoplay: true,
                    },
                    576: {
                        items: 2,
                        loop: true,
                        autoplay: true,
                    },
                    768: {
                        items: 3,
                        loop: false,
                        autoplay: false,
                    },
                },
            });
        }
    }

    /**
     * Initialize lazy loading
     */
    function initLazyLoading() {
        if ("IntersectionObserver" in window) {
            const imageObserver = new IntersectionObserver(
                (entries, observer) => {
                    entries.forEach((entry) => {
                        if (entry.isIntersecting) {
                            const img = entry.target;
                            if (img.dataset.src) {
                                img.src = img.dataset.src;
                                img.classList.remove("lazy");
                                img.classList.add("loaded");
                            }
                            imageObserver.unobserve(img);
                        }
                    });
                },
                {
                    rootMargin: "50px 0px",
                    threshold: 0.01,
                }
            );

            document.querySelectorAll('img[loading="lazy"]').forEach((img) => {
                imageObserver.observe(img);
            });
        }
    }

    /**
     * Initialize scroll to top button
     */
    function initScrollToTop() {
        const scrollButton = $("#nav-up");
        if (scrollButton.length === 0) return;

        $(window).on("scroll", function () {
            if ($(this).scrollTop() > 300) {
                scrollButton.fadeIn();
            } else {
                scrollButton.fadeOut();
            }
        });

        scrollButton.on("click", function (e) {
            e.preventDefault();
            $("html, body").animate(
                {
                    scrollTop: 0,
                },
                800,
                "easeInOutCubic"
            );
        });
    }

    /**
     * Initialize form validation
     */
    function initFormValidation() {
        // Email validation
        $('input[type="email"]').on("blur", function () {
            const email = $(this).val();
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

            if (email && !emailRegex.test(email)) {
                $(this).addClass("is-invalid");
                if (!$(this).next(".invalid-feedback").length) {
                    $(this).after(
                        '<div class="invalid-feedback">Please enter a valid email address.</div>'
                    );
                }
            } else {
                $(this).removeClass("is-invalid");
                $(this).next(".invalid-feedback").remove();
            }
        });

        // Password validation
        $('input[type="password"]').on("blur", function () {
            const password = $(this).val();

            if (password && password.length < 6) {
                $(this).addClass("is-invalid");
                if (!$(this).next(".invalid-feedback").length) {
                    $(this).after(
                        '<div class="invalid-feedback">Password must be at least 6 characters long.</div>'
                    );
                }
            } else {
                $(this).removeClass("is-invalid");
                $(this).next(".invalid-feedback").remove();
            }
        });
    }

    /**
     * Initialize accessibility features
     */
    function initAccessibility() {
        // Skip to main content link
        if (!$(".skip-to-main").length) {
            $("body").prepend(
                '<a href="#main-content" class="skip-to-main sr-only">Skip to main content</a>'
            );
        }

        // Add ARIA labels to interactive elements
        $(".fGalleryItem a").attr("aria-label", "View image details");
        $(".fButton").attr("role", "button");

        // Keyboard navigation for dropdowns
        $(".has-submenu > a").on("keydown", function (e) {
            if (e.key === "Enter" || e.key === " ") {
                e.preventDefault();
                $(this).next("ul").toggle();
            }
        });
    }

    /**
     * Handle window resize
     */
    function handleResize() {
        // Recalculate carousel dimensions
        if ($(".numbers-carousel").data("owl.carousel")) {
            $(".numbers-carousel").trigger("refresh.owl.carousel");
        }

        // Update navigation for mobile/desktop
        updateNavigationForScreenSize();
    }

    /**
     * Handle scroll events
     */
    function handleScroll() {
        // Parallax effect for banner
        const scrolled = $(window).scrollTop();
        const parallax = $(".f-banner");
        const speed = scrolled * 0.5;

        if (parallax.length) {
            parallax.css("transform", `translateY(${speed}px)`);
        }

        // Animate elements on scroll
        animateOnScroll();
    }

    /**
     * Handle form submission
     */
    function handleFormSubmit(e) {
        const form = $(this);
        const submitButton = form.find('button[type="submit"]');

        // Show loading state
        submitButton
            .prop("disabled", true)
            .html('<i class="fas fa-spinner fa-spin"></i> Processing...');

        // Re-enable button after 3 seconds (in case of no response)
        setTimeout(() => {
            submitButton.prop("disabled", false).html("Submit");
        }, 3000);
    }

    /**
     * Handle image load
     */
    function handleImageLoad() {
        $(this).addClass("loaded");
    }

    /**
     * Highlight active menu item
     */
    function highlightActiveMenuItem() {
        const currentPath = window.location.pathname;
        $(".fMenu a").each(function () {
            const href = $(this).attr("href");
            if (href && currentPath.includes(href.replace(/^\//, ""))) {
                $(this).closest(".menu-item").addClass("selected");
            }
        });
    }

    /**
     * Update navigation for screen size
     */
    function updateNavigationForScreenSize() {
        const isMobile = $(window).width() < 768;
        const menu = $("#fMenu");

        if (isMobile) {
            menu.removeClass("show");
        }
    }

    /**
     * Animate elements on scroll
     */
    function animateOnScroll() {
        $(".fModule").each(function () {
            const elementTop = $(this).offset().top;
            const elementBottom = elementTop + $(this).outerHeight();
            const viewportTop = $(window).scrollTop();
            const viewportBottom = viewportTop + $(window).height();

            if (elementBottom > viewportTop && elementTop < viewportBottom) {
                $(this).addClass("animate__animated animate__fadeInUp");
            }
        });
    }

    /**
     * Optimize performance
     */
    function optimizePerformance() {
        // Preload critical images
        preloadImages([
            "images/Logo BV - No Text.png",
            "https://storage.unitedwebnetwork.com/files/1212/3d3e53ecd2cc03f933a7b163d1b25a88.webp",
        ]);

        // Optimize animations for reduced motion preference
        if (window.matchMedia("(prefers-reduced-motion: reduce)").matches) {
            $("*").css({
                "animation-duration": "0.01ms !important",
                "animation-iteration-count": "1 !important",
                "transition-duration": "0.01ms !important",
            });
        }
    }

    /**
     * Preload images
     */
    function preloadImages(urls) {
        urls.forEach((url) => {
            const img = new Image();
            img.src = url;
        });
    }

    /**
     * Number counter animation
     */
    function initNumberCounter() {
        let animated = false;

        $(window).on("scroll", function () {
            const counterSection = $(".fnumber_counter");
            if (counterSection.length === 0 || animated) return;

            const sectionTop = counterSection.offset().top;
            const sectionBottom = sectionTop + counterSection.outerHeight();
            const viewportTop = $(window).scrollTop();
            const viewportBottom = viewportTop + $(window).height();

            if (sectionBottom > viewportTop && sectionTop < viewportBottom) {
                animated = true;

                $(".count").each(function () {
                    const $this = $(this);
                    const countTo = parseInt($this.attr("data-count"));

                    $({ countNum: 0 }).animate(
                        { countNum: countTo },
                        {
                            duration: 2500,
                            easing: "swing",
                            step: function () {
                                $this.text(Math.floor(this.countNum));
                            },
                            complete: function () {
                                $this.text(countTo);
                            },
                        }
                    );
                });
            }
        });
    }

    // Initialize number counter
    initNumberCounter();

    /**
     * Utility functions
     */

    // Debounce function
    function debounce(func, wait, immediate) {
        let timeout;
        return function executedFunction() {
            const context = this;
            const args = arguments;
            const later = function () {
                timeout = null;
                if (!immediate) func.apply(context, args);
            };
            const callNow = immediate && !timeout;
            clearTimeout(timeout);
            timeout = setTimeout(later, wait);
            if (callNow) func.apply(context, args);
        };
    }

    // Throttle function
    function throttle(func, limit) {
        let inThrottle;
        return function () {
            const args = arguments;
            const context = this;
            if (!inThrottle) {
                func.apply(context, args);
                inThrottle = true;
                setTimeout(() => (inThrottle = false), limit);
            }
        };
    }

    // Custom easing function
    $.easing.easeInOutCubic = function (x, t, b, c, d) {
        if ((t /= d / 2) < 1) return (c / 2) * t * t * t + b;
        return (c / 2) * ((t -= 2) * t * t + 2) + b;
    };

    // Expose functions globally if needed
    window.WCES2025 = {
        initCountdown: initCountdown,
        initCarousels: initCarousels,
        initLazyLoading: initLazyLoading,
    };
})(jQuery);

// Service Worker registration for PWA features (optional)
if ("serviceWorker" in navigator) {
    window.addEventListener("load", function () {
        navigator.serviceWorker
            .register("/sw.js")
            .then(function (registration) {
                console.log("ServiceWorker registration successful");
            })
            .catch(function (err) {
                console.log("ServiceWorker registration failed");
            });
    });
}
