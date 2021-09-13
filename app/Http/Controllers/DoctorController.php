<?php

namespace App\Http\Controllers;
use App\Models\Courses;

use Illuminate\Http\Request;

class DoctorController extends Controller
{
   public function Create_Course(Request $request){
        return Courses::create($request->all());
   } 

   public function Update_Course($id,Request $req){
        Courses::find($id)->update($req->all());
        return "done";
   }
}
