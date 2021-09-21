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
            'svg' => 'svg',
            'parent_id' => 1,
        ]);
    }
}
