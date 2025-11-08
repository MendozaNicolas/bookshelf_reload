<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::firstOrCreate(
            ['email' => 'admin@admin.com'],
            [
                'name' => 'Admin',
                'password' => bcrypt('admin123'),
            ]
        );
        User::firstOrCreate(
            ['email' => 'geiquinnujicreu-5233@wir-sind.com'],
            [
                'name' => 'Super Admin',
                'password' => bcrypt('root'),
            ]
        );
    }
}
