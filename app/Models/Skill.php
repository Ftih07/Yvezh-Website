<?php

// app/Models/Skill.php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    protected $fillable = [
        'skilltype_id',
        'icon',
        'name',
        'skill_level',
    ];

    public function skilltype()
    {
        return $this->belongsTo(SkillType::class, 'skilltype_id');
    }
}
