<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    private $token;

    public function __construct($token)
    {
        $this->token = $token;
    }

    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return array(
            "id" => $this->id,
            "name" => $this->name,
            "surname" => $this->surname,
            //"role" => RoleResource::collection($this->role),
            "permissions" => PermissionResource::collection($this->permissions),
            "token" => $this->token
        );
    }
}
