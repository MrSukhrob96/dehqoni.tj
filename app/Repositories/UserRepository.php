<?php

namespace App\Repositories;

use App\Models\User;
use Illuminate\Support\Facades\Hash;

use App\Repositories\Interfaces\UserRepositoryInterface;

class UserRepository implements UserRepositoryInterface
{
    public $users;

    public const USER_DEFAULT_ROLE = 2;

    public function __construct(User $users)
    {
        $this->users = $users;
    }

    public function create($request)
    {
        $user = $this->users->create(array(
            "name" => $request->input("name"),
            "surname"  => $request->input("surname"),
            "email"  => $request->input("email"),
            "phone"  => $request->input("phone"),
            "password"  => Hash::make($request->input("password")),
            "role_id" => self::USER_DEFAULT_ROLE
        ));

        return $user;
    }

    public function getOne()
    {

    }

    public function getAll()
    {

    }

}
