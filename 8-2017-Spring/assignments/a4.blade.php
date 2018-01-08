@extends('templates.master')

@section('title')
    Assignment 4: Framework + Database
@stop

@section('content')

<a href='/assignments'>&larr; General Assignment Details</a>


# Assignment 4: Framework + Database

## Components
1. __<a href='http://app.dwa15.com/submit/4'>A4 Submission</a>__
2. __A4 Quiz in Canvas__ (To be released in Canvas)
3. __[A4 Peer review](http://app.dwa15.com/review)__

<br>
__Refer to the [schedule](/schedule) for all A4 component deadlines__


## Description
The final assignment in this course brings together all the skills we've learned throughout the semester to create a fully functioning web application that uses Laravel and interacts with a database.

This assignment is open-ended. Whatever you create, your application should meet the following minimum expectations:

* Built with Laravel
* Includes feature(s) that...
    + Demonstrate all 4 CRUD database interactions
    + Utilize at least __2 primary tables__ that are connected via at least __1 pivot table__.
    + Accomplishes the above using a clear interface involving HTML forms that are validated with Laravel's Validation class.
* All tables include functioning Migrations and Seeders.

You can, but are not required to, implement a user login/registration system that correlates to data in your application (this will be discussed in Lecture 13).

## Planning Doc
The options for A4 are pretty open, which gives you a lot of creative freedom. However, sometimes this freedom can be challenging for some students who “bite off more than they can chew” and have difficulty completing a working application by the end of the semester.

To help avoid over-ambitious applications, it is suggested (but not required) that you complete a planning document before starting to develop your application. The purpose of this document is to get you to think through your application from start to finish, so you have a realistic roadmap to finish your application by the end of the semester.

Additionally, any software development project will benefit from careful planning *before* you start to code.

If you complete a planning doc, you can [__work from this template__](https://docs.google.com/document/d/1T-3DmRiHB0nmoPJIIjk4KeQrXsJ22kADAngr54XJ1d8/edit#heading=h.ln6d1blx75gl), or use your own project-planning system if you already have one.

Misc notes about the planning doc:
+ The planning doc is for your use&mdash; you do not have to turn it in, and you are not graded on it.
+ If you'd like, you can discuss your planning doc with your TA during office hours. They can give you some feedback if you have concerns that your project is too ambitious.
+ Having a planning doc will make it easier for us to help you with your application because it provides us a quick and easy way to grasp what you're trying to accomplish.
+ Students who complete a planning doc are typically more succesful when it comes to accomplishing a fully functional assignment on time.


## Application inspiration
### Past student applications
+ [__BoardHoarder__](https://www.youtube.com/watch?v=dECfvnTsV5U)
    + Item organizer for boardgames. Users can create, read, update and delete games and various related information to the collection, and can curate their own listing of games by 'hoarding' and tagging those games.
    <!-- https://github.com/andyburgess/csci_e15_p4 -->
+ [__Education Equipment Circulation__](https://youtu.be/bfnx6WXnRsY)
    + A tool to help the Distance Education office track Equipment. Featured an interface for users to check in/out equipment and an interface for admins to manage equipment. Neat feature: Kriss printed barcodes for items and was used a barcode reader to input equipment info.
+ [__Magnetic Poetry__](https://youtu.be/h-L4bLaa_6w)
    + A online interface that mimics the experience of [magnetic poetry](http://magneticpoetry.com/). Users can drag and drop words to create new poems, save poems, and edit existing poems.
+ [__Chirper__](https://youtu.be/TVmbhJp9PIc)
    + Microblogging platform similar to Twitter.
+ [__Gift Guru__](https://youtu.be/Tl3ZsS9rVQ0)
    + Gift wish list manager. Neat features: Ties into Amazon, sharable URLs to share lists.
+ [__Judith's Kitchen__](https://youtu.be/If9bUABPJjQ)
    + Site for a cafe that offers high-quality, fresh prepared foods, sandwiches, soups, salads, and baked goods. The site allows for online ordering from the cafe's catering menu.
    <!-- https://github.com/katedebethune/p4 -->

### &ldquo;Real world&rdquo; applications
* [goodreads](https://www.goodreads.com/)
* [RememberTheMilk](http://www.rememberthemilk.com/)
* [5 Year Journal](http://www.levenger.com/5-year-journal-core-7150.aspx)
* [TeuxDeux](https://teuxdeux.com/)
* [PasteBin](http://pastebin.com/)
* [Kids chore charts](https://www.pinterest.com/AnOrganizedFam/kids-chore-charts/)
* [Envelope Budgeting](http://www.mvelopes.com/)

### Sample Application Idea: Task Manager
If the open-ended nature of this assignment is overwhelming, you are welcome to implement this sample idea - a task manager. This application might include:
* A page to display all incomplete tasks.
* A page to display all completed tasks.
* Or, a page to display all tasks with incomplete tasks in bold and completed tasks greyed out.
* A feature to add and edit new tasks.
* A page showing one random task allowing the user to focus on a single goal; when they complete that task, a new task is shown.

### More ambitious ideas
If you have an idea for an application you've been wanting to create, but it feels broader than the scope (and timeline) of this assignment, think about tackling a smaller portion of the application as a prototype/proof-of-concept.


### Avoid a straight Foobooks clone
Try to think outside the box of a &ldquo;catalog&rdquo; application like Foobooks&mdash; that is, an application that simply manages records of data (be it books, movies, games, etc.)

A catalog-style application is not off limits. In fact, many of the examples above are in fact catalog-style applications (BoardHoarder is cataloging board games, Judith's Kitchen is cataloging food, the Task Manager is cataloging tasks).

*However*, while these applications bear similarities to the general idea of Foobooks, they do implement unique features not demonstrated in Foobooks, or tackle similar features in a unique way.

@endsection
