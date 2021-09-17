<?php

namespace App\Repositories\Interfaces;

interface UserRepositoryInterface{

    public function create($request);
    public function getOne($id);
    public function getAll();
    
}