<?php

use Illuminate\Database\Seeder;
use App\Student;
use App\Course;

class CourseStudentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $student = Student::where('name', '=', 'tasha')->first();
        $course = Course::where('name', '=', 'Dynamic Web Applications')->first();

        $student->courses()->save($course);
    }
}
