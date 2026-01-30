<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Create admin user if it doesn't exist
        $admin = User::where('email', 'aridhi123@gmail.com')->first();
        
        if (!$admin) {
            User::create([
                'name' => 'Admin User',
                'email' => 'aridhi123@gmail.com',
                'password' => Hash::make('9090@Admin2025'),
                'is_admin' => true,
            ]);
        } else {
            // Update the password if the user exists
            $admin->update([
                'password' => Hash::make('9090@Admin2025'),
                'is_admin' => true,
            ]);
        }
        
        // Create a few sample regular users (only if none exist)
        if (User::count() == 1) {
            User::factory()->count(5)->create();
        }
    }
}