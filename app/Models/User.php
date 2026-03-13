<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    public function recipes(){

        return $this->hasMany(Recipe::class);

    }

    public function likes(){

        return $this->hasMany(Like::class);

    }

    public function ratings(){

        return $this->hasMany(Rating::class);

    }

    public function notifications(){

        return $this->hasMany(Notification::class);

    }

    public function following(){

        return $this->belongsToMany(
            User::class,
            'followers',
            'follower_id',
            'following_id',
        );

    }

    public function followers(){

        return $this->belongsToMany(
            User::class,
            'followers',
            'following_id',
            'follower_id',
        );

    }
}
