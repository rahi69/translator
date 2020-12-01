<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'parent_id','name','text','en_name','en_text'
    ];
    public function prices(){
        return $this->hasMany(Price::class);
    }
    public function languages()
    {
        return $this->belongsToMany(Language::class);
    }

    public function parent()
    {
        return $this->belongsTo(Category::class, 'parent_id');
    }

    public function children()
    {
        return $this->hasMany(Category::class, 'parent_id');
    }
}
