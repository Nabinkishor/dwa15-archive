<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ConnectAuthorsAndTags extends Migration
{
    /**
    * Run the migrations.
    *
    * @return void
    */
    public function up()
    {
        Schema::create('author_tag', function (Blueprint $table) {

            $table->increments('id');
            $table->timestamps();

            $table->integer('author_id')->unsigned();
            $table->integer('tag_id')->unsigned();


            $table->foreign('author_id')->references('id')->on('authors');
            $table->foreign('tag_id')->references('id')->on('tags');
        });
    }

    /**
    * Reverse the migrations.
    *
    * @return void
    */
    public function down()
    {
        Schema::drop('author_tag');
    }
}
