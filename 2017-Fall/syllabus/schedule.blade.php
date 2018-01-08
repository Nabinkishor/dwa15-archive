@extends('templates.master')

@section('title')
    Schedule
@endsection

@section('/body')
    <link href='/css/schedule.css' rel='stylesheet'>
@endsection

@section('content')

<h1>Schedule</h1>

<?php date_default_timezone_set('America/New_York'); ?>
<div id='notes'>
    <p>All times/deadlines for this course are in the Eastern timezone.
    <p>The current time (as of page load) is <strong><?php echo date('D M jS g:ia'); ?></strong>.
    <p><i class="fa fa-lock" aria-hidden="true"></i> The weekly links below require you to authorize you are a student in this class. Upon clicking, you will be prompted to authorize via your Github account.</p>
</div>

@markdown
### [Week 1 - Aug 30](/week/1)
* What this course covers
* Course logistics
* Command line setup
* Local server setup

### [Week 2 - Sep 6](/week/2)
* Git
* Production server setup
* __Project 1 finalized in this week's progress log__

### [Week 3 - Sep 13](/week/3)
* PHP Part 1

### [Week 4 - Sep 20](/week/4)
* PHP Part 2
* __Project 2 finalized in this week's progress log__

### [Week 5 - Sep 27](/week/5)
* Laravel: Frameworks Intro, Composer set up, New app setup

### [Week 6 - Oct 4](/week/6)
* Laravel: Routing, Laravel structure/life cycle, Controllers

### [Week 7 - Oct 11](/week/7)
* Laravel: Environments, Packages, Views & Blade

### [Week 8 - Oct 18](/week/8)
* Laravel: Forms & Validation

### [Week 9 - Oct 25](/week/9)
* Project 3 Help Wed 8pm-10pm Eastern
* __Project 3 finalized in this week's progress log__

### [Week 10 - Nov 1](/week/10)
* __Note: No office hours this week__
* Laravel: DB Primer, Configuration, Migrations

### [Week 11 - Nov 8](/week/11)
* Laravel: Models/Eloquent, Seeders, Production DB setup

### [Week 12 - Nov 15](/week/12)
* Laravel: Foobooks progress, Collections
* Note: the Week 12 progress log is not due until the Wed after break (Nov 29 @ 11:59pm Eastern)

### Thanksgiving Break Nov 22-26

### [Week 13 - Nov 29](/week/13)
* Laravel: Relationships, More Foobooks progress, Auth/Users <sup>(optional)</sup>

### [Week 14 - Dec 6](/week/14)
* Project 4 help 8-10pm Eastern - [in the course chat](/chat)
* __Project 4 finalized in this week's progress log__

### Exam week
* Your final progress log (Week 14) is due before Wed Dec 13 @ 11:59pm Eastern. Late submissions are <strong>not</strong> accepted for this final progress log.

@endmarkdown

@endsection
