<?php

use Illuminate\Database\Seeder;

use App\Student;

class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $students = [
            ['will', 'will@gmail.com', 2017],
            ['frank', 'frank@gmail.com', 2015],
            ['tasha', 'tasha@gmail.com', 2015],
            ['francis', 'francis@gmail.com', 2015],
        ];

        # Initiate a new timestamp we can use for created_at/updated_at fields
        $timestamp = Carbon\Carbon::now()->subDays(count($students));

        foreach($students as $thisStudent) {

            $student = new Student();

            $student->created_at = $timestamp->addDay()->toDateTimeString();
            $student->updated_at = NULL;

            $student->name = $thisStudent[0];
            $student->email = $thisStudent[1];
            $student->graduation_year = $thisStudent[2];
            $student->save();
        }
    }
}
