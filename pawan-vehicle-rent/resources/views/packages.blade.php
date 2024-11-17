@extends('layouts.main')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel Packages</title>
    <link rel="stylesheet" href="{{ asset('css/packages.css') }}">
</head>
<body>
<div class="travelpackages-container">
    <div class="travelpackages-header">
        <h1>Available Travel Packages</h1>
    </div>
    
    <section class="travelpackages-grid">
        <!-- Package 1 -->
        <div class="travelpackages-card">
            <img src="../assets/images/explore1.jpg" alt="Travel Package Image" class="travelpackages-image">
            <div class="travelpackages-info">
                <h2 class="travelpackages-title">Goa Beach Tour</h2>
                <p class="travelpackages-description">5 Days, 4 Nights</p>
                <p class="travelpackages-price">Price: ₹20,000</p>
                <div class="travelpackages-buttons">
                    <a href="tel:9767702426" class="travelpackages-button call">Call</a>
                    <a 
                        href="https://wa.me/9767702426?text=Hello%2C%20I%20am%20interested%20in%20the%20Goa%20Beach%20Tour%20(5%20Days%2C%204%20Nights)%20which%20is%20currently%20Available."
                        class="travelpackages-button whatsapp"
                        target="_blank">WhatsApp</a>
                </div>
            </div>
        </div>
        
        <!-- Package 2 -->
        <div class="travelpackages-card">
            <img src="../assets/images/explore1.jpg" alt="Travel Package Image" class="travelpackages-image">
            <div class="travelpackages-info">
                <h2 class="travelpackages-title">Shimla & Manali Tour</h2>
                <p class="travelpackages-description">7 Days, 6 Nights</p>
                <p class="travelpackages-price">Price: ₹35,000</p>
                <div class="travelpackages-buttons">
                    <a href="tel:9767702426" class="travelpackages-button call">Call</a>
                    <a 
                        href="https://wa.me/9767702426?text=Hello%2C%20I%20am%20interested%20in%20the%20Shimla%20%26%20Manali%20Tour%20(7%20Days%2C%206%20Nights)%20which%20is%20currently%20Not%20Available."
                        class="travelpackages-button whatsapp"
                        target="_blank">WhatsApp</a>
                </div>
            </div>
        </div>
        
        <!-- Package 3 -->
        <div class="travelpackages-card">
            <img src="../assets/images/explore1.jpg" alt="Travel Package Image" class="travelpackages-image">
            <div class="travelpackages-info">
                <h2 class="travelpackages-title">Kerala Backwater Tour</h2>
                <p class="travelpackages-description">6 Days, 5 Nights</p>
                <p class="travelpackages-price">Price: ₹28,000</p>
                <div class="travelpackages-buttons">
                    <a href="tel:9767702426" class="travelpackages-button call">Call</a>
                    <a 
                        href="https://wa.me/9767702426?text=Hello%2C%20I%20am%20interested%20in%20the%20Kerala%20Backwater%20Tour%20(6%20Days%2C%205%20Nights)%20which%20is%20currently%20Available."
                        class="travelpackages-button whatsapp"
                        target="_blank">WhatsApp</a>
                </div>
            </div>
        </div>
    </section>
</div>
</body>
</html>

@endsection
