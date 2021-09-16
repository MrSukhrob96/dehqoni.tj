<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

use App\Models\Product;
use App\Models\SubCategory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use HasFactory, Sluggable, SoftDeletes;

    public function sub_categories()
    {
        return $this->hasMany(SubCategory::class);
    }


    public function products()
    {
        return $this->hasMany(Product::class);
    }

    public function sluggable() : array
    {
        return [
            'slug' => [
                'category:slug' => 'category_name'
            ]
        ];
    }
}
