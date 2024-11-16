// resources/js/explore.js

document.addEventListener('DOMContentLoaded', () => {
    const exploreCards = document.querySelectorAll('.explore-card');

    exploreCards.forEach(card => {
        card.addEventListener('click', () => {
            const title = card.querySelector('.explore-card-title').textContent;
            alert(`You clicked on "${title}"!`);
        });
    });
});
