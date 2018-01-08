<?php


Route::get('/q1', 'ScratchController@q1');
Route::get('/q2', 'ScratchController@q2');
Route::get('/q3', 'ScratchController@q3');
Route::get('/q4', 'ScratchController@q4');
Route::get('/q5', 'ScratchController@q5');
Route::get('/q6', 'ScratchController@q6');
Route::get('/q7', 'ScratchController@q7');
Route::get('/q8', 'ScratchController@q8');
Route::get('/q9', 'ScratchController@q9');
Route::get('/q10', 'ScratchController@q10');


Route::get('/', 'ScratchController@index');


if(App::environment('local')) {

    Route::get('/drop', function() {

        $db = Config::get('database.connections.mysql.database');

        DB::statement('DROP database '.$db);
        DB::statement('CREATE database '.$db);

        return 'Dropped '.$db.'; created '.$db.'.';
    });

};

Route::get('/debug', function() {

    echo '<pre>';

    echo '<h1>Environment</h1>';
    echo App::environment().'</h1>';

    echo '<h1>Debugging?</h1>';
    if(config('app.debug')) echo "Yes"; else echo "No";

    echo '<h1>Database Config</h1>';
    echo 'DB defaultStringLength: '.Illuminate\Database\Schema\Builder::$defaultStringLength;
    /*
    The following commented out line will print your MySQL credentials.
    Uncomment this line only if you're facing difficulties connecting to the database and you
    need to confirm your credentials.
    When you're done debugging, comment it back out so you don't accidentally leave it
    running on your production server, making your credentials public.
    */
    print_r(config('database.connections.mysql'));

    echo '<h1>Test Database Connection</h1>';
    try {
        $results = DB::select('SHOW DATABASES;');
        echo '<strong style="background-color:green; padding:5px;">Connection confirmed</strong>';
        echo "<br><br>Your Databases:<br><br>";
        print_r($results);
    }
    catch (Exception $e) {
        echo '<strong style="background-color:crimson; padding:5px;">Caught exception: ', $e->getMessage(), "</strong>\n";
    }

    echo '</pre>';

});
