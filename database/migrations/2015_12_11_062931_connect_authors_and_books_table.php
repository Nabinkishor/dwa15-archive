<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ConnectAuthorsAndBooksTable extends Migration
{
    public function up()
    {
        Schema::table('books',function (Blueprint $table) {

			# Add a new INT field called `author_id` that has to be unsigned (i.e. positive)
            $table->integer('author_id')->unsigned();

			# This field `author_id` is a foreign key that connects to the `id` field in the `authors` table
            $table->foreign('author_id')->references('id')->on('authors');
        });
    }

    public function down()
    {
        $table->dropForeign('author_id');
        $table->dropColumn('author_id');
    }
}
