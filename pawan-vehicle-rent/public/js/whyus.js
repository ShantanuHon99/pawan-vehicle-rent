// resources/js/why-choose-us.js

document.addEventListener('DOMContentLoaded', () => {
    const cards = document.querySelectorAll('.whyus-card');

    cards.forEach(card => {
        card.addEventListener('mouseenter', () => {
            card.style.boxShadow = '0 8px 16px rgba(0, 0, 0, 0.3)';
        });

        card.addEventListener('mouseleave', () => {
            card.style.boxShadow = '0 4px 8px rgba(0, 0, 0, 0.1)';
        });
    });
});
