<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AkunSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Admin Badean App',
            'email' => 'badean@badean.com',
            'password' => Hash::make('badean123'),
            'is_admin' => true,
        ]);
    }
}
