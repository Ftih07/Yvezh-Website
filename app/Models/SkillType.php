<?php

// app/Models/SkillType.php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SkillType extends Model
{
    protected $table = 'skilltype';

    protected $fillable = ['name'];

    public function skills()
    {
        return $this->hasMany(Skill::class, 'skilltype_id');
    }
}
