@extends('templates.master')

@section('title')
    Project 3: Framework fundamentals
@endsection

@section('content')

<script>var jumpTo = true;</script>

@markdown

# Project 3: Framework fundamentals

For this project you will create a simple web application using the Laravel framework.

Like Project 2, your application will use a form with at least 3 unique form inputs that, when submitted, produces some output that is influenced by the input.

For this project you can:

1. Recreate the same concept you executed for Project 2
2. Execute a new concept from the pool of examples:
    + [Scrabble word score calculator]({{ $cdn }}wireframe-scrabble@2x.png)
    + [Bill splitter]({{ $cdn }}wireframe-bill-splitter@2x.png)
    + [Password generator]({{ $cdn }}wireframe-password-generator@2x.png)
    + [Pig Latin translator]({{ $cdn }}wireframe-pig-latin-translator@2x.png)
3. Execute your own concept that is similar in spirit to the above examples

## Finalizing
+ You will work on this project during Weeks 5, 6, 7, 8 and 9.
+ The project will be finalized in the Week 9 progress log which is due before Nov 1 @ 11:59pm Eastern.
+ You do not need to officially submit your project&mdash; I'll prompt for all the necessary details in your progress logs.


## Avoiding code plagiarism
Be sure to read <a href='https://dwa15.com/policies#Original work and academic integrity'>Policies: Original work and academic integrity</a> to make sure you are responsibly using outside resources and getting the most out of this project.


## Requirements
+ __General__
    + Accessible via `http://p3.yourdomain.com`.
    + Built with Laravel.
    + Appropriate placement of code in routes, controllers, views.
    + Debugging enabled on local, disabled on production.
+ __Form:__
    + 3 is the minimum amount of inputs, but you can have more.
    + 3 of the inputs should be unique (i.e. a text input, textarea, and checkbox would be acceptable, but two text inputs and a drop-down select would not be).
    + The inputs should collect data from the user, thus a button does not count as input.
    + Any inputs that are required should be labeled as such.
    + Form data checked and reported via Laravel's validation features.
    + Visitor-entered form data should be sanitized on output (using Blade's &#123;&#123; &#125;&#125; statements)
+ __Views__
    + Use Blade.
    + Use template inheritance.
    + Separation of Concerns: No non-display-specific logic in view files.
+ __Packages__
    + [barryvdh/laravel-debugbar](https://github.com/barryvdh/laravel-debugbar) should be installed in *require-dev*.
    + You can, but are not required to, implement any other package(s) you find useful for your project.



#### System
@include('projects._system')

#### Presentation
+ Do not copy the style shown in the wireframes&mdash; create your own style.
@include('projects._presentation')

#### Code
+ Forms should be processed in PHP/Laravel and the result should be displayed in HTML. JS can optionally be used as a supplement (e.g. adding a layer of client-side validation), but not a substitute.
+ Use modern and semantic HTML; running your site's live URL through the [w3 validator](https://validator.w3.org) should produce no errors. Any known/unavoidable errors should be explained in your progress log.
+ Code should be consistent and organized, following all the specifications outlined in the notes on [Code style](https://github.com/susanBuck/dwa15-fall2017/blob/master/02_PHP/99_Code_style.md).
+ Any CSS or JS should be external. Embedded CSS/JS is acceptable only in the case of one page sites. Inline CSS/JS is not acceptable.



#### Misc
- Follow any/all other best practices not explicitly mentioned above but discussed in lecture/notes.



@endmarkdown

@endsection
