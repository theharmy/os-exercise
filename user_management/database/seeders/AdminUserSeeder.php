<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // create admin user
        User::create([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('admin123'),
            'role' => 'admin'
        ]);

        // Create test regular user
        User::create([
            'name' => 'testuser',
            'email' => 'user@test.com',
            'password' => Hash::make('user123'),
            'role' => 'user'
        ]);

        echo "Admin user created: admin@admin.com / admin123\n";
        echo "Test user created: user@test.com / user123\n";
    }
}
