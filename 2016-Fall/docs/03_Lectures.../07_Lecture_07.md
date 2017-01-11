## Housekeeping
Next Week: __P3 Workshop__

### Deploying changes to DigitalOcean
Deployment is now a 2 step process:

1. `git pull origin master`
2. `composer install`

Local: `composer update` vs Production: `composer install`

Disable debug on Production by editing `.env` on DigitalOcean copy

### Misc changes to foobooks
+ Replace welcome page
+ Front-end improvements
    + Bootstrap from <https://www.bootstrapcdn.com>
    + Theme from: <https://www.bootstrapcdn.com/bootswatch>
    + Added master stylesheet, `/public/css/foobooks.css`
    + Sticky footer from: <http://mystrd.at/modern-clean-css-sticky-footer>
    + Added nav element
    + Made logo clickable
+ Log viewer
    + <https://github.com/rap2hpoutre/laravel-log-viewer>
    + Locked down to local (see `routes/web.php`)
+ Debugbar
    + Add: `storage/debugbar/*` to `.gitignore`
    + Enabling/disabling debugbar
        + Run: `php artisan vendor:publish`
        + Then update `/config/debugbar.php`: `'enabled' => env('DEBUGBAR_ENABLED', false),`
        + Then define DEBUGBAR_ENABLED in `.env`: `DEBUGBAR_ENABLED=true`
+ Live URL: <http://foobooks.dwa15-practice.biz>



## Lecture
+ [Forms](https://github.com/susanBuck/dwa15-fall2016-notes/blob/master/03_Laravel/16_Forms.md)
+ [Validation](https://github.com/susanBuck/dwa15-fall2016-notes/blob/master/03_Laravel/17_Validation.md)



## To-do
__[ ] P3 Progress__

+ Add forms connecting them to their POST destination
+ Validate any form data

At this point, we've covered the fundamentals of what you need to build P3.

Using routes, controllers, and views, you can produce pages.
You know how to pass and inject data into the views.
You can also submit and validate form data.

Your job now, then, is to fill in the spaces between these pieces, with the logic of your application.

__[ ] Take Quiz 7 before next lecture__
