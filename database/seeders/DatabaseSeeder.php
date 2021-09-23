<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\Category::factory(24)->create();

        $this->call([
            AdminSeeder::class,
            UserSeeder::class,
            CategorySeeder::class,
        ]);
    }
}
