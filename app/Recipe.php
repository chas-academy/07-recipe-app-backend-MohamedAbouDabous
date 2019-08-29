<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    protected $fillable = [
        'email',
        'label',
        'image',
        'ingredientLines'
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}