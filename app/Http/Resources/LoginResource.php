<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\UserResource;

class LoginResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return array(
            "status" => $this->status,
            "message" => $this->message,
            // "data" => (new UserResource($this->user)),
            "token" =>
            [
                "type" => $this->type,
                "access_token" => $this->access,
                "refresh_token" => $this->refresh,
                "expires_at" => $this->data
            ]
        );
    }
}
