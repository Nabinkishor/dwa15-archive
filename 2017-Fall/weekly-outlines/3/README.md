
=============== PART 2 ==================
Last week you completed PHP readings
Fundamentals of PHP
Comfortable with the syntax
How it works with common programming paradigms
Don't have to memorize all the details, just be aware of where details are.

Today: Go through examples that pull from the notes.
Next week: OOP, Namespacing, Validation

Introduce foobooks (based on foobar)
v0 of foobooks, start with it here then evolve it into a framework for contrast

create foobooks folder
create two files - index.php w/ basic HTML template
throw in h1

create new file - getAllBooks.php
Open php tag with no closing tag

Load in browser
Change document root to foobooks directory

We need some data.
dwa15-php-practice repo, books.json and tools.php
What is JSON

Create books.json
Files in root for now. Maybe css, images, js folder.

Pull in helpers.php
Quick explanation of what the functions do.

require helpers.php in getAllBooks.php
Display page should also require getAllBooks.php
Test

Now we want to fetch all the data in the logic file.
$bookJson = file_get_contents('books.json');

dump($bookJson);

See what that gives us.

Explore function signature for file_get_contents. Comfortable w/ doc.

Back to the code. Translate string form w/ json_decode (look at in docs)

$books = json_decode($bookJson)
Show it
Then force it to be an array (we'll do objects next week)

Example of extracting form books array
dump($books['The Great Gatsby']['author'])

Now what? Let's display books in the view.

Use alternative syntax
<?php foreach($books as $title => $book): ?>
	<div class='book'>
		<h2><?=$title></h2>
	</div>
<?php endforeach; ?>

Test.

Then author.

Summary: Get basic data in logic, then display in view file.

Compare alternative syntax and tag-based-style of HTML.

Validate in w3. Note how it'll look wonky in the browser.

Importing
working in php vs. html
built-in php functions



==================== PART 3 ====================
Expand on foobooks by adding a form to filter/search.

Add bootstrap/css before video and explain why it looks different.
styles.css

Lets us explore form processing. STOP THE VIDEO AND GO READ THE NOTES.

Imagine you had a 100 books.

Add HTML form to collect search term after heading, before display.

<form method='GET' action='index.php'> (refer to the Forms noteset, we'll do Option C)

<input type='submit' class='btn btn-primary btn-small'>

Test the submit.

Request/Response discussion.
Open web inspector - Network
Explore the Request

All sorts of form inputs.

Let's use a basic text input

<label for='filter'>Filter by title:</label>
<input type='text' name='filter' id='filter'>

Try it out. Note the data from the form shows up in the query string.

Now let's use the data in getAllBooks.php.

if (isset($_GET['filter'])) {
	$filter = $_GET['filter'];
}
else {
	$filter = '';
}

dump($filter);

Test it out.

Now lets use the data and do some filtering.
foreach ($books as $title => $book) {
	if ($title != $filter) {
		unset($books[$title]);
	}
}

W/ no form submission, lost initial listing of books.

if ($filter == '') {
	return $books;
}

Make it remember the keyword in the display code.

<?php if ($filter) : ?>
	<div class='alert alert-info'>Filter by <?=$filter?></div>
<?php endif; ?>


Time to talk about security. This is pretty safe - not shared with other users, not going to db, but good to start looking at best practices.

First concern: XSS... don't want them to put something like <script>alert('hi!');</script> in

To do this we use the htmlentities method, which we have a wrapper for in helpers.php.

Look at source code to see the result.


Now lets retain the value in the input:

value='<?=sanitize($filter)?>'


Handle the case where there were no results.

<?php if(count($books) == 0) ?>
	no books found
<?php endif; ?>

Does this belong in logic or display? Probably logic.

$haveResults = false;

Could use POST, but explain why not.


======= PART 4 =======

Expand on this, add a checkbox to make case insensitive search
Note other form input types in practice.

<input type='checkbox' name='caseInsensitive'>
<label>Case insensitive</label>

Note how it shows in the query string. "on". Vs just not existing in the QS.

Back in logic... 

if (isset($_GET['caseInsensitive']) {
	$caseInsensitive = true;
} else {
	$caseInsensitive = false;
}

$caseInsensitive = (isset($_GET['caseInsensitive']) ? true : false;

Test it out by dumping.

Now alter the foreach

if ($caseInsensitive) {
	$match = strtolower($title) == strtolower(filter);
} else {
	$match = $title == $filter;
}

if (!$match) {
	unset($books[$title])
}

Test/demo.

Now lets retain the value.
Show w/ and w/o CHECKED
Now get it done w/ php code

<?php if ($caseInsensitive) echo 'CHECKED' ?>



Conclude. Don't forget about the other form examples.
	Arrays of radios/checkboxes.
	"Choose one" on dropdown
	Impacting CSS with PHP
