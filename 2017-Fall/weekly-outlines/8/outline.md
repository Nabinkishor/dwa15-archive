### Housekeeping
+ Note: Canvas is not sending me notifications on replies to comments in progress logs. Moving forward, email me (`susanbuck@fas.harvard.edu`) if you have follow-up notes/questions about the feedback.
+ Next Week (9): P3 Workshop
    + No lecture videos; no new material; focus on finalizing P3
    + In addition to regular office hours I'll be online in the chat Wed 8-10pm for questions/troubleshooting help
    + Despite no lecture videos, there *will* be a progress log this week (where you'll finalize P3)
+ Note, Week 10: No office hours
+ Directory listing security
    * Vulnerable:
        * http://165.227.216.17/foobooks
        * http://dwa15.me/foobooks
        * Fix: Create a new file called `.htaccess` in `/var/www/html` and put `Options -Indexes` in it
+ Put images and other client-side assets in `public/`


### Topics

Foobooks updates:
+ Added nav bar to master template
+ Main logo links to homepage
+ Link to Foobooks on Github in the footer
+ Pulled in Bootstrap + Font Awesome
+ Fleshed out Welcome page
+ Added global styles (`/css/foobooks.css`)
+ Fleshed out content and styling on book listing page (`/css/book.css`)
+ Fleshed out Trivia example to load a clue from `/database/clues.json`

Recap of features in progress:
+ Directory listing of all books: http://foobooks.dwa15.me/book
+ Page to view an individual book, e.g.: http://foobooks.dwa15.me/book/the-great-gatsby
+ Trivia: http://foobooks.dwa15.me/trivia

Today:
+ [Forms with GET](https://github.com/susanBuck/dwa15-fall2017/blob/master/03_Laravel/19_Forms_GET.md)
+ [Forms with POST](https://github.com/susanBuck/dwa15-fall2017/blob/master/03_Laravel/20_Forms_POST.md)
+ [Validation](https://github.com/susanBuck/dwa15-fall2017/blob/master/03_Laravel/21_Validation.md)
+ Progressing on P3
