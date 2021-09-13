<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Courses;

class CourseController extends Controller
{
    public function Get_Courses(){
        return Courses::all();
    }

    public function Delete_Course($id){
        $course=Courses::find($id);
         $course->delete();
    }
}
