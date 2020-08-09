<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'parent_id','name','text'
    ];
    public function price(){
        return $this->belongsTo(Price::class);
    }
}
