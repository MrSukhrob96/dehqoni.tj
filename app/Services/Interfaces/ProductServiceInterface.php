<?php

namespace App\Services\Interfaces;

interface ProductServiceInterface
{
    public function createProduct($request);

    public function updateProduct($request);

    public function deleteProduct($id);

    public function getAllProducts();

    public function getOneProduct($id);
}
