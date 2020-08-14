<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'parent_id','name','text'
    ];
    public function prices(){
        return $this->hasMany(Price::class);
    }
    public function languages()
    {
        return $this->belongsToMany(Language::class);
    }
}
