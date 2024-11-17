        document.addEventListener('DOMContentLoaded', () => {
            const cta = document.querySelector('.cta');

            cta.addEventListener('click', () => {
                const hours = new Date().getHours();
                let greeting;

                if (hours < 12) {
                    greeting = "Good Morning! 🌅";
                } else if (hours < 18) {
                    greeting = "Good Afternoon! ☀️";
                } else {
                    greeting = "Good Evening! 🌙";
                }

                alert(`${greeting} Welcome to Pawan Travels!`);
            });
        });
