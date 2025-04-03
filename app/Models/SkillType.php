<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SkillType extends Model
{
    protected $table = 'skilltype'; // Sesuai dengan nama di migration

    //
    protected $fillable = [
        'name',
    ];
}
