<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Vehicle;
use Illuminate\Support\Facades\Auth;


class VehicleController extends Controller
{

    // In your VehicleController
// In VehicleController.php

public function index()
    {
        // Check if the admin is authenticated
        if (!Auth::guard('admin')->check()) {
            // If not authenticated, redirect to login page
            return redirect()->route('admin.login')->with('error', 'Please log in to access the dashboard.');
        }

        // Fetch vehicles for the dashboard
        $vehicles = Vehicle::all();
        
        // Return the dashboard view with vehicle data
        return view('admin.dashboard', compact('vehicles'));
    }

public function toggleAvailability($id) {
    $vehicle = Vehicle::findOrFail($id);
    // Toggle the availability status
    $vehicle->available = !$vehicle->available;
    $vehicle->save();
    return redirect()->route('admin.dashboard')->with('success', 'Vehicle availability toggled successfully!');
}

public function deleteVehicle($id) {
    $vehicle = Vehicle::findOrFail($id);
    // Delete the vehicle
    $vehicle->delete();
    return redirect()->route('admin.dashboard')->with('success', 'Vehicle deleted successfully!');
}

    // Show the add vehicle form
    public function showAvailableVehicles()
    {
        // Fetch all available vehicles from the database
        $vehicles = Vehicle::all();

        return view('admin.addvehicle', compact('vehicles')); // Pass the vehicles data to the view
    }

    // Handle the form submission
    public function store(Request $request)
{
    // Validate the incoming request
    $request->validate([
        'driver_name' => 'required|string|max:255',
        'driver_contact' => 'required|string|max:15', // Validation for driver contact
        'vehicle_type' => 'required|string|max:255',
        'vehicle_number' => 'required|string|max:255|unique:vehicles',
        'vehicle_pic.*' => 'required|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
    ]);

    // Save the vehicle details
    $vehicle = new Vehicle();
    $vehicle->driver_name = $request->input('driver_name');
    $vehicle->driver_contact = $request->input('driver_contact'); // Add driver contact
    $vehicle->vehicle_type = $request->input('vehicle_type');
    $vehicle->vehicle_number = $request->input('vehicle_number');
    $vehicle->available = $request->has('available');

    // Save images and store paths
    $imagePaths = [];
    if ($request->hasFile('vehicle_pic')) {
        foreach ($request->file('vehicle_pic') as $image) {
            $path = $image->store('vehicle_images', 'public'); // Store each image
            $imagePaths[] = $path;
        }
    }

    $vehicle->vehicle_pictures = json_encode($imagePaths); // Save image paths as JSON
    $vehicle->save(); // Save the vehicle record

    return redirect()->route('addvehicle')->with('success', 'Vehicle added successfully!');
}

}
