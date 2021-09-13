<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\CourseController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/*Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});*/


Route::post("post/course",[DoctorController::class,"Create_Course"]);

Route::get("get/course",[CourseController::class,"Get_Courses"]);


Route::delete("del/course/{id}",[CourseController::class,"Delete_Course"]);

Route::post("update/course/{id}",[DoctorController::class,"Update_Course"]);