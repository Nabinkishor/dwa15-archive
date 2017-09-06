<?php

use Illuminate\Database\Seeder;

use App\Department;



class DepartmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $departments = ['Computer Science', 'Math', 'Physics'];

        foreach($departments as $thisDepartment) {

            $dept = new Department(['name' => $thisDepartment]);
            $dept->save();

        }
    }
}
