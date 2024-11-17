document.addEventListener('DOMContentLoaded', () => {
    const exploreCards = document.querySelectorAll('.explore-card');

    exploreCards.forEach(card => {
        card.addEventListener('click', () => {
            const title = card.querySelector('.explore-card-title').textContent;
            
            // Define the href based on the card clicked
            let url = '';
            if (title.includes('Travel Packages')) {
                url = '/packages';
            } else if (title.includes('Vehicles to Rent')) {
                url = '/vehicles';
            }

            // Show the loading spinner
            const spinner = document.createElement('div');
            spinner.classList.add('loading-spinner');
            document.body.appendChild(spinner);

            // Redirect after 2 seconds and hide the spinner
            setTimeout(() => {
                if (url) {
                    window.location.href = url;
                } else {
                    alert(`You clicked on "${title}"!`);
                }

                // Remove the spinner after redirect
                spinner.remove();
            }, 2000);  // 2 seconds delay
        });
    });
});
