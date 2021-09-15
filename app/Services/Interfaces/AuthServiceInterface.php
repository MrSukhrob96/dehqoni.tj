<?php

namespace App\Services\Interfaces;

interface AuthServiceInterface
{
    public function login($request);
    public function register($request);
    public function refresh($email, $password);
}
