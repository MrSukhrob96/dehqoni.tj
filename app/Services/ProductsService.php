<?php

namespace App\Services;

use App\Repositories\ProductRepository;
use App\Services\Interfaces\ProductServiceInterface;

class ProductService implements ProductServiceInterface
{

    public $productRepository;

    public function __construct(
        ProductRepository $productRepository
    ) {
        $this->productRepository = $productRepository;
    }

    public function createProduct($request)
    {
       
    }

    public function updateProduct($request)
    {

    }

    public function deleteProduct($id)
    {

    }

    public function getAllProducts()
    {

    }

    public function getOneProduct($id)
    {
        
    }


}
