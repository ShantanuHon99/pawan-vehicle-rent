<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Vehicle;

class VehicleController extends Controller
{
    public function create()
    {
        return view('admin.addvehicle');  // This will load the addvehicle form
    }

    public function store(Request $request)
{
    // Validate the form data
    $request->validate([
        'driver_name' => 'required|string',
        'vehicle_type' => 'required|string',
        'vehicle_number' => 'required|string',
        'vehicle_pics' => 'required|array',
        'vehicle_pics.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ]);

    // If validation fails, this will automatically return a response
    
    try {
        // Handle the image upload
        $imagePaths = [];
        if ($request->hasFile('vehicle_pics')) {
            foreach ($request->file('vehicle_pics') as $image) {
                // Store each image and get the path
                $imagePaths[] = $image->store('vehicles', 'public');
            }
        }

        // Store the vehicle data
        $vehicle = new Vehicle();
        $vehicle->driver_name = $request->driver_name;
        $vehicle->vehicle_type = $request->vehicle_type;
        $vehicle->vehicle_number = $request->vehicle_number;
       
        $vehicle->available = $request->available;
        $vehicle->save();
        dd($request->all());

        // Notify the user
        return redirect()->route('admin.addvehicle')->with('success', 'Vehicle added successfully!');
    } catch (\Exception $e) {
        // Log any errors
        \Log::error('Error inserting vehicle: ' . $e->getMessage());

        // Notify user about the error
        return redirect()->route('admin.addvehicle')->with('error', 'Failed to add vehicle. Please try again.');
    }
   
}

}
