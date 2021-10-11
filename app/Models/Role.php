<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Permission;
use App\Models\User;

class Role extends Model
{
    use HasFactory;

    public function permissions()
    {
        return $this->belongsToMany(Permission::class);
    }

    public function user()
    {
        return $this->belongsToMany(User::class, "users_roles");
    }

}
