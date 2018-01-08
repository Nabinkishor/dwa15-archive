# Project 4: Open-ended application (with database)

The final project in this course brings together the skills we've learned throughout the semester to create a fully functioning web application that uses Laravel and interacts with a database.

This project is mostly open-ended with the following key goals:

+ Must use 2 primary database tables and 1 pivot table.
+ Must demonstrate all 4 CRUD database interactions at least once.

You can, but are not required to, implement a user login/registration system that correlates to data in your application (this will be discussed in Week 13).


## Finalizing
+ You will work on this project during Weeks 10, 11, 12, 13, and 14.
+ The project will be finalized in the Week 14 progress log which is due before Wed Dec 13 @ 11:59pm Eastern.
+ As noted on the schedule, late submissions are *not* accepted for this final progress log (this is to allow enough turn-around time for submitting final grades).
+ You do not need to officially submit your project&mdash; I'll prompt for all the necessary details in your progress logs.


## Application inspiration
### Past student applications
+ [__BoardHoarder__](https://www.youtube.com/watch?v=dECfvnTsV5U)
    + Item organizer for boardgames. Users can create, read, update and delete games and various related information to the collection, and can curate their own listing of games by 'hoarding' and tagging those games.
    <!-- https://github.com/andyburgess/csci_e15_p4 -->
+ [__Education Equipment Circulation__](https://youtu.be/bfnx6WXnRsY)
    + A tool to help the Distance Education office track equipment. Featured an interface for users to check in/out equipment and an interface for admins to manage equipment. Neat feature: Kriss printed barcodes for items and was used a barcode reader to input equipment info.
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
* [goodreads](https://www.goodreads.com)
* [RememberTheMilk](http://www.rememberthemilk.com)
* [5 Year Journal](http://www.levenger.com/5-year-journal-core-7150.aspx)
* [TeuxDeux](https://teuxdeux.com)
* [PasteBin](http://pastebin.com)
* [Kids chore charts](https://www.pinterest.com/AnOrganizedFam/kids-chore-charts)
* [Envelope Budgeting](http://www.mvelopes.com)


### Sample application idea: Task Manager
If the open-ended nature of this project is overwhelming, you can implement this sample idea: a task manager. This application might include:
* A page to display all incomplete tasks.
* A page to display all completed tasks.
* Or, a page to display all tasks with incomplete tasks in bold and completed tasks greyed out.
* A feature to add, edit, and delete tasks.
* A page showing one random task allowing the user to focus on a single goal; when they complete that task, a new task is shown.


### More ambitious ideas
If you have an idea for an application you've been wanting to create, but it feels broader than the scope (and timeline) of this assignment, think about tackling a smaller portion of the application as a prototype/proof-of-concept.


### Avoid a straight Foobooks clone
Try to think outside the box of a &ldquo;catalog&rdquo; application like Foobooks&mdash; that is, an application that simply manages records of data (be it books, movies, games, etc.)

A catalog-style application is not off limits. In fact, many of the examples above are catalog-style applications (*BoardHoarder* is cataloging board games, *Judith's Kitchen* is cataloging food, the *Task Manager* is cataloging tasks).

*However*, while these applications bear similarities to the general idea of Foobooks, they do implement unique features not demonstrated in Foobooks, or tackle similar features in a unique way.


## Avoiding code plagiarism
Be sure to read <a href='https://dwa15.com/policies#Original work and academic integrity'>Policies: Original work and academic integrity</a> to make sure you are responsibly using outside resources and getting the most out of this project.


## Requirements

#### General
+ Accessible via `http://p4.yourdomain.com`.
+ Built with Laravel.
+ Appropriate placement of code in routes, controllers, views.
+ Debugging enabled on local, disabled on production.
+ __Database:__
    - At least 1 pivot table used to connect 2 other tables. The connection is somehow used/demonstrated in the interface.
    - At least 2 primary tables, both of which are used/demonstrated in the interface.
    - CRUD: Interface provides a way for the visitor to __Create__ data in at least one of the tables.
    - CRUD: Interface provides a way for the visitor to __Read__ data in at least one of the tables.
    - CRUD: Interface provides a way for the visitor to __Update__ data in at least one of the tables.
    - CRUD: Interface provides a way for the visitor to __Delete__ data in at least one of the tables.
    - Migrations are present and functioning for all tables
    - Seeders are present and functioning for all tables
+ __Form(s):__
    + There are no minimum form input requirements for this project; use what makes sense for your application.
    + Any form data should be appropriately validated using Laravel's Validation features.
    + Visitor-entered form data should be sanitized on output (using Blade's &#123;&#123; &#125;&#125; statements)
+ __Views:__
    + Use Blade.
    + Use template inheritance.
    + Separation of Concerns: No non-display-specific logic in view files.
+ __Packages__
    + [barryvdh/laravel-debugbar](https://github.com/barryvdh/laravel-debugbar) should be installed in *require-dev*.
    + You can, but are not required to, implement any other package(s) you find useful for your project.


#### System
@include('projects._system')

#### Presentation
+ Do not copy the style shown Foobooks&mdash; create your own style.
@include('projects._presentation')

#### Code
+ Forms should be processed in PHP/Laravel and the result should be displayed in HTML. JS can optionally be used as a supplement (e.g. adding a layer of client-side validation), but not a substitute.
+ Use modern and semantic HTML; running your site's live URLs through the [w3 validator](https://validator.w3.org) should produce no errors. Any known/unavoidable errors should be explained in your progress log.
+ Code should be consistent and organized, following all the specifications outlined in the notes on [code style](https://github.com/susanBuck/dwa15-fall2017/blob/master/02_PHP/99_Code_style.md).
+ Any CSS or JS should be external. Embedded CSS/JS is acceptable only in the case of one page sites. Inline CSS/JS is not acceptable.



#### Misc
- Follow any/all other best practices not explicitly mentioned above but discussed in lecture/notes.


## FAQ
__Q) What if my application idea does not need one of the CRUD operations, for example, delete?__

Create a feature that demonstrates the un-needed operation just for the purposes of the project requirements. You do not have to link this feature from your application if it's not actually needed, but I will ask you in a progress log where I can view the feature in action.

__Q) Can I continue the idea I used on a previous project?__

Yes, but you must set up a new project/repository/subdomain specifically for Project 4. From there, you can copy over the portions of code you wish to re-use from a previous project. This may feel redundant, but the process of building a new application from scratch again reinforces the practice of doing so.


__Q) How many controllers/views/routes should my project have?__

That depends on what you're building. Some projects may be similar in scope to P3 and require a single controller, a couple routes, and a couple views. Other projects may have multiple features across multiple pages, in which case you'll need more views/routes and potentially more controllers to logically organize your application.



@endmarkdown

@endsection
