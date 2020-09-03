<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    protected $fillable = [
        'category_id','type_id','language_id','level_id',
        'value'

    ];
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function type()
    {
        return $this->belongsTo(Type::class);
    }
    public function language()
    {
        return $this->belongsTo(Language::class);
    }
    public function level()
    {
        return $this->belongsTo(Level::class);
    }
}
