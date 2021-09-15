<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Region;

class Country extends Model
{
    use HasFactory;

    public function regions()
    {
        return $this->hasMany(Region::class);
    }
}
