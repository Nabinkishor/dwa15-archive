@extends('templates.master')

@section('title')
    Assignment 1: System Setup
@stop

@section('content')

<a href='/assignments'>&larr; General assignment details</a>

# Assignment 1: System Setup

__&rarr; <a href='/submit/?aid=1'>A1 Submission Form</a>__

__&rarr; Refer to the [schedule](/schedule) for A1 submission and quiz dates.__


## Summary
For this assignment, you will create a single page website that displays the following information:

+ Your name
+ A photo of yourself <sup>1</sup>
+ A brief paragraph introducing yourself (what do you do, what brings you to this course, etc.)
+ A random quote

__Example__: <a href='http://a1.dwa15.com' target='_blank'>http://a1.dwa15.com</a>

## Goals
+ Demonstrate that you have sucessfully set up a) your local server, b) your git workflow, and c) your production server.
+ Demonstrate your foundational HTML/CSS skills necessary for this course.
+ Provides some information about yourself so we can get to know you.
+ Practice a little bit of PHP.

## Requirements
+ Your page should be accessible via `http://a1.yourdomain.com`.
+ You should use at least a minimimal amount of external CSS to cleanly style the page; it does not have to be a work of art, but we do want you to demonstrate you are comfortable with CSS. You can, *but don't have to*, use CSS tools like Bootstrap, SASS, etc.
+ Quote feature...
    + Should be powered by PHP.
    + Should randomly pull from a selection of 3 different quotes each page load.
    + The purpose of this requirement is to a) confirm your servers can run PHP, and b) give you an opportunity to practice the initial PHP info assigned as readings between Lecture 2 and 3.
+ <span style='background-color:yellow'>In addition to the above points, a detailed list of requirements are detailed on the __[submission page](/submit/?a=1)__. Review this form before and during your assignment development so you're aware of all expectations.</span>


<br><br>
Footnotes
<small>
1. If you have privacy concerns about putting a photo of yourself online, you can use an alternative image (of your pet, a cartoon, whatever).
</small>

@stop
