@extends('templates.master')

@section('content')

<script>var jumpTo = true;</script>

@markdown
# Readings

## Primary Reading
It's difficult to pick one definitive text for a course on web development. The material we're working with changes so rapidly that most traditional textbooks become quickly outdated and even the good ones are often full of issues as the material evolves.

Given that, I share a __comprehensive set of lecture notes that are published each week and are available via Github at <http://notes.dwa15.com>__. These notes are your primary resources for this course, as they are customized to the material we're covering in lecture.

In addition to my notes, you will also rely heavily on the following online resources:

+ [Official PHP documentation](http://php.net/manual/en/)
+ [Official Laravel documentation](https://laravel.com/docs/5.2)


### FAQ: Can notes be published ahead of time?
Every semester, there are determined and excited students wishing to get ahead, which on one hand is great. On the other hand, it creates some management problems.

As discussed above, in a class such as this, things change fast. Every semester I have to update notes to keep them current with the latest technology and procedures. If students work ahead from previous semester's notes, they're bound to hit bumps when instructions no longer work as described. It's also possible that I've improved something early on in the course and that change hasn't yet been cascaded to later notes.

When this happens, confusion tends to ensue as students start to post questions on topics we haven't yet covered. This causes some other students to panic, thinking they're behind or have missed something they should be doing. It also creates more volume in the course forum, making it harder for the teaching team to keep up with students asking questions about the current material.

Given all of the above, I will only post notes as we reach them.


### FAQ: I still really like books. Can you recommend some books?
Sure! Here are some selected books that would supplement this course. Some are available as traditional books, some are E-book only.

__PHP__

+ [PHP Pandas](http://daylerees.com/php-pandas): Dayle Rees can be silly at times, but he has a very approachable teaching method.
+ [Modern PHP](http://shop.oreilly.com/product/0636920033868.do): O'Reilly is typically a dependable resource when it comes to programming books.

__Laravel__
+ [Easy Laravel 5](http://www.easylaravelbook.com/): Takes a project based approach to walking through Laravel.
+ [Code Smart, Laravel 5](https://daylerees.com/codesmart) also by Dayle Rees.


## Other resources
+ [Mozilla Developer Network](https://developer.mozilla.org/en-US/docs/Web) for front-end reference
+ [Lynda.com access for Harvard students](http://lynda.harvard.edu)

@endmarkdown
@endsection
