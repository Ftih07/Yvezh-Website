<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class QualificationCategories extends Model
{
    //
    protected $table = '_qualification_categories'; // Sesuai dengan nama di migration

    protected $fillable = [
        'name',
    ];

    public function qualifications()
    {
        return $this->hasMany(Qualifications::class, '_qualification_categories_id');
    }
}
