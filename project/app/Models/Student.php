<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\CourseStudent;
use App\Models\Teacher;
class Student extends Model
{
    use HasFactory;
    protected $table='students_info';
    public $timestamps=false;
    public function department(){
        return $this->belongsTo(Department::class,'d_id');
    }
    public function courses(){
        return $this->hasMany(CourseStudent::class,'st_id');
    }
    
}
