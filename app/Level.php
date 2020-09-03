<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
    protected $fillable = [
        'name','en_name'
    ];
    public function prices(){
        return $this->hasMany(Price::class);
    }
}
