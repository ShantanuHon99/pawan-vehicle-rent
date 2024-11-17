<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <!-- Include Bootstrap CSS -->
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
    </style>
</head>
<body>
<div class="top-bar" style="width: 100%; background-color: purple; font-weight: bold; text-align: center; padding: 10px;">
    <h1 style="margin: 0; color: white;">Pawan Travels</h1>
</div>

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

                <!-- <button onclick="alert('Redirect to Add Package')" class="btn btn-primary" 
                        style="background-color: #4b0082; border: none;">
                    Add Package
                </button> -->
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
                        <tr>
                            <td>1</td>
                            <td>Bus A</td>
                            <td>
                                <span class="badge bg-success">Available</span>
                            </td>
                            <td>
                                <button class="btn btn-warning btn-sm">Toggle Availability</button>
                                <button class="btn btn-danger btn-sm">Delete</button>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Bus B</td>
                            <td>
                                <span class="badge bg-danger">Unavailable</span>
                            </td>
                            <td>
                                <button class="btn btn-warning btn-sm">Toggle Availability</button>
                                <button class="btn btn-danger btn-sm">Delete</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Include Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
