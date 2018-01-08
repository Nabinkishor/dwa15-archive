@extends('templates.master')

@section('title')
    Lecture 13 - Apr 27
@stop

@section('content')

<a href='/lectures'>&larr;  All lecture outlines</a>

# Lecture 13  - Apr 27

## Housekeeping
### Scheduling
+ This is the last lecture recording; next week is the A4 workshop (<http://workshop.dwa15.com>).
+ TA Office Hours will continue to run through finals week, concluding on May 11 (coincides with A4 Submission date)
+ A4 Quiz and A4 Peer Review reminder

### Misc Foobooks updates
+ Cleaned up styling ([foobooks.css](https://github.com/susanBuck/foobooks/blob/master/public/css/foobooks.css) and [books.css](https://github.com/susanBuck/foobooks/blob/master/public/css/books.css))
+ Added a nav bar ([master.blade.php](https://github.com/susanBuck/foobooks/blob/master/resources/views/layouts/master.blade.php#L31))
    + See [foobooks.js](https://github.com/susanBuck/foobooks/blob/master/public/js/foobooks.js) for one way to highlight the currently active page in a nav bar.
+ Finished "View a book page"; see [show.blade.php](https://github.com/susanBuck/foobooks/blob/master/resources/views/books/show.blade.php) and [BookController@show](https://github.com/susanBuck/foobooks/blob/master/app/Http/Controllers/BookController.php#L36)
+ Added delete feature
    + [BookController@confirmDeletion](https://github.com/susanBuck/foobooks/blob/master/app/Http/Controllers/BookController.php#L201) responds to a GET route asking the user to confirm deletion
    + Upon confirmation, the actual deletion happens via [BookController@delete](https://github.com/susanBuck/foobooks/blob/master/app/Http/Controllers/BookController.php#L213)

## Lecture
+ Relationships
    + [One to Many](https://github.com/susanBuck/dwa15-spring2017-notes/blob/master/03_Laravel/28_Relationships_One_to_Many.md)
    + [One to Many in Foobooks](https://github.com/susanBuck/dwa15-spring2017-notes/blob/master/03_Laravel/99_Foobooks_Lecture_13.md)
    + [Many to Many](https://github.com/susanBuck/dwa15-spring2017-notes/blob/master/03_Laravel/29_Relationships_Many_to_Many.md)
    + [Many to Many in Foobooks](https://github.com/susanBuck/dwa15-spring2017-notes/blob/master/03_Laravel/99_Foobooks_Lecture_13.md#using-tagsmany-to-many)

## To-do
+ Continue with A4 development; take advantage of A4 workshop next week.
+ Complete Lecture 13 quiz in Canvas by Thu Apr 27 @ 6:30pm Eastern (Last lecture quiz of the semester)
+ If time permits: Learn about Users (not required on A4; will not be on assignment or lecture quiz)
    + [Users Setup](https://github.com/susanBuck/dwa15-spring2017-notes/blob/master/03_Laravel/30_Users_Setup.md)
    + [Users Usage](https://github.com/susanBuck/dwa15-spring2017-notes/blob/master/03_Laravel/31_Users_Usage.md)
    + [Users and Foobooks](https://github.com/susanBuck/dwa15-spring2017-notes/blob/master/03_Laravel/32_Users_and_Foobooks.md)

@endsection
