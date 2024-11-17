<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Vehicle</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="{{ asset('css/addvehicle.css') }}">
    <style>
        /* Floating Close Button Styles */
        .close-btn {
            position: fixed;
            top: 20px;
            right: 20px;
            background-color: red;
            color: white;
            font-size: 20px;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            text-align: center;
            line-height: 40px;
            cursor: pointer;
            z-index: 1000;
        }

        .close-btn:hover {
            background-color: darkred;
        }
    </style>
</head>

<body>
    <!-- Floating Close Button -->
    <div class="close-btn" onclick="window.location.href='{{ route('admin.dashboard') }}'">
        X
    </div>

    <div class="add-vehicle-page">
        <div class="form-container">
            <h1 class="form-title">Add New Vehicle</h1>

            <!-- Success and Error Messages -->
            @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif
            @if(session('error'))
                <div class="alert alert-error">{{ session('error') }}</div>
            @endif

            <!-- Form -->
            <form action="{{ route('store-vehicle') }}" method="POST" enctype="multipart/form-data"
                class="add-vehicle-form">

                @csrf
                <div class="form-group">
                    <label for="driver_name">Driver Name:</label>
                    <input type="text" id="driver_name" name="driver_name" class="form-input"
                        placeholder="Enter driver name" required>
                </div>

                <div class="form-group">
                    <label for="vehicle_type">Vehicle Type:</label>
                    <input type="text" id="vehicle_type" name="vehicle_type" class="form-input"
                        placeholder="Enter vehicle type" required>
                </div>

                <div class="form-group">
                    <label for="vehicle_number">Vehicle Number:</label>
                    <input type="text" id="vehicle_number" name="vehicle_number" class="form-input"
                        placeholder="Enter vehicle number" required>
                </div>

                <div class="form-group">
                    <label for="vehicle_pic">Vehicle Pictures:</label>
                    <input type="file" id="vehicle_pic" name="vehicle_pic[]" class="form-input" multiple required>
                </div>
                <div class="form-group">
                    <label for="driver_contact">Driver Contact:</label>
                    <input type="text" id="driver_contact" name="driver_contact" class="form-input"
                        placeholder="Enter driver contact" required>
                </div>

                <div class="form-group checkbox-group">
                    <input type="checkbox" id="available" name="available" value="1" class="form-checkbox">
                    <label for="available">Available</label>
                </div>

                <button type="submit" class="form-button">Save Vehicle</button>
            </form>
        </div>
    </div>
</body>

</html>
