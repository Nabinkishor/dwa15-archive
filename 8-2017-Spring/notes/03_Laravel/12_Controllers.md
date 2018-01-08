## What are Controllers?
+ Controller classes make up the **C** of the **MVC** structure; they act as the glue between the request, the Model and the resulting View (or data).

+ For tiny applications it's convenient to throw all your logic into closures in your routes. As things grow, however, this becomes messy and hard to test.

+ Controllers offer a way to organize your routing logic.

+ Controller classes are stored in `/app/Http/Controllers/`


## New controller

You can manually create controller files, or you can have Artisan generate them for you using the command `php artisan make:controller` followed by the controller name.

For example:

```xml
$ php artisan make:controller BookController
Controller created successfully.
```

Find the resulting file at `foobooks/app/Http/Controllers/BookController.php`

```php
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    //
}
```

Some observations about the generated controller:

+ __Location__
	+ Controller class files are stored in `/app/Http/Controllers/`. This directory is [psr-4](http://www.php-fig.org/psr/psr-4/) loaded in `/composer.json`, so anything you put here will be readily available using the appropriate namespace.
+ __Naming__
	+ You can name a Controller class file anything you want, but it's a convention to suffix it with `Controller` and use [upper CamelCase style](https://en.wikipedia.org/wiki/CamelCase#Variations_and_synonyms) (ex: `BookController`).
	+ It's also a convention that your controller names are singular (e.g. `BookController`, not `BooksController`).
+ __Parent Controller class__
	+ Your controller class should extend Laravel's `Controller` class, which also exists in `/app/Http/Controllers/`.
	+ This base class is where you can put common logic shared by all your controllers.
	+ It also imports several Laravel convenience methods which we'll be taking advantage of.
+ __Methods (aka actions)__
	+ Within your controller class you'll have **public methods** which represent the **actions** of your Controller, which will be tied to routes.


## Connecting Routes to Controllers
Once you have controllers, you can set up your routes so that they invoke specific methods in controllers. This means you don't have to embed logic in your routes file as we've been doing this far.

So, this...

```php
Route::get('/books', function() {
    return 'Here are all the books...';
});
```

Can become this:

```php
Route::get('/books', 'BookController@index');
```

Note how we replaced the closure with `BookController@index` where `BookController` is the name of the Controller to use and `index` is the name of the method within that Controller to use.

You'll also want to move the logic into the `index` method in `BookController.php`:

```php
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller {

	/**
	* GET /books
	*/
    public function index() {
        return 'Here are all the books...';
	}
}
```

After making these changes, visit `http://foobooks.loc/books` to make sure it's still working.


## Summary
Controllers provide a way to organize your application into logical parts. As we progress, we'll add all book related actions (add a book, edit a book, etc.) to the `BookController`.

Eventually, we'll need new controllers, for example an `AuthorController`.



## Required Readings
From: [Laravel Docs: Controllers](https://laravel.com/docs/controllers)
+ [#introduction](https://laravel.com/docs/5.4/controllers#introduction)
+ [#basic-controllers](https://laravel.com/docs/5.4/controllers#basic-controllers)
+ Optional: Skim the rest of the topics
