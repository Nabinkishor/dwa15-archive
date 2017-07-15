@extends('templates.master')

@section('title')
    Assignment 3: Framework (Laravel)
@stop

@section('content')

<a href='/assignments'>&larr; General Assignment Details</a>

# Assignment 3: Framework (Laravel)

## Components

1. __<a href='http://app.dwa15.com/submit/3'>A3 Submission</a>__
2. __A3 Quiz in Canvas__ (once available)
3. __[A3 Peer review](http://app.dwa15.com/review)__

__Refer to the [schedule](/schedule) for all A3 component deadlines__

## Description
For this assignment, you will create and deploy a Laravel application:

1. Recreate the same concept you executed for Assignment 2
2. Execute a new concept from the pool of examples:
    + [Scrabble word score calculator](/images/wireframe-scrabble@2x.png)
    + [Bill splitter](/images/wireframe-bill-splitter@2x.png)
    + [Password generator](/images/wireframe-password-generator@2x.png)
    + [Pig Latin translator](/images/wireframe-pig-latin@2x.png) <sup>New</sup>
3. Execute your own concept that is similar in spirit to the above examples

<br>
Regardless of what concept you execute, the application should include a form with at least 3 unique inputs that, when submitted, produces some output that is influenced by the input.

**All the requirements for this assignment are outlined on the [submission form](http://app.dwa15.com/submit/3)**, the following are highlights:

+ __General__
    + Built with Laravel.
    + Accessible via `http://a3.yourdomain.com`.
    + Separation of Concerns: Appropriate Route/Controller organization (i.e. don't put all your logic code into the routes file; organize into one or more Controllers).
    + Debugging enabled on local, disabled on production.
+ __Forms__
    + 3 is the minimum amount of inputs, but you can have more. All inputs must influence the results in some way.
    + 3 of the inputs should be unique (i.e. a text input, textarea, and checkbox would be acceptable, but two text inputs and a drop down would not be).
    + Submit forms using POST or GET&mdash; choose the method that is most appropriate for the application.
    + Form data checked and reported with Laravel's validation Class.
    + Visitor-entered form data should be sanitized on output (using Blade's &#123;&#123; &#125;&#125; statements)
+ __Views__
    + Use Blade.
    + Use template inheritance.
    + Separation of Concerns: No non-display-specific logic in view files.
+ __Packages__
    + Install and implement [laravel-debugbar package](https://github.com/barryvdh/laravel-debugbar). Debugbar should only be visible on *local*, not on *production*.
    + Install and implement [laravel-log-viewer](https://github.com/rap2hpoutre/laravel-log-viewer) package, with a route `/logs` that's only accessible locally.
    + You are encouraged but not required to implement another package of your choosing.

## Avoiding Code Plagiarism
[Read more...](/assignments/plagiarism)
@stop
