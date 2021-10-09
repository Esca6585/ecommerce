<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $brands = [
            // <-- begin:: category_id=1 Azyk harytlar -->
            // id=1
            [
                'name' => 'Jacobs',
                'images' => ['thumb' => 'assets/brand/brand-seeder/jacobs-1.png',   'original' => 'assets/brand/brand-seeder/jacobs-1.png'],
                'category_id' => 1,
            ],
            // id=2
            [
                'name' => 'Maxwell House',
                'images' => ['thumb' => 'assets/brand/brand-seeder/maxwell-house-2.png',   'original' => 'assets/brand/brand-seeder/maxwell-house-2.png'],
                'category_id' => 1,
            ],
            // id=3
            [
                'name' => 'Nescafe',
                'images' => ['thumb' => 'assets/brand/brand-seeder/nescafe-3.png',   'original' => 'assets/brand/brand-seeder/nescafe-3.png'],
                'category_id' => 1,
            ],
            // id=4
            [
                'name' => 'Tchibo',
                'images' => ['thumb' => 'assets/brand/brand-seeder/tchibo-4.png',   'original' => 'assets/brand/brand-seeder/tchibo-4.png'],
                'category_id' => 1,
            ],
            // id=5
            [
                'name' => 'Davidoff',
                'images' => ['thumb' => 'assets/brand/brand-seeder/davidoff-5.png',   'original' => 'assets/brand/brand-seeder/davidoff-5.png'],
                'category_id' => 1,
            ],
            
            // <-- end:: category_id=1 Azyk harytlar -->
        ];
    }
}
