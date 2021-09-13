<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctors extends Model
{
    protected $fillable=['name'];


    function Doctors_Courses(){
        return $this->hasMany(Courses::class);
    }

}
