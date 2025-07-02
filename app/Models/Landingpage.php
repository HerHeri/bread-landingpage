<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Landingpage extends Model
{
    protected $casts = [
        'home_section' => 'array',
        'section_2' => 'array',
        'sub_title',
        'title',
        'content',
        'section_promotion' => 'array',
        'section_review' => 'array',
    ];

    protected $fillable = [
        'home_section',
        'section_2',
        'sub_title',
        'title',
        'content',
        'section_promotion',
        'section_review',
    ];
}
