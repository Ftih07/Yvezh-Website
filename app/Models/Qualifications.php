<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Qualifications extends Model
{
    //
    protected $fillable = [
        '_qualification_categories_id',
        'name',
        'place',
        'date',
    ];

    public function qualificationcategories()
    {
        return $this->belongsTo(QualificationCategories::class, '_qualification_categories_id');
    }
}
