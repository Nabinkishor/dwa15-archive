<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ConnectCoursesAndDepartments extends Migration
{
    /**
    * Run the migrations.
    *
    * @return void
    */
    public function up()
    {
        Schema::table('courses', function (Blueprint $table) {

            $table->integer('department_id')->unsigned();
            $table->foreign('department_id')->references('id')->on('departments');

        });
    }

    /**
    * Reverse the migrations.
    *
    * @return void
    */
    public function down()
    {
        Schema::table('courses', function (Blueprint $table) {
            $table->dropForeign('courses_department_id_foreign');
            $table->dropColumn('department_id');
        });
    }
}
