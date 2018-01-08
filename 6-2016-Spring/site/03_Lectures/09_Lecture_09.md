## Housekeeping


* [Introduce P4](/Projects/P4) and the [P4 Planning Doc](/Projects/P4_Planning_Doc)
* Directory listing security
    + Vulnerable:
        + http://162.243.95.209/foobooks
        + http://dwa15-practice.biz/foobooks
    + Fix by updating `/etc/apache2/sites-enabled/000-default.conf` on DigitalOcean
        + Change the main document root to one of the public folders on your subsites, for ex: `DocumentRoot /var/www/html/p3/public`


## Lecture


+ [Database Primer](https://github.com/susanBuck/dwa15-spring2016-notes/blob/master/03_Laravel/16_Database_Primer.md)
+ [Local Database Setup](https://github.com/susanBuck/dwa15-spring2016-notes/blob/master/03_Laravel/16_Local_Database_Setup.md)
+ [Schemas & Migrations](https://github.com/susanBuck/dwa15-spring2016-notes/blob/master/03_Laravel/18_Schemas_and_Migrations.md)

## To-do

[ ] Practice the steps we covered today with your practice foobooks application:

+ Create a local `foobooks` Database
+ Update your config settings in your project to connect to your local MySQL database
+ Confirm your project can connect to the database using the `/debug` route given in the notes
+ Build and run the `books` migration

[ ] Complete and submit your P4 Planning Doc.

[ ] Take Quiz 9.
