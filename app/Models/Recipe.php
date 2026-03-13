<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    public function user(){

        return $this->belongsTo(User::class);

    }

    public function ingredients(){

        return $this->hasMany(RecipeIngredient::class);

    }

    public function ratings(){

        return $this->hasMany(Rating::class);

    }

    public function likes(){

        return $this->hasMany(Like::class);

    }

    public function categories(){

        return $this->belongsToMany(Category::class, 'recipe_categories');

    }
}
