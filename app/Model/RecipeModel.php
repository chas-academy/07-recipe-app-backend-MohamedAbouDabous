    
<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class RecipeModel extends Model
{
    protected $fillable = [
        'email',
        'label',
        'image',
        'calories',
        'healthLabels',
        'ingredientLines',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}