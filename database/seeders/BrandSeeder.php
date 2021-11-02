<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Brand;

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
                'image' => 'assets/brand/brand-seeder/jacobs-1.png',
                'category_id' => 1,
            ],
            // id=2
            [
                'name' => 'Maxwell House',
                'image' => 'assets/brand/brand-seeder/maxwell-house-2.png',
                'category_id' => 1,
            ],
            // id=3
            [
                'name' => 'Nescafe',
                'image' => 'assets/brand/brand-seeder/nescafe-3.png',
                'category_id' => 1,
            ],
            // id=4
            [
                'name' => 'Tchibo',
                'image' => 'assets/brand/brand-seeder/tchibo-4.png',
                'category_id' => 1,
            ],
            // id=5
            [
                'name' => 'Davidoff',
                'image' => 'assets/brand/brand-seeder/davidoff-5.png',
                'category_id' => 1,
            ],
            // id=6
            [
                'name' => 'MacCoffee',
                'image' => 'assets/brand/brand-seeder/mac-coffee-6.png',
                'category_id' => 1,
            ],
            // id=7
            [
                'name' => 'Carte Noire',
                'image' => 'assets/brand/brand-seeder/carte-noire-7.png',
                'category_id' => 1,
            ],
            // id=8
            [
                'name' => 'J.J.Darboven',
                'image' => 'assets/brand/brand-seeder/j-j-darboven-8.png',
                'category_id' => 1,
            ],
            // id=9
            [
                'name' => 'Mövenpick',
                'image' => 'assets/brand/brand-seeder/movenpick-9.png',
                'category_id' => 1,
            ],
            // id=10
            [
                'name' => 'Kurukahveci',
                'image' => 'assets/brand/brand-seeder/kurukahveci-10.png',
                'category_id' => 1,
            ],
            // id=11
            [
                'name' => 'Kahve Dünyası',
                'image' => 'assets/brand/brand-seeder/kahve-dunyasi-11.png',
                'category_id' => 1,
            ],
            // id=12
            [
                'name' => 'Markow',
                'image' => 'assets/brand/brand-seeder/markow-12.png',
                'category_id' => 1,
            ],
            // id=13
            [
                'name' => 'Torabika',
                'image' => 'assets/brand/brand-seeder/torabika-13.png',
                'category_id' => 1,
            ],
            // id=14
            [
                'name' => 'Emin Et',
                'image' => 'assets/brand/brand-seeder/emin-et-14.png',
                'category_id' => 1,
            ],
            // id=15
            [
                'name' => 'Hindi Towugy',
                'image' => 'assets/brand/brand-seeder/hindi-towugy-15.png',
                'category_id' => 1,
            ],
            // id=16
            [
                'name' => 'Talhan',
                'image' => 'assets/brand/brand-seeder/talhan-16.png',
                'category_id' => 1,
            ],
            // id=17
            [
                'name' => 'Çeçek',
                'image' => 'assets/brand/brand-seeder/cecek-17.png',
                'category_id' => 1,
            ],
            // id=18
            [
                'name' => 'Balgaýmak',
                'image' => 'assets/brand/brand-seeder/balgaymak-18.png',
                'category_id' => 1,
            ],
            // id=19
            [
                'name' => 'Zamana',
                'image' => 'assets/brand/brand-seeder/zamana-19.png',
                'category_id' => 1,
            ],
            // id=20
            [
                'name' => 'Aýaz baba',
                'image' => 'assets/brand/brand-seeder/ayaz-baba-20.png',
                'category_id' => 1,
            ],
            // id=21
            [
                'name' => 'Sahabatly',
                'image' => 'assets/brand/brand-seeder/sahabatly-21.png',
                'category_id' => 1,
            ],
            // id=22
            [
                'name' => 'Şawat',
                'image' => 'assets/brand/brand-seeder/shawat-22.png',
                'category_id' => 1,
            ],
            // id=23
            [
                'name' => 'Elin',
                'image' => 'assets/brand/brand-seeder/elin-23.png',
                'category_id' => 1,
            ],
            // id=24
            [
                'name' => 'Her gün',
                'image' => 'assets/brand/brand-seeder/her-gun-24.png',
                'category_id' => 1,
            ],
            // id=25
            [
                'name' => 'Oreo',
                'image' => 'assets/brand/brand-seeder/oreo-25.png',
                'category_id' => 1,
            ],
            // id=26
            [
                'name' => 'Alpen Gold',
                'image' => 'assets/brand/brand-seeder/alpen-gold-26.png',
                'category_id' => 1,
            ],
            // id=27
            [
                'name' => 'Nestle',
                'image' => 'assets/brand/brand-seeder/nestle-27.png',
                'category_id' => 1,
            ],
            // id=28
            [
                'name' => 'Raffaello',
                'image' => 'assets/brand/brand-seeder/raffaello-28.png',
                'category_id' => 1,
            ],
            // id=29
            [
                'name' => 'Ferrero Rocher',
                'image' => 'assets/brand/brand-seeder/ferrero-rocher-29.png',
                'category_id' => 1,
            ],
            // id=30
            [
                'name' => 'Nutella',
                'image' => 'assets/brand/brand-seeder/nutella-30.png',
                'category_id' => 1,
            ],
            // id=31
            [
                'name' => 'Kinder',
                'image' => 'assets/brand/brand-seeder/kinder-31.png',
                'category_id' => 1,
            ],
            // id=32
            [
                'name' => 'Nesquik',
                'image' => 'assets/brand/brand-seeder/nesquik-32.png',
                'category_id' => 1,
            ],
            // id=33
            [
                'name' => 'Sarelle',
                'image' => 'assets/brand/brand-seeder/sarelle-33.png',
                'category_id' => 1,
            ],
            // id=34
            [
                'name' => 'Balin',
                'image' => 'assets/brand/brand-seeder/balin-34.png',
                'category_id' => 1,
            ],
            // id=35
            [
                'name' => 'Perfecto',
                'image' => 'assets/brand/brand-seeder/perfecto-35.png',
                'category_id' => 1,
            ],
            // id=36
            [
                'name' => 'Derek',
                'image' => 'assets/brand/brand-seeder/derek-36.png',
                'category_id' => 1,
            ],
            // id=37
            [
                'name' => 'Alpinella',
                'image' => 'assets/brand/brand-seeder/alpinella-37.png',
                'category_id' => 1,
            ],
            // id=38
            [
                'name' => 'Волшебница',
                'image' => 'assets/brand/brand-seeder/volshebnitsa-38.png',
                'category_id' => 1,
            ],
            // id=39
            [
                'name' => 'Спартак',
                'image' => 'assets/brand/brand-seeder/spartak-39.png',
                'category_id' => 1,
            ],
            // id=40
            [
                'name' => 'Crafers',
                'image' => 'assets/brand/brand-seeder/crafers-40.png',
                'category_id' => 1,
            ],
            // id=41
            [
                'name' => 'Elvan',
                'image' => 'assets/brand/brand-seeder/elvan-41.png',
                'category_id' => 1,
            ],
            // id=42
            [
                'name' => 'Doganlar Ýyldyzy',
                'image' => 'assets/brand/brand-seeder/doganlar-yyldyzy-42.png',
                'category_id' => 1,
            ],
            // id=43
            [
                'name' => 'Белый Мишка',
                'image' => 'assets/brand/brand-seeder/belyy-mishka-43.png',
                'category_id' => 1,
            ],
            // id=44
            [
                'name' => 'Idilia foods',
                'image' => 'assets/brand/brand-seeder/idilia-foods-44.png',
                'category_id' => 1,
            ],
            // id=45
            [
                'name' => 'Милкимоны',
                'image' => 'assets/brand/brand-seeder/milkimony-45.png',
                'category_id' => 1,
            ],
            // id=46
            [
                'name' => 'Нежный',
                'image' => 'assets/brand/brand-seeder/nezhnyy-46.png',
                'category_id' => 1,
            ],


            // <-- end:: category_id=1 Azyk harytlar -->
        ];

        // <-- begin:: Brands -->
        foreach ($brands as $brand) 
        {
            Brand::create([
                'name' => $brand['name'],
                'image' => $brand['image'],
                'category_id' => $brand['category_id'],
            ]); 
        }
        // <-- end:: Brands -->
    }
}
