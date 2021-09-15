<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;

use App\Http\Requests\AuthRequest;
use App\Services\Interfaces\AuthServiceInterface;

class LoginController extends Controller
{
    public $authService;

    public function __construct(
        AuthServiceInterface $authService
    ) {
        $this->authService = $authService;
    }

    public function store(AuthRequest $request)
    {
        return $this->authService->login($request);
    }

}
