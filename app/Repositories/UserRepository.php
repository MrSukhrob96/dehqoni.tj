<?php

namespace App\Repositories;

use App\Models\User;
use Illuminate\Support\Facades\Hash;

use App\Repositories\Interfaces\UserRepositoryInterface;

class UserRepository implements UserRepositoryInterface
{
    public $users;

    public const USER_DEFAULT_ROLE = 3;
    public const USERS_PAGINATION_LIMIT = 12;

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

    public function getOne($id)
    {
        return $this->users->where(["slug", $id])->first();
    }

    public function getAll()
    {
        return $this->users->paginate(self::USERS_PAGINATION_LIMIT);
    }
}
