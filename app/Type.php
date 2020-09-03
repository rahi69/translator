<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    protected $fillable = [
        'title','en_title'
    ];
    public function prices(){
        return $this->hasMany(Price::class);
    }
}
