@extends('layouts.main')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rent Vehicles</title>
    <link rel="stylesheet" href="{{ asset('css/rentvehicle.css') }}">
</head>
<body>
<div class="rentvehicle-container">
    <div class="rentvehicle-header">
        <h1>Available Vehicles</h1>
    </div>
    
    <section class="rentvehicle-grid">
        <!-- Card 1 -->
        <div class="rentvehicle-card">
            <img src="../assets/images/explore2.jpg" alt="Vehicle Image" class="rentvehicle-image">
            <div class="rentvehicle-info">
                <h2 class="rentvehicle-title">Toyota Innova</h2>
                <p class="rentvehicle-number">Number: MH12AB1234</p>
                <p class="rentvehicle-driver">Driver: John Doe</p>
                <p class="rentvehicle-availability available">Available</p>
                <div class="rentvehicle-buttons">
                    <a href="tel:9767702426" class="rentvehicle-button call">Call</a>
                    <a 
                        href="https://wa.me/9767702426?text=Hello%2C%20I%20am%20interested%20in%20renting%20the%20Bus%20(Number%3A%20MH12AB1234%2C%20Driver%3A%20John%20Doe)%20which%20is%20currently%20Available."
                        class="rentvehicle-button whatsapp"
                        target="_blank">WhatsApp</a>
                </div>
            </div>
        </div>
        <!-- Card 2 -->
        <div class="rentvehicle-card">
            <img src="../assets/images/explore2.jpg" alt="Vehicle Image" class="rentvehicle-image">
            <div class="rentvehicle-info">
                <h2 class="rentvehicle-title">Maruti Ertiga</h2>
                <p class="rentvehicle-number">Number: MH14CD5678</p>
                <p class="rentvehicle-driver">Driver: Jane Smith</p>
                <p class="rentvehicle-availability not-available">Not Available</p>
                <div class="rentvehicle-buttons">
                    <a href="tel:9767702426" class="rentvehicle-button call">Call</a>
                    <a 
                        href="https://wa.me/9767702426?text=Hello%2C%20I%20am%20interested%20in%20renting%20the%20Car%20(Number%3A%20MH14CD5678%2C%20Driver%3A%20Jane%20Smith)%20which%20is%20currently%20Not%20Available."
                        class="rentvehicle-button whatsapp"
                        target="_blank">WhatsApp</a>
                </div>
            </div>
        </div>
        <!-- Card 3 -->
        <div class="rentvehicle-card">
            <img src="../assets/images/explore2.jpg" alt="Vehicle Image" class="rentvehicle-image">
            <div class="rentvehicle-info">
                <h2 class="rentvehicle-title">Grand Vitara</h2>
                <p class="rentvehicle-number">Number: MH16EF9012</p>
                <p class="rentvehicle-driver">Driver: Richard Roe</p>
                <p class="rentvehicle-availability available">Available</p>
                <div class="rentvehicle-buttons">
                    <a href="tel:9767702426" class="rentvehicle-button call">Call</a>
                    <a 
                        href="https://wa.me/9767702426?text=Hello%2C%20I%20am%20interested%20in%20renting%20the%20Truck%20(Number%3A%20MH16EF9012%2C%20Driver%3A%20Richard%20Roe)%20which%20is%20currently%20Available."
                        class="rentvehicle-button whatsapp"
                        target="_blank">WhatsApp</a>
                </div>
            </div>
        </div>
    </section>
</div>
</body>
</html>

@endsection
