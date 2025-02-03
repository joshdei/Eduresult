<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $fillable = ['userid','subject_name', 'subject_section'];
    public function user(){
        return $this->hasMany(User::class);
    }
}
