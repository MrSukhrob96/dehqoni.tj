<?php

namespace App\Services;

use App\Services\Interfaces\AuthServiceInterface;

use Laravel\Passport\Client;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use App\Repositories\Interfaces\UserRepositoryInterface;

class AuthService implements AuthServiceInterface
{

    public $userRepository;

    public function __construct(UserRepositoryInterface $users)
    {
        $this->userRepository = $users;
    }

    public function login($request)
    {
        if (Auth::attempt($request->only("email", "password"))) {
            return $this->refresh($request->input("email"), $request->input("password"));
        }
    }

    public function register($request)
    {
        $user = $this->userRepository->create($request);

        return $this->refresh($user->email, $user->password);
    }


    public function refresh($email, $password)
    {
        $client = Client::where("password_client", 1)->first();

        $response = Http::asForm()->post("http://localhost:8000/oauth/token", [
            "form_params" => [
                "grant_type" => "password",
                "client_id" => $client->id,
                "client_secret" => $client->secret,
                "username" => $email,
                "password" => $password,
                "scope" => "*",
            ]
        ]);

        return $response;
    }
}
