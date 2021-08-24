<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
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
        Category::create([
            'name_tm' => 'Kategoriýa',
            'name_ru' => 'Category',
            'name_en' => 'Категория',
            'icon_name' => 'fa fa-icon fa-' . Str::random(5),
            'icon_img' => 'img-' . Str::random(5),
            'slug' => 'category-' . Str::random(5),
            'parent_id' => 1,
        ]);
    }
}
