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
        <!-- Main Vehicle Image -->
        <img src="{{ asset('storage/' . json_decode($vehicle->vehicle_pictures)[0]) }}" 
             alt="Vehicle Image" 
             class="rentvehicle-image" 
             onclick="openGalleryModal('{{ json_encode(json_decode($vehicle->vehicle_pictures)) }}')">

        <div class="rentvehicle-info">
            <h2 class="rentvehicle-title">{{ $vehicle->vehicle_type }}</h2>
            <p class="rentvehicle-driver">Driver: {{ $vehicle->driver_name }}</p>
            <p class="rentvehicle-availability {{ $vehicle->available ? 'available' : 'not-available' }}">
                {{ $vehicle->available ? 'Available' : 'Not Available' }}
            </p>
            <div class="rentvehicle-buttons">
                <a href="tel:{{ $vehicle->driver_contact }}" class="rentvehicle-button call">Call</a>
                <a href="https://wa.me/{{ $vehicle->driver_contact }}?text=Hello%2C%20I%20am%20interested%20in%20renting%20the%20Vehicle%20(Number%3A%20{{ $vehicle->vehicle_number }}%2C%20Driver%3A%20{{ $vehicle->driver_name }})"
                   class="rentvehicle-button whatsapp" target="_blank">WhatsApp</a>
            </div>
        </div>
    </div>
    @endforeach
</section>

<!-- Modal for Gallery -->
<div id="galleryModal" class="gallery-modal">
    <div class="modal-content">
        <!-- Close Icon -->
        <span class="close-modal" onclick="closeGalleryModal()">&times;</span>

        <!-- Modal Content -->
        <div id="modalGalleryImages" class="gallery-images"></div>

        <!-- Close Button -->
        <button class="close-modal-button" onclick="closeGalleryModal()">Close</button>
    </div>
</div>

<!-- Styles -->
<style>
/* Modal Styles */
.gallery-modal {
    display: none;
    position: fixed;
    z-index: 1000;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.8);
    justify-content: center;
    align-items: center;
}

.modal-content {
    position: relative;
    background: white;
    border-radius: 8px;
    padding: 20px;
    max-width: 90%;
    max-height: 80%;
    overflow-y: auto;
    text-align: center;
}

.close-modal {
    position: absolute;
    top: 10px;
    right: 20px;
    font-size: 30px;
    color: #333;
    cursor: pointer;
}

.gallery-images img {
    max-width: 100%;
    margin: 10px 0;
    display: block;
    cursor: pointer;
}

/* Close Button Styles */
.close-modal-button {
    position: absolute;
    top: 10px;
    right: 10px;
    padding: 10px 15px;
    background-color: red;
    color: white;
    border: none;
    font-weight: 600;
    border-radius: 5px;
    font-size: 26px;
    cursor: pointer;
    z-index: 1001; /* Ensures button stays above all other content */
}
.close-modal-button:hover {
    background-color: #555;
}
</style>

<!-- Script -->
<script>
function openGalleryModal(imagesJson) {
    const images = JSON.parse(imagesJson); // Parse JSON string into an array
    const galleryContainer = document.getElementById('modalGalleryImages');
    galleryContainer.innerHTML = ''; // Clear previous images

    images.forEach(imagePath => {
        const img = document.createElement('img');
        img.src = `/storage/${imagePath}`;
        galleryContainer.appendChild(img);
    });

    const modal = document.getElementById('galleryModal');
    modal.style.display = 'flex'; // Show modal
}

function closeGalleryModal() {
    const modal = document.getElementById('galleryModal');
    modal.style.display = 'none'; // Hide modal
}
</script>

</div>
</body>
</html>
@endsection
