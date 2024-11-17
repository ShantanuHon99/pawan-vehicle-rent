<?php

// app/Http/Controllers/AdminAuthController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AdminAuthController extends Controller
{
    // Show the login form
    public function showLoginForm()
    {
        return view('admin.auth.login');
    }

    // Handle the login request
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->route('admin.dashboard')->with('success', 'Login successful!');
        } else {
            return back()->with('error', 'Invalid credentials');
        }
    }

    // Show the registration form
    public function showRegisterForm()
    {
        return view('admin.auth.register');
    }

    // Handle the register request
    // app/Http/Controllers/AdminAuthController.php

// app/Http/Controllers/AdminAuthController.php

public function register(Request $request)
{
    $validator = Validator::make($request->all(), [
        'name' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:admins',
        'password' => 'required|string|min:8|confirmed',
        'pre_seeded_password' => 'required|string', // Validate the pre-seeded password field
    ]);

    if ($validator->fails()) {
        return redirect()->route('admin.register')
                    ->withErrors($validator)
                    ->withInput();
    }

    // Check if the entered pre-seeded password matches the pre-seeded admin's password
    $preSeededAdmin = Admin::where('email', 'admin@pawantravels.com')->first();
    if ($preSeededAdmin && Hash::check($request->pre_seeded_password, $preSeededAdmin->password)) {
        // Create the new admin after validating pre-seeded password
        Admin::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('admin.login')->with('success', 'Registration successful, please log in.');
    }

    return back()->with('error', 'The pre-seeded admin password does not match.');
}
 public function logout()
    {
        Auth::guard('admin')->logout(); // Log out the admin
        return redirect()->route('admin.login')->with('success', 'You have successfully logged out.');
    }

}
