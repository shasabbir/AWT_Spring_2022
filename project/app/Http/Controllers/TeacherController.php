<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;
use App\Models\Department;
use App\Models\CourseStudent;
use App\Models\CourseTeacher;
use App\Models\Course;

class TeacherController extends Controller
{
    //
    public function get($id){
        //$id="1234";
        $teacher=Teacher::where('id','=',$id)->first();
        return view('teacher.get')->with('t',$teacher);
    }
}
