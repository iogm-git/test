<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    protected $guarded = [''];
    protected $with = ['skills'];

    public function skills()
    {
        return $this->belongsToMany(Skill::class, 'user_skills');
    }
}
