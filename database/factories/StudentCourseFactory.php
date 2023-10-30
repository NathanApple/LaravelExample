<?php

namespace Database\Factories;

use App\Models\Course;
use App\Models\Student;
use App\Models\StudentCourse;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\StudentCourse>
 */
class StudentCourseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        // Cara 1
        $list_of_student_id = Student::all()->pluck('id')->toArray();

        // Cara 2
        $courses = Course::all();

        $list_of_course_id = [];

        foreach ($courses as $course) {
            $list_of_course_id[] = $course->id;
        }

        return [
            'student_id' => fake()->randomElement($list_of_student_id),
            'course_id' => fake()->randomElement($list_of_course_id),
        ];
    }
}
