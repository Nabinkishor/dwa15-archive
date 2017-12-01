Due to a bout of laryngitis, I've lost my voice and am unable to do a live lecture tonight.

As a substitute, watch these videos from last semester:

**[Part 1: Housekeeping (22:38)](https://www.youtube.com/embed/lXw5y8OtVGQ)**

<small>Note that any reference to schedules/deadlines are relevant to last semester. Please see this semester's schedule for accurate dates.</small>

**[Part 2: Database Primer (52:02)](https://www.youtube.com/embed/S1eBK88byY0)**

**[Part 3: Local DB Setup (09:00)](https://www.youtube.com/embed/sq_sEHQ859U)**

<small>In this video, the routes file is called routes.php as this was using a slightly older version in Laravel. Ignore that, and put the provided debug code in your regular /routes/web.php file.</small>

**[Part 4: Migrations (29:05)](https://www.youtube.com/embed/gilSwFjI5-Q)**

## Housekeeping
* [Introduce P4](/Projects.../P4) and the [P4 Planning Doc](/Projects.../P4_Planning_Doc)
* Directory listing security
    + Vulnerable:
        + http://162.243.95.209/foobooks
        + http://dwa15-practice.biz/foobooks
    + Fix by updating `/etc/apache2/sites-enabled/000-default.conf` on DigitalOcean
        + Change the main document root to one of the public folders on your subsites, for ex: `DocumentRoot /var/www/html/p3/public`


## Lecture
+ [Database Primer](https://github.com/susanBuck/dwa15-fall2016-notes/blob/master/03_Laravel/18_Database_Primer.md)
+ [Local Database Setup](https://github.com/susanBuck/dwa15-fall2016-notes/blob/master/03_Laravel/19_Local_Database_Setup.md)
+ [Schemas & Migrations](https://github.com/susanBuck/dwa15-fall2016-notes/blob/master/03_Laravel/21_Schemas_and_Migrations.md)

## To-do

[ ] Practice the steps we covered today with your practice foobooks application:

+ Create a local `foobooks` Database
+ Update your config settings in your project to connect to your local MySQL database
+ Confirm your project can connect to the database using the `/debug` route given in the notes
+ Build and run the `books` migration

[ ] Complete and submit your P4 Planning Doc.

[ ] Take Quiz 9 before next lecture
