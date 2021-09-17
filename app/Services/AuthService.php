<?php

namespace App\Services;

use App\Http\Resources\LoginResource;
use App\Services\Interfaces\AuthServiceInterface;
use Laravel\Passport\Client;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use App\Repositories\UserRepository;


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
        if (Auth::attempt($request->only("email", "password"))) {

            $user = Auth::user();

            $token = $user->createToken($request->input("email"))->accessToken;

            return response(
                LoginResource::collection(
                    [
                        "status" => true,
                        "message" => self::SUCCESS_SIGNIN,
                        "user" => $user,
                        "type" => "Bearer",
                        "access_token" => $token,
                        "refresh_token" => md5($request->input("email")),
                        "expires_at" => date("Y-m-d H:i:s")
                    ]
                ),
                200
            );
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
