<?php
// database/seeders/AdminSeeder.php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    public function run()
    {
        Admin::create([
            'name' => 'Super Admin',
            'email' => 'admin@pawantravels.com', // Adjust the email as needed
            'password' => Hash::make('pawantravels@2024') // Adjust the password as needed
        ]);
    }
}
