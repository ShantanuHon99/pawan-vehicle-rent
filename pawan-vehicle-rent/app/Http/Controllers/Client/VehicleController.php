<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Vehicle;

class VehicleController extends Controller
{
    public function index()
    {
        // Fetch all available vehicles
        $vehicles = Vehicle::where('available', true)->get();
        return view('client.vehicles', compact('vehicles'));  // Display vehicles to the client
    }
}


