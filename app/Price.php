<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    protected $fillable = [
        'category_id','type_id','language_id','normalmin',
        'normalmax','goodmin','goodmax','excellentmin',
        'excellentmax'
    ];
    public function category()
    {
        return $this->hasOne(Category::class);
    }
    public function type()
    {
        return $this->hasOne(Type::class);
    }
    public function language()
    {
        return $this->hasOne(Language::class);
    }
}
