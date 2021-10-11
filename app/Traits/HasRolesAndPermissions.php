<?php

namespace App\Traits;

use App\Models\Permission;
use App\Models\Role;


trait HasRolesAndPermissions
{
    public function roles()
    {
        return $this->belongsToMany(Role::class, "users_roles", "user_id", "role_id");
    }

    public function permissions()
    {
        return $this->belongsToMany(Permission::class, "users_permissions", "user_id", "permission_id");
    }

    public function hasRole(...$roles)
    {
        foreach ($roles as $role) {
            if ($this->roles->contains("slug", $role)) {
                return true;
            }
        }
        return false;
    }

    public function hasPermission($permission)
    {
        return (bool) $this->permissions->where("slug", $permission)->count();
    }

    public function hasPermissionTo($permission)
    {
        return $this->hasPermission($permission) || $this->hasPermission($permission->slug);
    }

    public function hasPermissionThroughRole($permission)
    {
        foreach ($permission->roles as $role) {
            if ($this->roles->contains($role)) {
                return true;
            }
        }
        return false;
    }

    public function getAllPermissions(array $permissions)
    {
        return Permission::whereIn("slug", $permissions)->get();
    }

    public function givePermissionTo(...$permissions)
    {
        $permissions = $this->getAllPermissions($permissions);
        if ($permissions === null) {
            return $this;
        }

        $this->permissions()->saveMany($permissions);
        return $this;
    }

    public function deletePermissions(...$permissions)
    {
        $permissions = $this->getAllPermissions($permissions);
        $this->permissions()->detach($permissions);
        return $this;
    }

    public function refreshPermissions(...$permissions)
    {
        $this->permissions()->detach();
        return $this->givePermissionTo($permissions);
    }
}
