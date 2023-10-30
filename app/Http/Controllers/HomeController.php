<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\StudentCourse;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function home(){
        $studentCourses = StudentCourse::with('student', 'course')
                                        ->whereNot('student_id', 1)
                                        ->orderByDesc('student_id')
                                        ->limit(20)
                                        ->get();

        // dump($studentCourses);

        // $student = Student::with('student_course')->first();

        // dump($student);

        // return view('home', ['studentCourse' => $studentCourse]);
        return view('home', compact('studentCourses'));
    }
}
