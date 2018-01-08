@extends('templates.master')

@section('title')
    Lecture 12 - Apr 20
@stop

@section('content')

<a href='/lectures'>&larr;  All lecture outlines</a>

# Lecture 12  - Apr 20

## Housekeeping
+ [A3 Peer review](/review) is/was due by end of day (Thu Apr 20 @ 11:59pm Eastern)
+ FYI About update to [BooksTableSeeder](https://github.com/susanBuck/foobooks/blob/master/database/seeds/BooksTableSeeder.php)
    + Unique created_at/updated_at timestamps
    + Pull data from `books.json`
+ Solutions to query challenge - see [`PracticeController.php`](https://github.com/susanBuck/foobooks/blob/master/app/Http/Controllers/PracticeController.php), practice methods 12-17

## Lecture
+ [Collections](https://github.com/susanBuck/dwa15-spring2017-notes/blob/master/03_Laravel/27_Collections.md)
+ [Foobooks Progress](https://github.com/susanBuck/dwa15-spring2017-notes/blob/master/03_Laravel/99_Foobooks_Lecture_12.md)
    + List all books
    + Adding a book
    + Flash data
    + Editing a book

## To-do
+ Keep up on foobooks progress
    + Page to list all the books
    + Add a Book form should now actually add a book
    + Build Edit Book functionality
    + Delete a book - On your own
+ Progress on A4
+ Complete Lecture 12 quiz in Canvas by Thu Apr 27 @ 6:30pm Eastern


@endsection
