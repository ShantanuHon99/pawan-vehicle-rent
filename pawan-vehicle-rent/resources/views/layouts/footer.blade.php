<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>

    <link rel="stylesheet" href={{ asset('../css/header.css') }}>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
    <link rel='stylesheet' href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css'>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
</head>

<body>
<div id="about"></div>
    <footer class="footer text-white text-center text-lg-start"
        style="margin: 0; padding: 2rem 0; position: relative; background-color: #4b0082;">
        <div class="container p-4">
            <div class="row mt-4">
                <div class="col-lg-4 col-md-12 mb-4 mb-md-0"
                    style="background-color: white; padding: 15px; border-radius: 15px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                    <h5 class="text-uppercase mb-3" style="color: #333; font-weight: 600; font-size: 1.25rem;">About
                        Company</h5>
                    <p style="color: #555; font-size: 1.2rem; line-height: 1.6;">
                        We are a leading travel agency offering a variety of services to make your travel experience
                        unforgettable. Our specialized travel packages, car rental services, and expert support are
                        designed to provide you with comfort and convenience every step of the way. Explore new
                        destinations and create lasting memories with us.
                    </p>
                    <div class="mt-3">
                        <a href="https://www.instagram.com/datadoctorr?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw=="
                            class="btn btn-floating btn-light btn-lg footer-icon"
                            style="padding: 8px 12px; border-radius: 50%; background-color: #f5f5f5; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);"
                            aria-label="Instagram">
                            <i class='bx bxl-google' style="font-size: 1.3rem; color: #4CAF50;"></i>
                            <div class="span" style="font-size: 0.9rem; color: #333;">RedBus</div>
                        </a>
                    </div>
                </div>


                <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
                    <h5 class="text-uppercase mb-4">Contact</h5>
                    <div class="d-flex align-items-start mb-3" style="justify-content: flex-start;">
                        <i class='bx bx-map' style="font-size: 1.5rem; margin-right: 10px;"></i>
                        <span>Shop no 02, Near, Nagapalika Nagar Manmad Highway, Sai Nagar, Shirdi, Maharashtra
                            423109</span>
                    </div>
                    <div class="d-flex align-items-start mb-3" style="justify-content: flex-start;">
                        <i class='bx bx-envelope' style="font-size: 1.5rem; margin-right: 10px;"></i>
                        <a href="mailto:smartcomputersrahata@gmail.com"
                            style="color: white; text-decoration: none;">smartcomputersrahata@gmail.com</a>
                    </div>

                    <div class="d-flex align-items-start mb-3" style="justify-content: flex-start;">
                        <i class='bx bx-phone' style="font-size: 1.5rem; margin-right: 10px;"></i>
                        <a href="tel:+918796864955" style="color: white; text-decoration: none;">Virendra Jain: +91
                            8796864955</a>
                    </div>

                </div>

                <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
                    <h5 class="text-uppercase mb-4">Opening Hours</h5>
                    <table class="table text-white text-center" style="margin: auto;">
                        <tbody>
                            <tr>
                                <td>Monday - Sunday:</td>
                                <td>9:00am - 7:00pm</td>
                            </tr>
                        </tbody>
                    </table>

                    <!-- Map Section -->
                    <h5 class="text-uppercase mb-4 mt-4">Location</h5>
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15173.066658358018!2d74.6170974893289!3d19.76861780183148!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bdcc80cc5b8f581%3A0x22b6d1eaa0403d62!2sSai%20Nagar%2C%20Shirdi%2C%20Maharashtra%20423109!5e0!3m2!1sen!2sin!4v1619825262874!5m2!1sen!2sin"
                            style="border:0; width: 100%; height: 250px;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
            </div>
        </div>

        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.6); margin-bottom: 0;">
            © 2024 Copyright:
            <a class="text-white" href="#">PawanTravels.com</a>
        </div>
    </footer>

</body>

</html>