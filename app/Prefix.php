<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prefix extends Model
{
    public function users()
    {
        return $this->hasMany(User::class);
    }
}
