
  $(document).ready(function(){
    $(".owl-carousel").owlCarousel({
      items: 3,               // Show 3 reviews at a time
      loop: true,             // Loop through the reviews
      margin: 20,             // Margin between reviews
      nav: true,              // Show next/prev arrows
      dots: true,             // Show pagination dots
      autoplay: true,         // Enable autoplay
      autoplayTimeout: 3000,  // Autoplay time interval
      autoplayHoverPause: true,  // Pause autoplay on hover
      responsive: {
        0: {
          items: 1,           // On mobile, show 1 review
        },
        768: {
          items: 2,           // On tablet, show 2 reviews
        },
        1024: {
          items: 3,           // On desktop, show 3 reviews
        }
      }
    });
  });
