@extends('templates.master')

@section('title')
    Assignments
@stop

@section('content')

# Assignments

Choose an assignment ot learn more:
<ul>
    <li><strong><a href='/assignments/a1'>A1: System Setup</a></strong></li>
    <li><strong><a href='/assignments/a2'>A2: PHP</a></strong></li>
    <li><strong><a href='/assignments/a3'>A3: Framework (Laravel)</a></strong></li>
    <li><strong><a href='/assignments/a4'>A4: Framework + Database</a></strong></li>
</ul>


## Grading
Assignments will receive a grade based on the following 3 components:

### Component 1. Submission
**Purpose: Give you hands on practice with the curriculum.**

+ All assignments should be available on both your production server and Github.com (instructions for this covered in Lecture 2).
+ Submit completed assignments [via this form](http://app.dwa15.com/submit) before 11:59pm Eastern on the due date.
+ [Read the policy for late submissions...](/assignments/late-policy)


### Component 2. Quiz
**Goal: Assess your understanding of the curriculum.**

After completing your assignment submission, you will then take a quiz in Canvas to assess your understanding of the learning goals covered in the assignment.

While Lecture quizzes are designed to be simple check-ins to help everyone keep on top of the lecture material, assignment quizzes may be more challenging and are designed to have you critically thinking about the curriculum.

__Quiz format__

+ 20 to 60 minute time limit
+ Unlike the Lecture quizzes, you will be able to review previous answers as you take the quiz
+ Mixture of question types (multiple choice, fill-in, etc.)
+ May involve a sample code base from which you'll have to pull your answers

<br>
__Quiz logistics__
+ Released: on the Submission deadline.
+ Due: 7 days after the Submission deadline.
+ Note Release/due times are 11:59pm Eastern (in contrast to Lecture quizzes which are released/due at 6:30pm Eastern).
+ There is no late policy for assignment quizzes, they must be completed on time to be accepted.

<br>
__Example timeline__
+ A1 Submission is due Thu Feb 9 by 11:59pm Eastern
+ A1 Quiz will be released at this same time
+ Must be completed by the following Thu @ 11:59pm Eastern

### Component 3. Peer review
**Purpose: Give you the opportunity to explore alternative code solutions, and improve on your own skills by thinking critically about code and application design.**

+ Only applies to A2, A3, A4.
+ Score is on the quality/effort of your review for your peer.
+ [Completed here...](http://app.dwa15.com/review)


## Distribution
Each component is split equally.

+ In the case of A1 that's 50% for Submission and 50% for Quiz.
+ In the cases of A2, A3, A4 that's 33% Submission, 33% Quiz, 33% Peer review.

@endsection
