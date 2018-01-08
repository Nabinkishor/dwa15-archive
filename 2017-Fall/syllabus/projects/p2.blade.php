
# Project 2: PHP Fundamentals

For this project you will create a simple web application using the fundamental PHP concepts we'll cover in lecture.

Your application will use a form with at least 3 unique form inputs that, when submitted, produces some output that is influenced by the input. Below are wireframes for example concepts to give you an idea of the scope of application you should create.

You can...
+ Implement one of these concepts as is
+ Implement one of these concepts with your own customizations/variations
+ Come up with your own concept that is similar in spirit to these examples

*(click wireframe for larger view)*

<a href='{{ $cdn }}wireframe-bill-splitter@2x.png'><img src='{{ $cdn }}wireframe-bill-splitter@2x.png' style='max-width:150px;' alt=''></a>
<a href='{{ $cdn }}wireframe-password-generator@2x.png'><img src='{{ $cdn }}wireframe-password-generator@2x.png' style='max-width:150px;'></a>
<a href='{{ $cdn }}wireframe-scrabble@2x.png'><img src='{{ $cdn }}wireframe-scrabble@2x.png' style='max-width:150px;' alt=''></a>
<a href='{{ $cdn }}wireframe-pig-latin-translator@2x.png'><img src='{{ $cdn }}wireframe-pig-latin-translator@2x.png' style='max-width:150px;' alt=''></a>


## Finalizing
+ You will work on this project during Weeks 3 and 4.
+ The project will be finalized in the Week 4 progress log which is due before Sep 27 @ 11:59pm Eastern.
+ You do not need to officially submit your project&mdash; I'll prompt for all the necessary details in your progress logs.


## Avoiding code plagiarism
Be sure to read <a href='https://dwa15.com/policies#Original work and academic integrity'>Policies: Original work and academic integrity</a> to make sure you are responsibly using outside resources and getting the most out of this project.


## Requirements
+ Accessible via `http://p2.yourdomain.com`.
+ Inputs
    + 3 is the minimum amount of inputs, but you can have more.
    + 3 of the inputs should be unique (i.e. a text input, textarea, and checkbox would be acceptable, but two text inputs and a drop-down select would not be).
    + The inputs should collect data from the user, thus a button does not count as input.
+ Any inputs that are required should be labeled as such.
+ Your code should apply the principles of separation of concerns as outlined in the notes on [*PHP and HTML*](https://github.com/susanBuck/dwa15-fall2017/blob/master/02_PHP/09_PHP_and_HTML.md).
+ You can use any of the 3 form design flows as outlined in the [notes on forms](https://github.com/susanBuck/dwa15-fall2017/blob/master/02_PHP/10_Forms.md).
+ You can use POST or GET&mdash; choose the method that is most appropriate for the application.
    + Most of the applications will likely want to use GET as we're only retreiving info, not interacting with a database etc. All of the given examples would be best suited for GET.
    + A possible exception might be if you have a textarea that's accepting a lot of data; then you should use POST.
+ Any form data should be sanitized before being output to the page.
+ (Week 4) Data from your forms should be validated on the server to avoid unexpected output. (Validation before submission with JS is *optional*).
+ (Week 4) You should use at least 1 class/object
    + To satisfy this requirement you can do any one of the following:
    1. Utilize the provided [*Form*](https://github.com/susanBuck/dwa15-php-practice/blob/master/Form.php) class.
    2. Write your own class to meet your assignment needs (like [*Book*](https://github.com/susanBuck/foobooks0/blob/master/Book.php) in [Foobooks](https://github.com/susanBuck/dwa15-php-practice/blob/master/foobooks))
    3. Do both 1 & 2


#### System
@include('projects._system')

#### Presentation
+ Do not copy the style shown in the wireframes&mdash; create your own style.
@include('projects._presentation')

#### Code
+ Forms should be processed in PHP and the result should be displayed in HTML. JS can optionally be used as a supplement (e.g. adding a layer of client-side validation), but not a substitute.
+ Use modern and semantic HTML; running your site's live URL through the [w3 validator](https://validator.w3.org) should produce no errors. Any known/unavoidable errors should be explained in your progress log.
+ Code should be consistent and organized, following all the specifications outlined in the notes on [Code style](https://github.com/susanBuck/dwa15-fall2017/blob/master/02_PHP/99_Code_style.md).
+ Any CSS or JS should be external. Embedded CSS/JS is acceptable only in the case of one page sites. Inline CSS/JS is not acceptable.



#### Misc
- Follow any/all other best practices not explicitly mentioned above but discussed in lecture/notes.
