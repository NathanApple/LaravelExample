<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'created_at'];

    public function student_course(){
        return $this->hasMany(StudentCourse::class, "course_id", "id");
    }
}
