<?php

namespace App\Repositories;

use App\Models\Product;
use App\Repositories\Interfaces\ProductRepositoryInterface;

class ProductRepository implements ProductRepositoryInterface
{
    public $products;

    public const PRODUCTS_LIMIT = 12;
    
    public function __construct(
        Product $product
    ) {
        $this->products = $product;
    }

    public function getAll()
    {
    }

    public function getOne($id)
    {
        return $this->products->where(["slug", $id])->first();
    }

    public function create($request)
    {
        $product = $this->products->create(

        );

        return $product;
    }

    public function getTop()
    {
        $products = $this->products->where("product_raiting")->limit(self::PRODUCTS_LIMIT)->get();
        return $products;
    }

    public function getByCategory($category)
    {
    
    }

    public function getByRegion($region)
    {

    }

    public function getByPrice($price)
    {
        
    }

}
