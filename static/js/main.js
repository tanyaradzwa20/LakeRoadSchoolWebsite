// Lake Road PTA School - Main JavaScript

// Hero Image Slider
let currentSlide = 0;
let slideInterval;

function showSlide(index) {
    const slides = document.querySelectorAll('.hero-slide');
    const dots = document.querySelectorAll('.dot');

    if (!slides.length) return;

    // Hide all slides
    slides.forEach(slide => slide.classList.remove('active'));
    dots.forEach(dot => dot.classList.remove('active'));

    // Wrap around if index out of bounds
    if (index >= slides.length) currentSlide = 0;
    if (index < 0) currentSlide = slides.length - 1;

    // Show current slide
    slides[currentSlide].classList.add('active');
    if (dots[currentSlide]) dots[currentSlide].classList.add('active');
}

function nextSlide() {
    currentSlide++;
    showSlide(currentSlide);
}

function currentSlideNav(index) {
    currentSlide = index;
    showSlide(currentSlide);
    // Reset interval when manually clicking
    clearInterval(slideInterval);
    slideInterval = setInterval(nextSlide, 3000);
}

// Make currentSlide function available globally for onclick handlers
window.currentSlide = currentSlideNav;

// Mobile Menu Toggle
document.addEventListener('DOMContentLoaded', function() {
    // Start auto-slide on page load
    slideInterval = setInterval(nextSlide, 3000);

    // Pause slider on hover
    const heroSection = document.querySelector('.hero-section');
    if (heroSection) {
        heroSection.addEventListener('mouseenter', () => clearInterval(slideInterval));
        heroSection.addEventListener('mouseleave', () => {
            slideInterval = setInterval(nextSlide, 3000);
        });
    }
    const mobileMenuToggle = document.getElementById('mobileMenuToggle');
    const navMenu = document.getElementById('navMenu');

    if (mobileMenuToggle && navMenu) {
        mobileMenuToggle.addEventListener('click', function() {
            navMenu.classList.toggle('active');
            mobileMenuToggle.classList.toggle('active');
        });

        // Close menu when clicking outside
        document.addEventListener('click', function(event) {
            if (!event.target.closest('.main-navigation')) {
                navMenu.classList.remove('active');
                mobileMenuToggle.classList.remove('active');
            }
        });

        // Handle submenu toggles on mobile
        const hasSubmenu = document.querySelectorAll('.has-submenu');
        hasSubmenu.forEach(item => {
            const link = item.querySelector('a');
            if (link && window.innerWidth <= 768) {
                link.addEventListener('click', function(e) {
                    if (window.innerWidth <= 768) {
                        e.preventDefault();
                        item.classList.toggle('active');
                    }
                });
            }
        });
    }

    // Smooth scrolling for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            const href = this.getAttribute('href');
            if (href !== '#' && href !== '') {
                e.preventDefault();
                const target = document.querySelector(href);
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            }
        });
    });

    // Add scroll effect to header
    let lastScroll = 0;
    const header = document.querySelector('.site-header');

    if (header) {
        window.addEventListener('scroll', function() {
            const currentScroll = window.pageYOffset;

            if (currentScroll > 100) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }

            lastScroll = currentScroll;
        });
    }

    // Animate elements on scroll
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };

    const observer = new IntersectionObserver(function(entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('fade-in-up');
                observer.unobserve(entry.target);
            }
        });
    }, observerOptions);

    // Observe elements for animation
    const animateElements = document.querySelectorAll('.feature-card, .program-card, .stat-item, .value-item');
    animateElements.forEach(el => observer.observe(el));

    // Form validation (if contact form exists)
    const contactForm = document.querySelector('.contact-form');
    if (contactForm) {
        contactForm.addEventListener('submit', function(e) {
            const name = document.getElementById('name');
            const email = document.getElementById('email');
            const message = document.getElementById('message');

            let isValid = true;

            if (name && name.value.trim() === '') {
                isValid = false;
                showError(name, 'Please enter your name');
            }

            if (email && email.value.trim() === '') {
                isValid = false;
                showError(email, 'Please enter your email');
            } else if (email && !isValidEmail(email.value)) {
                isValid = false;
                showError(email, 'Please enter a valid email address');
            }

            if (message && message.value.trim() === '') {
                isValid = false;
                showError(message, 'Please enter a message');
            }

            if (!isValid) {
                e.preventDefault();
            }
        });
    }

    // Helper function to validate email
    function isValidEmail(email) {
        const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return re.test(email);
    }

    // Helper function to show error
    function showError(input, message) {
        const formGroup = input.closest('.form-group');
        if (formGroup) {
            let error = formGroup.querySelector('.error-message');
            if (!error) {
                error = document.createElement('span');
                error.className = 'error-message';
                error.style.color = 'var(--secondary-color)';
                error.style.fontSize = '14px';
                error.style.marginTop = '5px';
                error.style.display = 'block';
                formGroup.appendChild(error);
            }
            error.textContent = message;
            input.style.borderColor = 'var(--secondary-color)';

            // Remove error on input
            input.addEventListener('input', function() {
                error.remove();
                input.style.borderColor = 'var(--border-color)';
            });
        }
    }

    // Counter animation for statistics
    const statNumbers = document.querySelectorAll('.stat-number');
    statNumbers.forEach(stat => {
        const observer = new IntersectionObserver(entries => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    animateCounter(stat);
                    observer.unobserve(entry.target);
                }
            });
        });
        observer.observe(stat);
    });

    function animateCounter(element) {
        const text = element.textContent;
        const hasPlus = text.includes('+');
        const hasPercent = text.includes('%');
        const number = parseInt(text.replace(/[^0-9]/g, ''));

        if (isNaN(number)) return;

        const duration = 2000;
        const steps = 60;
        const increment = number / steps;
        let current = 0;

        const timer = setInterval(() => {
            current += increment;
            if (current >= number) {
                current = number;
                clearInterval(timer);
            }

            let display = Math.floor(current).toString();
            if (hasPlus) display += '+';
            if (hasPercent) display += '%';

            element.textContent = display;
        }, duration / steps);
    }
});

// Add additional CSS for scrolled header
const style = document.createElement('style');
style.textContent = `
    .site-header.scrolled {
        box-shadow: 0 2px 10px rgba(0,0,0,0.1);
    }

    .mobile-menu-toggle.active span:nth-child(1) {
        transform: rotate(45deg) translate(5px, 5px);
    }

    .mobile-menu-toggle.active span:nth-child(2) {
        opacity: 0;
    }

    .mobile-menu-toggle.active span:nth-child(3) {
        transform: rotate(-45deg) translate(7px, -6px);
    }
`;
document.head.appendChild(style);
