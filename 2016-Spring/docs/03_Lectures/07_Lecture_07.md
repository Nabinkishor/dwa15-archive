## Housekeeping
+ Reminder: Daylight savings time begins at 2am on Sunday, March 13.
+ Spring Break: Mar 13 to Mar 20
    + No lecture Thu Mar 17
    + No sections Sun Mar 13 - Sat Mar 19
    + Sections will resume Sun Mar 20 (Andrew's)

## Misc changes to foobooks

+ Front-end improvements
    + Bootstrap from <https://bootstrapcdn.com>
    + Theme from: <https://bootstrapcdn.com/bootswatch>
    + Added master stylesheet, `foobooks.css`
    + Sticky footer from: <http://mystrd.at/modern-clean-css-sticky-footer>
    + Added nav element
    + Made logo clickable
+ Views/routes: No more strings being returned from BookController.php
+ Log viewer
    + <https://github.com/rap2hpoutre/laravel-log-viewer>
    + Locked down to local (see `routes.php`)
+ Debugbar
    + Add: `storage/debugbar` to `.gitignore`
    + Enabling/disabling debugbar
        + Run: `php artisan vendor:publish`
        + Then update `config/debugbar.php`: `'enabled' => env('DEBUGBAR_ENABLED', false),`
        + Then define DEBUGBAR_ENABLED in `.env`: `DEBUGBAR_ENABLED=true`
+ Live URL: <http://foobooks.dwa15-practice.biz>

## Lecture

[Forms](https://github.com/susanBuck/dwa15-spring2016-notes/blob/master/03_Laravel/14_Forms.md)

[Validation](https://github.com/susanBuck/dwa15-spring2016-notes/blob/master/03_Laravel/15_Validation.md)


## To-do
[ ] P3 Progress

[ ] Take Quiz 7, available Mon Mar 14 @ 5:30pm EST.
Because of Spring Break, this Quiz is not due until Thu Mar 24 @ 5:30pm.
