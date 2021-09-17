<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\SoftDeletes;

use App\Models\Category;
use App\Models\Wishlist;
use App\Models\SubCategory;

class Product extends Model
{
    use HasFactory, SoftDeletes, Sluggable;

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function subcategory(){
        return $this->belongsToMany(Product::class, 'product_sub_category');
    }

    public function wishlists()
    {
        return $this->belongsToMany(Wishlist::class);
    }

    public function sluggable() : array
    {
        return [
            'slug' => [
                'product:slug' => 'product_name'
            ]
        ];
    } 

}
