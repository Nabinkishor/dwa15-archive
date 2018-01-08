@extends('templates.master')

@section('title')
    Course Description
@endsection

@section('content')

<script>var jumpTo = true;</script>

<h2>Course Description</h2>
</p>
<strong>Instructor: <a href='http://susanbuck.net'>Susan Buck</a> ({{ config('mail.instructorDisplay') }})</strong>
</p>

<img src='http://dwa15.com.s3.amazonaws.com/icons-programs-used@2x.png' style='width:100%; max-width:300px' alt='PHP, Git, Laravel, Composer'>

<p>
Dynamic Web Applications (CSCI E-15) is the next step for programmers who are experienced with front-end website development using HTML/CSS and want to learn server-side web application development.
</p>
<p>
At the start of the semester, we’ll set up <strong>local and production server environments</strong>, managed with <strong>Git version control</strong>.
</p>
<p>
Next, we will explore web application programming using <strong>PHP, the dominant server-side language of the web</strong>. The syntax, mechanics, and documentation for PHP will be covered, but it is expected that students will be able to apply their programming experience in other languages in order to quickly start writing PHP-based programs.
</p>
<p>
In the second half of the semester we will progress into building more advanced applications using the popular <strong>PHP framework, Laravel</strong>.
</p>
<p>
While working with this framework, we will cover topics such as: package management, routing, models, views, controllers, environment management, web interface security, databases, and other core web development concepts.
</p>

@markdown
## Goals
In this course, we will learn how to build dynamic, database-driven web applications using the technologies described above.

Beyond this specific software, though, another goal of this course is to hone our skills as adaptive programmers, sharpening our ability to...

+ Troubleshoot and solve problems
+ Parse and apply documentation/resources
+ Communicate technical issues and solutions

The reason emphasis is placed on these tangental goals is because programming for the web is a fast evolving endeavor. It often feels like each day brings new tools and debate over the "best" way to do things. At times, the pace of the industry can be overwhelming. Thus, the most successful programmers are the ones that can adapt to change, and also discern when change is necessary.
@endmarkdown

@endsection
