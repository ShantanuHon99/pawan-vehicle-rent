<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .dashboard-container {
            margin: 50px auto;
            max-width: 1200px;
        }

        .action-buttons .btn {
            width: 100%;
            font-size: 1.2rem;
            padding: 15px;
            margin-bottom: 20px;
            border-radius: 8px;
        }

        .vehicle-list {
            box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        .vehicle-list table {
            margin: 20px 0;
        }

        .section-header {
            font-size: 1.5rem;
            font-weight: bold;
            color: #4b0082;
            text-align: center;
            margin-bottom: 20px;
        }
        .logout-btn {
            position: fixed;
            top: 20px;
            right: 20px;
            background-color: red;
            color: white;
            border: none;
            font-size: 1rem;
            font-weight: bolder;
            cursor: pointer;
            z-index: 1000;
        }

        .logout-btn:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
<div class="top-bar" style="width: 100%; background-color: purple; font-weight: bold; text-align: center; padding: 10px;">
    <h1 style="margin: 0; color: white;">Pawan Travels</h1>
</div>
<form action="{{ route('admin.logout') }}" method="POST" class="logout-btn">
    @csrf
    <button type="submit" class="btn" style="color:white; font-weight:600;">Logout</button>
</form>

<div class="dashboard-container">
    <div class="row">
        <!-- Left Panel: Action Buttons -->
        <div class="col-md-4">
            <div class="card action-buttons p-4">
                <div class="section-header">Actions</div>
                <button onclick="window.location.href='{{ route('addvehicle') }}'" class="btn btn-primary" 
                style="background-color: #4b0082; border: none;">
                    Add Vehicle
                </button>
            </div>
        </div>

        <!-- Right Panel: Vehicle Listing -->
        <div class="col-md-8">
            <div class="card vehicle-list p-4">
                <div class="section-header">Vehicle List</div>
                <table class="table table-bordered">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Vehicle Name</th>
            <th>Availability</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($vehicles as $vehicle)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $vehicle->vehicle_type }}</td>
            <td>
                <span class="badge 
                    {{ $vehicle->available ? 'bg-success' : 'bg-danger' }}">
                    {{ $vehicle->available ? 'Available' : 'Unavailable' }}
                </span>
            </td>
            <td>
                <a href="{{ route('admin.toggleAvailability', $vehicle->id) }}" 
                   class="btn btn-warning btn-sm">
                    Change Status
                </a>
                <a href="{{ route('admin.deleteVehicle', $vehicle->id) }}" 
                   class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this vehicle?')">
                    Delete
                </a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
