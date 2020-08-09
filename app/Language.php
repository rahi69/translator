<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    protected $fillable = [
        'title'
    ];
    public function price(){
        return $this->belongsTo(Price::class);
    }
}
