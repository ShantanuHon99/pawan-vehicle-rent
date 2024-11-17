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
        @foreach ($vehicles as $vehicle)
        <div class="rentvehicle-card">
            <!-- Use the vehicle image (assuming the images are stored in the 'vehicle_pictures' field as JSON) -->
            <img src="{{ asset('storage/' . json_decode($vehicle->vehicle_pictures)[0]) }}" alt="Vehicle Image" class="rentvehicle-image">
            <div class="rentvehicle-info">
                <h2 class="rentvehicle-title">{{ $vehicle->vehicle_type }}</h2>
                <p class="rentvehicle-number">Number: {{ $vehicle->vehicle_number }}</p>
                <p class="rentvehicle-driver">Driver: {{ $vehicle->driver_name }}</p>
                <p class="rentvehicle-availability {{ $vehicle->available ? 'available' : 'not-available' }}">
                    {{ $vehicle->available ? 'Available' : 'Not Available' }}
                </p>
                <div class="rentvehicle-buttons">
                    <a href="tel:9767702426" class="rentvehicle-button call">Call</a>
                    <a href="https://wa.me/9767702426?text=Hello%2C%20I%20am%20interested%20in%20renting%20the%20Vehicle%20(Number%3A%20{{ $vehicle->vehicle_number }}%2C%20Driver%3A%20{{ $vehicle->driver_name }})"
                       class="rentvehicle-button whatsapp" target="_blank">WhatsApp</a>
                </div>
            </div>
        </div>
        @endforeach
    </section>
</div>
</body>
</html>
@endsection
