<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Projects extends Model
{
    //
    protected $fillable = [
        'image_project',
        'role',
        'name',
        'tech',
        'demo_link',
    ];
}
