<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Task1Controller extends Controller
{
    //
    public function index(){
        
        return view('task1.index');
    }
    public function admin(){
        $course1=array(
            "name"=>"course1",
             "cr"=>"3");
             $course2=array(
                "name"=>"course2",
                 "cr"=>"1");
                 $course1=(object) $course1;
                 $course2=(object) $course2;
        return view('task1.admin')->with('c1',$course1)->with('c2',$course2);
    }
    public function student(){
        $courses=[];
        for($i=0;$i<5;$i++){
        $course=array(
            "name"=>"course".$i,
             "cr"=>"3");
             $courses[]=(object)$course;}
                 //return $courses;
        return view('task1.student')->with('courses',$courses);
    }
}
