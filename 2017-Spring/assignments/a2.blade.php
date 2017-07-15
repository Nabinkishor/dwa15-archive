@extends('templates.master')

@section('title')
    Assignment 2: PHP
@stop

@section('content')

<a href='/assignments'>&larr; General Assignment Details</a>

# Assignment 2: PHP

## Components
1. <a href='http://app.dwa15.com/submit/2'>A2 Submission</a>
2. A2 Quiz in Canvas
3. [A2 Peer review](http://app.dwa15.com/review)

__Refer to the [schedule](/schedule) for each component's deadline__

## Description
For this assignment, you will create a simple web application using the fundamental PHP concepts we've been covering in lecture.

The application should include a form with at least 3 unique inputs that, when submitted, produces some output that is influenced by the input.

Below are wireframes for 3 example concepts, to give you you an idea of the scope of application you should create.

You can...
+ Implement one of these concepts, as designed
+ Implement one of these concepts with your own customizations/variations
+ Come up with your own concept that is similar in spirit to these examples

(click wireframes for larger view)

<a href='/images/wireframe-scrabble@2x.png'><img src='/images/wireframe-scrabble@2x.png' style='max-width:300px;' alt=''></a><br>
<a href='/images/wireframe-bill-splitter@2x.png'><img src='/images/wireframe-bill-splitter@2x.png' style='max-width:300px;' alt=''></a><br>
<a href='/images/wireframe-password-generator@2x.png'><img src='/images/wireframe-password-generator@2x.png' style='max-width:300px;' alt=''></a>

All the requirements for this assignment are outlined on the [submission form](/submit/?aid=2), the following are highlights:

+ Your application should be accessible via `http://a2.yourdomain.com`.
+ 3 is the minimum amount of inputs, but you can have more.
+ 3 of the inputs should be unique (i.e. a text input, textarea, and checkbox would be acceptable, but two text inputs and a drop down would not be).
+ On your interface, any inputs that are required should be labeled as such.
+ Your application should apply the principles of separation of concerns as outlined in the notes on *PHP and HTML*.
+ You can use any of the 3 form design flows as outlined in the *Forms* notes.
+ Any form data should be sanitized before being output to the page.
+ You can use POST or GET&mdash; choose the method that is most appropriate for the application.
    + Most of the applications will likely want to use GET as we're only retreiving info, not interacting with a database etc. All of the given examples would be best suited for GET.
    + A possible exception might be if you have a textarea that's accepting a lot of data; then you should use POST.
+ You should use at least 1 Class/Object.

## Avoiding Code Plagiarism
The internet is full of tutorials and examples for the kind of application you'll create for this assignment. Aside from the serious academic consequences, to build your assignment based on any found examples would only be cheating yourself from the experience of completing the work.

This is not to say you can't use outside resources as guidance&mdash; the ability to troubleshoot and seek out answers is one of the learning goals of this course.

Just think carefully about the kind of help you're looking for in your searches.

For example:
+ Safe search: *how do I round a number up in php*
+ Dangerous search: *php tip calculator*

The first example is very specific to one component of your application, while the latter example is too broad.

Also be smart about looking at classmate's code. Again, one of the goals of this course is to collaborate with others and because of that, we use public repositories and freely share code for troubleshooting purposes. That being said, there is an obvious line between looking at a classmates code to help them troubleshoot their specific problem, and looking at a classmates code because you can't figure out something in your own assignment. The former is encouraged, while the latter is unacceptable. If you are stuck, you should narrow down your question and articulate it in Piazza.

Red flags that may cause us to have concern about the originality of your work:
+ Program is designed in a way that is noticibly different than the approaches used in lecture.
+ Work submitted is of a noticibly different quality than other code we've seen from you (in Piazza, office hours, etc.)
+ Work shows high similarity to other code using [Standford's Measure Of Software Similarity program](https://theory.stanford.edu/~aiken/moss/)

Assignments that raise concerns of originality may be submitted to the HES academic board for review.

If you have any concerns or questions about code originality, discuss with me or your TA.


@stop
