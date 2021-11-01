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
            // id=6
            [
                'name' => 'MacCoffee',
                'images' => ['thumb' => 'assets/brand/brand-seeder/mac-coffee-6.png',   'original' => 'assets/brand/brand-seeder/mac-coffee-6.png'],
                'category_id' => 1,
            ],
            // id=7
            [
                'name' => 'Carte Noire',
                'images' => ['thumb' => 'assets/brand/brand-seeder/carte-noire-7.png',   'original' => 'assets/brand/brand-seeder/carte-noire-7.png'],
                'category_id' => 1,
            ],
            // id=8
            [
                'name' => 'J.J.Darboven',
                'images' => ['thumb' => 'assets/brand/brand-seeder/j-j-darboven-8.png',   'original' => 'assets/brand/brand-seeder/j-j-darboven-8.png'],
                'category_id' => 1,
            ],
            // id=9
            [
                'name' => 'Mövenpick',
                'images' => ['thumb' => 'assets/brand/brand-seeder/movenpick-9.png',   'original' => 'assets/brand/brand-seeder/movenpick-9.png'],
                'category_id' => 1,
            ],
            // id=10
            [
                'name' => 'Kurukahveci',
                'images' => ['thumb' => 'assets/brand/brand-seeder/kurukahveci-10.png',   'original' => 'assets/brand/brand-seeder/kurukahveci-10.png'],
                'category_id' => 1,
            ],
            // id=11
            [
                'name' => 'Kahve Dünyası',
                'images' => ['thumb' => 'assets/brand/brand-seeder/kahve-dunyasi-11.png',   'original' => 'assets/brand/brand-seeder/kahve-dunyasi-11.png'],
                'category_id' => 1,
            ],
            // id=12
            [
                'name' => 'Markow',
                'images' => ['thumb' => 'assets/brand/brand-seeder/markow-12.png',   'original' => 'assets/brand/brand-seeder/markow-12.png'],
                'category_id' => 1,
            ],
            // id=13
            [
                'name' => 'Torabika',
                'images' => ['thumb' => 'assets/brand/brand-seeder/torabika-13.png',   'original' => 'assets/brand/brand-seeder/torabika-13.png'],
                'category_id' => 1,
            ],
            // id=14
            [
                'name' => 'Emin Et',
                'images' => ['thumb' => 'assets/brand/brand-seeder/emin-et-14.png',   'original' => 'assets/brand/brand-seeder/emin-et-14.png'],
                'category_id' => 1,
            ],
            // id=15
            [
                'name' => 'Hindi Towugy',
                'images' => ['thumb' => 'assets/brand/brand-seeder/hindi-towugy-15.png',   'original' => 'assets/brand/brand-seeder/hindi-towugy-15.png'],
                'category_id' => 1,
            ],
            // id=16
            [
                'name' => 'Talhan',
                'images' => ['thumb' => 'assets/brand/brand-seeder/talhan-16.png',   'original' => 'assets/brand/brand-seeder/talhan-16.png'],
                'category_id' => 1,
            ],
            // id=17
            [
                'name' => 'Çeçek',
                'images' => ['thumb' => 'assets/brand/brand-seeder/cecek-17.png',   'original' => 'assets/brand/brand-seeder/cecek-17.png'],
                'category_id' => 1,
            ],
            // id=18
            [
                'name' => 'Balgaýmak',
                'images' => ['thumb' => 'assets/brand/brand-seeder/balgaymak-18.png',   'original' => 'assets/brand/brand-seeder/balgaymak-18.png'],
                'category_id' => 1,
            ],
            // id=19
            [
                'name' => 'Zamana',
                'images' => ['thumb' => 'assets/brand/brand-seeder/zamana-19.png',   'original' => 'assets/brand/brand-seeder/zamana-19.png'],
                'category_id' => 1,
            ],
            // id=20
            [
                'name' => 'Aýaz baba',
                'images' => ['thumb' => 'assets/brand/brand-seeder/ayaz-baba-20.png',   'original' => 'assets/brand/brand-seeder/ayaz-baba-20.png'],
                'category_id' => 1,
            ],
            // id=21
            [
                'name' => 'Sahabatly',
                'images' => ['thumb' => 'assets/brand/brand-seeder/sahabatly-21.png',   'original' => 'assets/brand/brand-seeder/sahabatly-21.png'],
                'category_id' => 1,
            ],
            // id=22
            [
                'name' => 'Şawat',
                'images' => ['thumb' => 'assets/brand/brand-seeder/shawat-22.png',   'original' => 'assets/brand/brand-seeder/shawat-22.png'],
                'category_id' => 1,
            ],
            // id=23
            [
                'name' => 'Elin',
                'images' => ['thumb' => 'assets/brand/brand-seeder/elin-23.png',   'original' => 'assets/brand/brand-seeder/elin-23.png'],
                'category_id' => 1,
            ],
            // id=24
            [
                'name' => 'Her gün',
                'images' => ['thumb' => 'assets/brand/brand-seeder/her-gun-24.png',   'original' => 'assets/brand/brand-seeder/her-gun-24.png'],
                'category_id' => 1,
            ],
            // id=25
            [
                'name' => 'Oreo',
                'images' => ['thumb' => 'assets/brand/brand-seeder/oreo-25.png',   'original' => 'assets/brand/brand-seeder/oreo-25.png'],
                'category_id' => 1,
            ],
            // id=26
            [
                'name' => 'Alpen Gold',
                'images' => ['thumb' => 'assets/brand/brand-seeder/alpen-gold-26.png',   'original' => 'assets/brand/brand-seeder/alpen-gold-26.png'],
                'category_id' => 1,
            ],
            // id=27
            [
                'name' => 'Nestle',
                'images' => ['thumb' => 'assets/brand/brand-seeder/nestle-27.png',   'original' => 'assets/brand/brand-seeder/nestle-27.png'],
                'category_id' => 1,
            ],
            // id=28
            [
                'name' => 'Raffaello',
                'images' => ['thumb' => 'assets/brand/brand-seeder/raffaello-28.png',   'original' => 'assets/brand/brand-seeder/raffaello-28.png'],
                'category_id' => 1,
            ],
            // id=29
            [
                'name' => 'Ferrero Rocher',
                'images' => ['thumb' => 'assets/brand/brand-seeder/ferrero-rocher-29.png',   'original' => 'assets/brand/brand-seeder/ferrero-rocher-29.png'],
                'category_id' => 1,
            ],
            // id=30
            [
                'name' => 'Nutella',
                'images' => ['thumb' => 'assets/brand/brand-seeder/nutella-30.png',   'original' => 'assets/brand/brand-seeder/nutella-30.png'],
                'category_id' => 1,
            ],
            // id=31
            [
                'name' => 'Kinder',
                'images' => ['thumb' => 'assets/brand/brand-seeder/kinder-31.png',   'original' => 'assets/brand/brand-seeder/kinder-31.png'],
                'category_id' => 1,
            ],
            // id=32
            [
                'name' => 'Nesquik',
                'images' => ['thumb' => 'assets/brand/brand-seeder/nesquik-32.png',   'original' => 'assets/brand/brand-seeder/nesquik-32.png'],
                'category_id' => 1,
            ],
            // id=33
            [
                'name' => 'Sarelle',
                'images' => ['thumb' => 'assets/brand/brand-seeder/sarelle-33.png',   'original' => 'assets/brand/brand-seeder/sarelle-33.png'],
                'category_id' => 1,
            ],
            // id=34
            [
                'name' => 'Balin',
                'images' => ['thumb' => 'assets/brand/brand-seeder/balin-34.png',   'original' => 'assets/brand/brand-seeder/balin-34.png'],
                'category_id' => 1,
            ],
            // id=35
            [
                'name' => 'Perfecto',
                'images' => ['thumb' => 'assets/brand/brand-seeder/perfecto-35.png',   'original' => 'assets/brand/brand-seeder/perfecto-35.png'],
                'category_id' => 1,
            ],
            // id=36
            [
                'name' => 'Derek',
                'images' => ['thumb' => 'assets/brand/brand-seeder/derek-36.png',   'original' => 'assets/brand/brand-seeder/derek-36.png'],
                'category_id' => 1,
            ],
            // id=37
            [
                'name' => 'Alpinella',
                'images' => ['thumb' => 'assets/brand/brand-seeder/alpinella-37.png',   'original' => 'assets/brand/brand-seeder/alpinella-37.png'],
                'category_id' => 1,
            ],
            // id=38
            [
                'name' => 'Волшебница',
                'images' => ['thumb' => 'assets/brand/brand-seeder/volshebnitsa-38.png',   'original' => 'assets/brand/brand-seeder/volshebnitsa-38.png'],
                'category_id' => 1,
            ],
            // id=39
            [
                'name' => 'Спартак',
                'images' => ['thumb' => 'assets/brand/brand-seeder/spartak-39.png',   'original' => 'assets/brand/brand-seeder/spartak-39.png'],
                'category_id' => 1,
            ],
            // id=40
            [
                'name' => 'Crafers',
                'images' => ['thumb' => 'assets/brand/brand-seeder/crafers-40.png',   'original' => 'assets/brand/brand-seeder/crafers-40.png'],
                'category_id' => 1,
            ],
            // id=41
            [
                'name' => 'Elvan',
                'images' => ['thumb' => 'assets/brand/brand-seeder/elvan-41.png',   'original' => 'assets/brand/brand-seeder/elvan-41.png'],
                'category_id' => 1,
            ],
            // id=42
            [
                'name' => 'Doganlar Ýyldyzy',
                'images' => ['thumb' => 'assets/brand/brand-seeder/doganlar-yyldyzy-42.png',   'original' => 'assets/brand/brand-seeder/doganlar-yyldyzy-42.png'],
                'category_id' => 1,
            ],
            // id=43
            [
                'name' => 'Белый Мишка',
                'images' => ['thumb' => 'assets/brand/brand-seeder/belyy-mishka-43.png',   'original' => 'assets/brand/brand-seeder/belyy-mishka-43.png'],
                'category_id' => 1,
            ],
            // id=44
            [
                'name' => 'Idilia foods',
                'images' => ['thumb' => 'assets/brand/brand-seeder/idilia-foods-44.png',   'original' => 'assets/brand/brand-seeder/idilia-foods-44.png'],
                'category_id' => 1,
            ],
            // id=45
            [
                'name' => 'Милкимоны',
                'images' => ['thumb' => 'assets/brand/brand-seeder/milkimony-45.png',   'original' => 'assets/brand/brand-seeder/milkimony-45.png'],
                'category_id' => 1,
            ],
            // id=46
            [
                'name' => 'Нежный',
                'images' => ['thumb' => 'assets/brand/brand-seeder/nezhnyy-46.png',   'original' => 'assets/brand/brand-seeder/nezhnyy-46.png'],
                'category_id' => 1,
            ],


            // <-- end:: category_id=1 Azyk harytlar -->
        ];

        // <-- begin:: Brands -->
        foreach ($brands as $brand) 
        {
            Brand::create([
                'name' => $brand['name'],
                'images' => $brand['images'],
                'category_id' => $brand['category_id'],
            ]); 
        }
        // <-- end:: Brands -->
    }
}
