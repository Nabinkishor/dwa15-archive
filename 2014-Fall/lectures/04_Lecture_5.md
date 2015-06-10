## Housekeeping

* Shellshock (aka *Bash Bug*)

On your DO droplet, this command will let you know if your Bash is vulnerable:
```bash
env 'VAR=() { :;}; echo Bash is vulnerable!' 'FUNCTION()=() { :;}; echo Bash is vulnerable!' bash -c "echo Bash Test"
```

If it is, this command will update Bash to resolve the issue:
```bash
sudo apt-get update && sudo apt-get install --only-upgrade bash
```

Learn more...

+ <a href='https://www.digitalocean.com/community/tutorials/how-to-protect-your-server-against-the-shellshock-bash-vulnerability'>DigitalOcean Blog post</a>
+ <a href='http://www.engadget.com/2014/09/25/what-is-the-shellshock/'>Engadget &ldquo;What is the Shellshock Bash bug and why does it matter?&rdquo;</a> (Shout-out to classmate Jose who authored this!)



## Lecture

Setting up / Getting to know Laravel...

* [Intro](https://github.com/susanBuck/notes/blob/master/05_Laravel/00_Intro.md)
* Intro to Composer & [Composer set up](https://github.com/susanBuck/notes/blob/master/05_Laravel/01_Composer_Setup.md)
* [New app set up](https://github.com/susanBuck/notes/blob/master/05_Laravel/02_App_Setup.md)
* Tour of Laravel and how the app is bootstrapped
* [Deploy](https://github.com/susanBuck/notes/blob/master/05_Laravel/02_Deploy.md)

Start writing the code...

* [Routing](https://github.com/susanBuck/notes/blob/master/05_Laravel/04_Routing.md)

## To-do

[ ] Submit P2 if you haven't already.

[ ] Complete the Quiz.

[ ] Look over P3 spec so you have an idea in your head of what you're working towards this week.

[ ] Get a Laravel app up and running on your local server.

[ ] Version control this app, and deploy it to Digital Ocean, with a working subdomain.

[ ] Readings:

Objected Oriented Programming:

* Read this first: [killerphp.php: OOP in PHP Tutorial](http://www.killerphp.com/tutorials/object-oriented-php/downloads/oop_in_php_tutorial.pdf)
* Then read this to re-iterate the above: [tutsplus.com: OOP PHP for Beginners](http://net.tutsplus.com/tutorials/php/object-oriented-php-for-beginners/)
* Skim or Bookmark: [PHP.net OOP](http://www.php.net/manual/en/language.oop5.php)

	
CodeBright

* Responses
* Filters
* <strike>Controllers</strike> (Ok to skip&mdash; we'll come back to this later.)
* Blade
* Advanced Routing 
* URL Generation (Skim if you have time, not required.)
* Request Data: *Retrieval* and *Old Input* (Ok to skip *Uploaded Files* and *Cookies*)


