<?php

use Illuminate\Database\Seeder;

use App\Department;
use App\Course;

class CoursesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $courses = [
            ['Dynamic Web Applications', 2017, 'spring', 'Computer Science'],
            ['Advanced Calculus', 2016, 'spring', 'Math'],
            ['Physics of Music', 2017, 'fall', 'Physics'],
        ];

        foreach($courses as $course) {

            $department_id = Department::where('name', '=', $course[3])->pluck('id')->first();

            $newCourse = new Course([
                'name' => $course[0],
                'year' => $course[1],
                'semester' => $course[2],
                'department_id' => $department_id
            ]);

            $newCourse->save();

        }
    }
}
