<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Question extends Model
{
    use HasFactory;
    protected $fillable = [
        'userid',
        'subject_id',
        'section_of_question',
        'question',
        'option_a',
        'option_b',
        'option_c',
        'option_d'
    ];
}
