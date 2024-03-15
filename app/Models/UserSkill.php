<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserSkill extends Model
{
    protected $guarded = [''];
    protected $with = ['user', 'skill'];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function skill()
    {
        return $this->belongsTo(Skill::class, 'skill_id', 'id');
    }
}
