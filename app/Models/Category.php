<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name_tm',
        'name_en',
        'name_ru',
        'svg',
        'parent_id',
    ];

    protected $casts = [
        'img' => 'object'
    ];

    public function parent()
    {
        return $this->belongsTo(Category::class, 'parent_id', 'id');
    }

    public function children()
    {
        return $this->hasMany(Category::class, 'parent_id', 'id');
    }

    public function getDepth($parent_id) {

        $category= Category::find($parent_id);
 
        if ($category) {
            if ($category->parent_id == 0) {
                return $category->category_name;
            } else {
                return self::getDepth($category->parent_id);
            }
        }
 
     }
}
