@extends('templates.master')

@section('title')
    Lecture 8 - Mar 23
@stop

@section('content')

<a href='/lectures'>&larr;  All lecture outlines</a>

# Lecture 8 - Mar 23

## Housekeeping

#### A3 Workshop
+ Next week (Thu Mar 30), there will **not** be new lecture videos&mdash; instead we will hold a **A3 Workshop** from 5:30-10:30pm Eastern where the teaching team will be online for live help.

+ The workshop is an opportunity to get help resolving issues on your Assignment 3, in anticipation for the deadline the following week.

__How the workshop works__
+ From 5:30-10:30pm Eastern TAs and myself will be online.

+ To get assistance, log in to Slack and add your name to the queue on this spreadsheet: <http://workshop.dwa15.com>

+ As we become available, we'll pick a name from the top of the queue and direct message you in Slack.

+ Being online during the workshop is OPTIONAL. If you're unavailable, you will still have your TA's regular office hours to get help.

__What about the weekly lecture quiz?__
+ Even though there is no new lecture material in Week 9, **we will still have a Week 9 quiz** that will be released and due per the usual lecture quiz schedule. This quiz will be a review of fundamental concepts we have covered in the course thus far.


#### Server downtime reflection
+ <https://status.asmallorange.com>
+ Application monitoring (e.g. [StatusCake](https://www.statuscake.com/))
+ No server is fool-proof. Have a back-up *and* restoration plan.
+ An application is mostly code, but it's also server configs, software versions, directory permissions, etc. This needs to be taken into consideration when deploying an application to different servers.
+ [Apache vs. Nginx](https://www.digitalocean.com/community/tutorials/apache-vs-nginx-practical-considerations), [Forge](https://forge.laravel.com) - Convenient server provisioning/management

#### A2 showcase
+ <http://a2.michael-dwa.me> ([repo](https://github.com/bouldermike/a2))
+ <http://a2.jjanelle.me> ([repo](https://github.com/jonjanelle/DWA-A2))
+ <http://a2.rogue42.me> ([repo](https://github.com/qedpro10/a2))

### (Optional) [deploy shell script](https://gist.github.com/susanBuck/c0294946b780c17ee30381fea3e6ed28)

#### Directory listing security
* Vulnerable:
    * http://138.197.115.70/foobooks
    * http://dwa15.me/foobooks
* Fix: Create a new file called `.htaccess` in `/var/www/html` and put `Options -Indexes` in it

#### For reference: `laravel-log-viewer` has been installed in [foobooks](https://github.com/susanBuck/foobooks/blob/master/routes/web.php)

<br><br>

## Lecture
+ [Forms with GET](https://github.com/susanBuck/dwa15-spring2017-notes/blob/master/03_Laravel/17_Forms_GET.md)
+ [Forms with POST](https://github.com/susanBuck/dwa15-spring2017-notes/blob/master/03_Laravel/18_Forms_POST.md)
+ [Validation](https://github.com/susanBuck/dwa15-spring2017-notes/blob/master/03_Laravel/18_Validation.md)



<br><br>

## To-do
+ If you haven't already, Complete A2 [peer review](/review) by tonight, Thu Mar 23 @ 11:59pm Eastern
+ Work on Assignment 3
+ Readings: See the required readings at the end of the [Validation notes](https://github.com/susanBuck/dwa15-spring2017-notes/blob/master/03_Laravel/18_Validation.md)
+ Complete Lecture 8 quiz in Canvas by Thu Mar 30 @ 6:30pm Eastern



@endsection
