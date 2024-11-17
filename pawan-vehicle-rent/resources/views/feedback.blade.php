
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F6I+Z2ZQ2h7EAM+9F6vG6OGvVYZSlczm4ZTq9uw0shxgDLHcG7aUJwH5V9M3H0ZO" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/feedback.css') }}">
    <script src="{{ asset('../js/feedback.js') }}"></script>
</head>
<body>
<div class="container mt-5">
    <h1 class="feedback-header text-center">Customer Feedback</h1>

    <!-- Bootstrap Carousel -->
    <div id="feedbackCarousel" class="carousel slide" data-bs-ride="carousel">
        <!-- Indicators -->
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#feedbackCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#feedbackCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#feedbackCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#feedbackCarousel" data-bs-slide-to="3" aria-label="Slide 4"></button>
        </div>

        <!-- Carousel Inner -->
        <div class="carousel-inner">
            <!-- Feedback Card 1: Travel Package -->
            <div class="carousel-item active">
                <div class="feedback-card">
                    <div class="feedback-avatar">
                        <img src="https://www.w3schools.com/howto/img_avatar.png" alt="Profile Icon" class="feedback-profile-img">
                    </div>
                    <div class="feedback-info">
                        <h3 class="feedback-name">Alice Johnson</h3>
                        <p class="feedback-text">The travel package was amazing! It made my trip unforgettable. Highly recommend!</p>
                        <div class="feedback-stars">
                            <span class="star">&#9733;</span>
                            <span class="star">&#9733;</span>
                            <span class="star">&#9733;</span>
                            <span class="star">&#9733;</span>
                            <span class="star">&#9734;</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Feedback Card 2: Vehicle Rent -->
            <div class="carousel-item">
                <div class="feedback-card">
                    <div class="feedback-avatar">
                        <img src="https://www.w3schools.com/howto/img_avatar.png" alt="Profile Icon" class="feedback-profile-img">
                    </div>
                    <div class="feedback-info">
                        <h3 class="feedback-name">John Doe</h3>
                        <p class="feedback-text">Renting the vehicle was hassle-free. The car was clean and well-maintained. Excellent service!</p>
                        <div class="feedback-stars">
                            <span class="star">&#9733;</span>
                            <span class="star">&#9733;</span>
                            <span class="star">&#9733;</span>
                            <span class="star">&#9734;</span>
                            <span class="star">&#9734;</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Feedback Card 3: Travel Package -->
            <div class="carousel-item">
                <div class="feedback-card">
                    <div class="feedback-avatar">
                        <img src="https://www.w3schools.com/howto/img_avatar.png" alt="Profile Icon" class="feedback-profile-img">
                    </div>
                    <div class="feedback-info">
                        <h3 class="feedback-name">Mary Smith</h3>
                        <p class="feedback-text">Great experience with the travel package. The guide was knowledgeable and friendly!</p>
                        <div class="feedback-stars">
                            <span class="star">&#9733;</span>
                            <span class="star">&#9733;</span>
                            <span class="star">&#9733;</span>
                            <span class="star">&#9733;</span>
                            <span class="star">&#9734;</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Feedback Card 4: Vehicle Rent -->
            <div class="carousel-item">
                <div class="feedback-card">
                    <div class="feedback-avatar">
                        <img src="https://www.w3schools.com/howto/img_avatar.png" alt="Profile Icon" class="feedback-profile-img">
                    </div>
                    <div class="feedback-info">
                        <h3 class="feedback-name">Tom Williams</h3>
                        <p class="feedback-text">The vehicle was perfect for our family trip. Great condition and friendly service!</p>
                        <div class="feedback-stars">
                            <span class="star">&#9733;</span>
                            <span class="star">&#9733;</span>
                            <span class="star">&#9733;</span>
                            <span class="star">&#9733;</span>
                            <span class="star">&#9734;</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Carousel Controls -->
        <button class="carousel-control-prev" type="button" data-bs-target="#feedbackCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#feedbackCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>

<!-- Bootstrap JS & Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-hb4Ujlrl4zpUsfJkqOqdt0flZpq/8z9FJxau0U5j0lkpejdb4jfyFsq6bZBYoLnt" crossorigin="anonymous"></script>
</body>
</html>
