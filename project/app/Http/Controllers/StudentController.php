<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Department;
use App\Models\CourseStudent;
use App\Models\CourseTeacher;
use App\Models\Course;
use App\Models\Teacher;
class StudentController extends Controller
{
    //
    public function create(){
        return view('student.create');
    }
    public function register(){
        return view('student.register');
    }
    public function show($name,$id,$cg){
        return view('student.show')->with('name',$name)->with('id',$id)->with('cg',$cg);
    }
    public function get($id){
        //$id="1234";
        $student=Student::where('id','=',$id)->first();
        return view('student.get')->with('s',$student);
    }
    public function index(){
        return view('student.index');
    }
}
