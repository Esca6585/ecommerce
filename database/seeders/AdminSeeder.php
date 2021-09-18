<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\Admin;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Admin::firstOrCreate(
            [
                'email' => 'admin'.'@gmail.com',
            ],
            [
                'name' => 'Admin',
                'surname' => 'Adminow',
                'password' => Hash::make('password'),
                'remember_token' => Str::random(10),
            ]
        );
    }
}
