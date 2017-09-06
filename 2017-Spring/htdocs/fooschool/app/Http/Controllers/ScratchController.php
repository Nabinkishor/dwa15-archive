<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Student;
use App\Course;
use App\Department;

class ScratchController extends Controller
{


    /**
	* Question 5
	*/
    public function q5() {

        # Option A) Query on collection
        $student = Student::orderByDesc('id')->get();
        dump($student->first()->name);

        # Option B) Query on query
        $student = Student::orderByDesc('id')->first();
        dump($student->name);

        # Option C) Order
        $student = Student::orderByDesc('id')->limit(1)->first();
        dump($student->name);

        # ANSWER Option D)
        $student = Student::orderByDesc('id')->get();
        dump($student->name);


    }


    /**
    * Question 7
    */
    public function q7() {

        // dump(Student::orderBy('name')->where('name','like','%fran%')->first());
        //
        // dump(Student::orderBy('name')->where('name','like','%fran%')->first());
        //
        // dump(Student::where('name','like','%fran%')->orderBy('name')->first());
        //
        // dump(Student::where('name','like','%fran%')->orderBy('name')->first());
        //
        // $this->label('Student answers tests:');

        $s = Student::where('name','like', '%fran%')->take(1)->get();
        dump($s);

        # WRONG
        #dump(Student::where('name', 'LIKE', '%fran%')->orderBy('name')->getFirst());

    }
    //
    // /**
    // * Eager loading
    // */
    // public function scratch2() {
    //
    //     # Assume there are 3 courses in the database, each associated with a different department
    //
    //     # 4 queries, lacks eager loading
    //     $this->label('First');
    //     $courses = Course::get();
    //     foreach($courses as $course) {
    //         dump($course->department->name);
    //     }
    //
    //     #select * from `courses`
    //     #select * from `departments` where `departments`.`id` = '1' limit 1
    //     #select * from `departments` where `departments`.`id` = '2' limit 1
    //     #select * from `departments` where `departments`.`id` = '3' limit 1
    //
    //     # 2 queries, uses eager loading
    //     $this->label('Second');
    //     $courses = Course::with('department')->get();
    //     foreach($courses as $course) {
    //         dump($course->department->name);
    //     }
    //
    //     # select * from `courses`
    //     # select * from `departments` where `departments`.`id` in ('1', '2', '3')
    // }
    //
    //
    // /**
    // *
    // */
    // public function scratch3() {
    //
    //     $courses = Course::all();
    //
    //     return view('courses.index')->with([
    //         'courses' => $courses
    //     ]);
    // }
    //
    //
    //
    //
    // /**
    // * Matching
    // */
    // public function scratch99() {
    //
    //     $courses = Course::where('name','=','Dynamic Web Applications')->orderByDesc('created_at')->get();
    //     $course = $courses->pop();
    //
    //     dump($course->name);
    //
    //     dump($course);
    //
    //     dump($course->toArray());
    //
    //     dump($course->credits);
    //
    //     echo $course;
    //
    // }
    //
    // /**
    // * Question 10
    // */
    // public function scratch10() {
    //
    //     $this->label('Read');
    //     $student = Student::orderByDesc('id')->get();
    //
    //     $this->label('Read & Create (in pivot)');
    //     $course = Course::find(1);
    //     $student = Student::find(1);
    //     $student->courses()->save($course);
    //
    //     $this->label('Create');
    //     $dept = new Department();
    //     $dept->name = 'Art History';
    //     $dept->save();
    //
    // }
    //
    // /**
    // *
    // */
    // public function index() {
    //
    //     $newestCourses = Course::getNewestCourses();
    //
    //     $students = Student::orderByDesc('id')->get();
    //
    //     return view('index')->with([
    //         'newestCourses' => $newestCourses,
    //         'students' => $students,
    //     ]);
    //
    // }

    /**
    *
    */
    private function label($text) {
        echo '<h1>'.$text.'</h1>';
    }


}
