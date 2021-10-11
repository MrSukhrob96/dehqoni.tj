<?php

namespace App\Services;

use App\Http\Resources\LoginResource;
use App\Http\Resources\UserResource;
use App\Services\Interfaces\AuthServiceInterface;
use Laravel\Passport\Client;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use App\Repositories\UserRepository;
use Illuminate\Contracts\Session\Session;

class AuthService implements AuthServiceInterface
{

    public $userRepository;

    public const SUCCESS_SIGNIN = "";

    public function __construct(UserRepository $users)
    {
        $this->userRepository = $users;
    }

    public function login($request)
    {

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password], true)) {
            $user = Auth::user();

            $token = $user->createToken('token')->accessToken;

            return (new UserResource($user, "mytoken"));
        }

        return ["message" => "Can't find this user", "status" => 403];
    }

    public function register($request)
    {
        $user = $this->userRepository->create($request);

        return $user;
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
