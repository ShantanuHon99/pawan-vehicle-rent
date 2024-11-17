<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Vehicle;

class VehicleController extends Controller
{
    // Show the add vehicle form
    public function create()
    {
        return view('admin/addvehicle'); // Ensure the blade file is named correctly
    }

    // Handle the form submission
    public function store(Request $request)
    {
        $request->validate([
            'driver_name' => 'required|string|max:255',
            'vehicle_type' => 'required|string|max:255',
            'vehicle_number' => 'required|string|max:255|unique:vehicles',
            'vehicle_pic.*' => 'required|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
        ]);

        // Save the vehicle details
        $vehicle = new Vehicle();
        $vehicle->driver_name = $request->input('driver_name');
        $vehicle->vehicle_type = $request->input('vehicle_type');
        $vehicle->vehicle_number = $request->input('vehicle_number');
        $vehicle->available = $request->has('available');

        // Save images and store paths
        $imagePaths = [];
        if ($request->hasFile('vehicle_pic')) {
            foreach ($request->file('vehicle_pic') as $image) {
                $path = $image->store('vehicle_images', 'public');
                $imagePaths[] = $path;
            }
        }

        $vehicle->vehicle_pictures = json_encode($imagePaths);
        $vehicle->save();

        return redirect()->route('addvehicle')->with('success', 'Vehicle added successfully!');
    }
}
