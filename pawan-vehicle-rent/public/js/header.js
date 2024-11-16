document.addEventListener("DOMContentLoaded", function () {
    const partnerSection = document.querySelector('.partner-companies');
    const partnerItems = document.querySelectorAll('.partner-companies .col-6, .partner-companies .col-md-3, .partner-companies h2');
    const partnerImages = document.querySelectorAll('.partner-companies img');

    // Function to check if an element is in the viewport
    function isInViewport(el) {
        const rect = el.getBoundingClientRect();
        return (
            rect.top >= 0 &&
            rect.left >= 0 &&
            rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
            rect.right <= (window.innerWidth || document.documentElement.clientWidth)
        );
    }

    // Function to handle scroll events
    function handleScroll() {
        if (isInViewport(partnerSection)) {
            partnerItems.forEach(item => {
                item.classList.add('appear');
            });
        }
    }

    // Intersection Observer options
    const options = {
        root: null,
        rootMargin: '0px',
        threshold: 0.1
    };

    // Create Intersection Observer instance
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                // Add 'appear' class to all partner items when the section is in view
                partnerItems.forEach(item => {
                    item.classList.add('appear');
                });
                // Stop observing since we only want to animate once
                observer.unobserve(entry.target);
            }
        });
    }, options);

    // Observe all partner images
    partnerImages.forEach(image => {
        observer.observe(image);
    });

    // Attach scroll event listener
    window.addEventListener('scroll', handleScroll);
    // Initial check in case the section is already in view
    handleScroll();
});
document.addEventListener('DOMContentLoaded', () => {
    const menuToggle = document.getElementById('menuToggle');
    const navLinks = document.getElementById('navLinks');

    menuToggle.addEventListener('click', () => {
        navLinks.classList.toggle('show');
        menuToggle.classList.toggle('active');
    });

    const links = document.querySelectorAll('.navlink101 a');
    links.forEach(link => {
        link.addEventListener('click', () => {
            navLinks.classList.remove('show');
            menuToggle.classList.remove('active');
        });
    });
});
