<?php

namespace App\Repositories\Interfaces;

interface ProductRepositoryInterface
{
    public function getAll();

    public function getOne($id);

    public function create($request);

    public function getByCategory(string $category);

    public function getByRegion(string $region);

    public function getByPrice(array $price);
}
