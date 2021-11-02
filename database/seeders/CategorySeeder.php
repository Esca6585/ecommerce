<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $parentCategories = [
                // id=1
            [
                'name_tm' => 'Azyk harytlar',
                'name_en' => 'Foodstuffs',
                'name_ru' => 'Продовольственные товары',
                'image' => 'assets/category/category-seeder/grocery-2.png',
                'category_id' => null,
            ],
                // id=2
            [
                'name_tm' => 'Gözellik we ideg',
                'name_en' => 'Beauty and care',
                'name_ru' => 'Красота и уход',
                'image' => 'assets/category/category-seeder/cosmetics-2.png',
                'category_id' => null,
            ],
                // id=3
            [
                'name_tm' => 'Arassaçylyk serişdeler',
                'name_en' => 'Household chemicals',
                'name_ru' => 'Бытовая химия',
                'image' => 'assets/category/category-seeder/shampoo-2.png',
                'category_id' => null,
            ],
                // id=4
            [
                'name_tm' => 'Çaga we ejeler üçin',
                'name_en' => 'For children and mothers',
                'name_ru' => 'Для детей и мам',
                'image' => 'assets/category/category-seeder/baby-boy-2.png',
                'category_id' => null,
            ],
                // id=5
            [
                'name_tm' => 'Elektronika',
                'name_en' => 'Electronics',
                'name_ru' => 'Электроника',
                'image' => 'assets/category/category-seeder/electronics-1.png',
                'category_id' => null,
            ],
                // id=6
            [
                'name_tm' => 'Hojalyk tehnika',
                'name_en' => 'Household appliances',
                'name_ru' => 'Бытовая техника',
                'image' => 'assets/category/category-seeder/house-appliances-2.png',
                'category_id' => null,
            ],
                // id=7
            [
                'name_tm' => 'Öý we bag',
                'name_en' => 'A house and a garden',
                'name_ru' => 'Дом и сад',
                'image' => 'assets/category/category-seeder/home-decor-1.png',
                'category_id' => null,
            ],
                // id=8
            [
                'name_tm' => 'Awtoulag we motor',
                'name_en' => 'Car and motor',
                'name_ru' => 'Автомобиль и мотор',
                'image' => 'assets/category/category-seeder/car-1.png',
                'category_id' => null,
            ],
                // id=9
            [
                'name_tm' => 'Kompýuterler we torlar',
                'name_en' => 'Computers and networks',
                'name_ru' => 'Компьютеры и сети',
                'image' => 'assets/category/category-seeder/macbook-1.png',
                'category_id' => null,
            ],
                // id=10
            [
                'name_tm' => 'Beýlekiler',
                'name_en' => 'Other',
                'name_ru' => 'Другие',
                'image' => 'assets/category/category-seeder/other-2.png',
                'category_id' => null,
            ],
        ];

        $subCategories = [
            // <-- begin:: Azyk harytlar (Parent Category) id=1 -->
                // id=11
            [
                'name_tm' => 'Gök we bakja önümleri',
                'name_en' => 'Fruits and vegetables',
                'name_ru' => 'Фрукты и овощи',
                'image' => 'assets/category/category-seeder/no-photo.png',
                'category_id' => 1,
            ],
                // id=12
            [
                'name_tm' => 'Et we şöhlat önümleri',
                'name_en' => 'Meat and sausages',
                'name_ru' => 'Мясные и колбасные изделия',
                'image' => 'assets/category/category-seeder/no-photo.png',
                'category_id' => 1,
            ],
                // id=13
            [
                'name_tm' => 'Bakaleýa',
                'name_en' => 'Grocery',
                'name_ru' => 'Бакалея',
                'image' => 'assets/category/category-seeder/no-photo.png',
                'category_id' => 1,
            ],
                // id=14
            [
                'name_tm' => 'Çörek we konditer önümleri',
                'name_en' => 'Bread and pastries',
                'name_ru' => 'Хлеб и выпечка',
                'image' => 'assets/category/category-seeder/no-photo.png',
                'category_id' => 1,
            ],
                // id=15
            [
                'name_tm' => 'Ertirlik',
                'name_en' => 'Breakfast',
                'name_ru' => 'Завтраки',
                'image' => 'assets/category/category-seeder/no-photo.png',
                'category_id' => 1,
            ],
                // id=16
            [
                'name_tm' => 'Çaý, kofe, kakao',
                'name_en' => 'Tea, coffee, hot drinks',
                'name_ru' => 'Чай, кофе, горячие напитки',
                'image' => 'assets/category/category-seeder/no-photo.png',
                'category_id' => 1,
            ],
                // id=17
            [
                'name_tm' => 'Aşhana, Kulinariýa',
                'name_en' => 'Kitchen, Culinary',
                'name_ru' => 'Кухня, Кулинария',
                'image' => 'assets/category/category-seeder/no-photo.png',
                'category_id' => 1,
            ],
                // id=18
            [
                'name_tm' => 'Konserwirlenen iýmit',
                'name_en' => 'Canned food',
                'name_ru' => 'Консервы',
                'image' => 'assets/category/category-seeder/no-photo.png',
                'category_id' => 1,
            ],
                // id=19
            [
                'name_tm' => 'Ketçup, maýonez, sous',
                'name_en' => 'Ketchup, mayonnaise, sauce',
                'name_ru' => 'Кетчуп, майонез, соус',
                'image' => 'assets/category/category-seeder/no-photo.png',
                'category_id' => 1,
            ],
                // id=20
            [
                'name_tm' => 'Ösümlik ýagy, uksus',
                'name_en' => 'Vegetable oil, vinegar',
                'name_ru' => 'Масло растительное, уксус',
                'image' => 'assets/category/category-seeder/no-photo.png',
                'category_id' => 1,
            ],
                // id=21
            [
                'name_tm' => 'Tiz nahar',
                'name_en' => 'Fast food',
                'name_ru' => 'Обеды быстрого приготовления',
                'image' => 'assets/category/category-seeder/no-photo.png',
                'category_id' => 1,
            ],
                // id=22
            [
                'name_tm' => 'Alkogolsyz içgiler',
                'name_en' => 'Non-alcoholic beverages',
                'name_ru' => 'Безалкогольные напитки',
                'image' => 'assets/category/category-seeder/no-photo.png',
                'category_id' => 1,
            ],
                // id=23
            [
                'name_tm' => 'Köke, kreker, wafli',
                'name_en' => 'Cookies, crackers, waffles',
                'name_ru' => 'Печенье, крекеры, вафли',
                'image' => 'assets/category/category-seeder/no-photo.png',
                'category_id' => 1,
            ],
                // id=24
            [
                'name_tm' => 'Şokolad, süýjülikler',
                'name_en' => 'Chocolate, sweets',
                'name_ru' => 'Шоколад, конфеты, сладости',
                'image' => 'assets/category/category-seeder/no-photo.png',
                'category_id' => 1,
            ],
                // id=25
            [
                'name_tm' => 'Maňyzlar, guradylan miweler',
                'name_en' => 'Other',
                'name_ru' => 'Орехи, сухофрукты',
                'image' => 'assets/category/category-seeder/no-photo.png',
                'category_id' => 1,
            ],
                // id=26
            [
                'name_tm' => 'Tort, biskwitler',
                'name_en' => 'Cakes, biscuits',
                'name_ru' => 'Торты, бисквиты',
                'image' => 'assets/category/category-seeder/no-photo.png',
                'category_id' => 1,
            ],
                // id=27
            [
                'name_tm' => 'Çipsy, suharikler',
                'name_en' => 'Chips, croutons',
                'name_ru' => 'Чипсы, сухарики',
                'image' => 'assets/category/category-seeder/no-photo.png',
                'category_id' => 1,
            ],
                // id=28
            [
                'name_tm' => 'Desert üçin souslar, ballar',
                'name_en' => 'Dessert sauces, jam, honey',
                'name_ru' => 'Десертные соусы, варенье, мед',
                'image' => 'assets/category/category-seeder/no-photo.png',
                'category_id' => 1,
            ],
            // <-- end:: Azyk harytlar (Parent Category) id=1 -->
            
            // <-- begin:: Gözellik we ideg (Parent Category) id=2 -->
                // id=29
            [
                'name_tm' => 'Kosmetika, parfumeriýa, serişdeler',
                'name_en' => 'Body care, perfumery',
                'name_ru' => 'Уход за телом, парфюмерия',
                'image' => 'assets/category/category-seeder/no-photo.png',
                'category_id' => 2,
            ],
                // id=30
            [
                'name_tm' => 'Diş saglygy we arassaçylygy',
                'name_en' => 'Oral care',
                'name_ru' => 'Уход за полостью рта',
                'image' => 'assets/category/category-seeder/no-photo.png',
                'category_id' => 2,
            ],
                // id=31
            [
                'name_tm' => 'Aýal - gyz gigiýenasy',
                'name_en' => 'Feminine hygiene items',
                'name_ru' => 'Предметы женской гигиены',
                'image' => 'assets/category/category-seeder/no-photo.png',
                'category_id' => 2,
            ],    
                // id=32
            [
                'name_tm' => 'Sakgal syrmak we tüý aýyrmak',
                'name_en' => 'Shaving and hair removal',
                'name_ru' => 'Бритье и удаление волос',
                'image' => 'assets/category/category-seeder/no-photo.png',
                'category_id' => 2,
            ],    
                // id=33
            [
                'name_tm' => 'Kagyz Önümleri',
                'name_en' => 'Toilet paper, napkins',
                'name_ru' => 'Туалетная бумага, салфетки',
                'image' => 'assets/category/category-seeder/no-photo.png',
                'category_id' => 2,
            ],    
                // id=34
            [
                'name_tm' => 'Beden ideg enjamlary',
                'name_en' => 'Body care devices',
                'name_ru' => 'Приборы по уходу за телом',
                'image' => 'assets/category/category-seeder/no-photo.png',
                'category_id' => 2,
            ],   
                // id=35
            [
                'name_tm' => 'Sagatlar, aýakgaplar, sumkalar we beýleki aksessuarlar',
                'name_en' => 'Watches, shoes, bags and other accessories',
                'name_ru' => 'Часы, обувь, сумки и прочие аксессуары',
                'image' => 'assets/category/category-seeder/no-photo.png',
                'category_id' => 2,
            ],    
                // id=36
            [
                'name_tm' => 'Saglyk',
                'name_en' => 'Health',
                'name_ru' => 'Здоровье',
                'image' => 'assets/category/category-seeder/no-photo.png',
                'category_id' => 2,
            ],    
            // <-- end:: Gözellik we ideg (Parent Category) id=2 -->
        ];

        // <-- begin:: Parent Category -->
        foreach ($parentCategories as $parentCategory) 
        {
            Category::create([
                'name_tm' => $parentCategory['name_tm'],
                'name_en' => $parentCategory['name_en'],
                'name_ru' => $parentCategory['name_ru'],
                'image' => $parentCategory['image'],
                'category_id' => $parentCategory['category_id'],
            ]); 
        }
        // <-- end:: Parent Category -->

        // <-- begin:: Sub Category -->
        foreach ($subCategories as $subCategory) 
        {
            Category::create([
                'name_tm' => $subCategory['name_tm'],
                'name_en' => $subCategory['name_en'],
                'name_ru' => $subCategory['name_ru'],
                'image' => $subCategory['image'],
                'category_id' => $subCategory['category_id'],
            ]); 
        }
        // <-- end:: Sub Category -->

    }
}
