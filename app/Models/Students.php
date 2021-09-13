<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Students extends Model
{
    protected $fillable=['name','GPA'];

    function Students_Courses(){
        return $this->hasMany(Courses::class);
    }
}
