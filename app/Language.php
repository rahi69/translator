<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    protected $fillable = [
        'title','en_title'
    ];
    public function prices(){
        return $this->hasMany(Price::class);
    }
    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }
}
