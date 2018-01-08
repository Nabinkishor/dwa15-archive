Routes are declared using the `Route` facade in `app/Http/routes.php`

Among other things, `Route` gives you access to these HTTP requests:

1. get
2. post
3. put
4. delete

Here's an example route for the *foobooks* app:

```php
Route::get('/books', function() {
    return 'Here are all the books...';
});
```

The **first parameter** is a URI String that will trigger this route; in this case that's `/books`.

I.e. if a user goes to `http://localhost/books` it will trigger this route.

The **second parameter** can be a *Closure* or a *Controller action*. We'll get to Controllers later, so for now we're passing a Closure (aka an Anonymous function).

>> &ldquo;*Anonymous functions, also known as closures, allow the creation of functions which have no specified name. They are most useful as the value of callback parameters, but they have many other uses.*&rdquo; ([src](http://us2.php.net/manual/en/functions.anonymous.php))

Whatever response is returned from the second parameter will be displayed in the browser.

<img src='http://making-the-internet.s3.amazonaws.com/laravel-route-breakdown@2x.png' class='' style='max-width:861px; width:100%' alt='Route breakdown'>


## Route parameters

You can make route URI's more flexible with route parameters. These parameters act as placeholders that will detect patterns.

For example:

```php
Route::get('/books/{category}', function($category) {
	    return 'Here are all the books in the category of '.$category;
});
```

## Post example

You can have two routes with the same URI that react to different http methods.

```php
Route::get('/new', function() {

	$view  = '<form method="POST">';
    $view .= csrf_field(); # This will be explained more later
	$view .= 'Title: <input type="text" name="title">';
	$view .= '<input type="submit">';
	$view .= '</form>';
	return $view;

});

Route::post('/new', function() {

	$input = Input::all();
	print_r($input);

});
```


## Set up a practice route

In `/app/Http/routes.php` define a practice route:

```php
Route::get('/practice', function() {

	echo 'Hello World!';

});
```

Load this route ala `http://localhost/practice` and make sure you see *Hello World* on the screen.

For now on, whenever these notes say *"try this in your practice route"* we mean running the code in this route closure.

For example, if we say:

>> Run `echo App::environment();` in your practice route to see how you can get Laravel to tell you what environment you're on.

...we're expecting you to do this:

```php
Route::get('/practice', function() {
	echo App::environment();
});
```




## Artisan routes
Artisan is a PHP command line tool that ships with Laravel and provides many shortcuts and utilities for working with your app.

For our first example of what Artisan can do, have it tell you what routes are set up in your application:

```bash
$ php artisan route:list
```

Note: The `php artisan` command must always be run from *within* your application.



## Read More
+ https://laravel.com/docs/routing
