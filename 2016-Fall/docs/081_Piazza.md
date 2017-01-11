## Getting set up

<http://piazza.dwa15.com>

Before the semester starts, I will upload the class roster to Piazza which will send you an invite to join.

If you register late, or don't receive an invite by the time I send the semester welcome email, email me at susanbuck@fas.harvard.edu to request an invite.



## About Piazza
Piazza is a __question and answer forum__ we will use in this course. Piazza affords you the space to clearly document and articulate your questions, where your classmates and TA can weigh in with advice.

By sharing questions and information via Piazza, we'll all benefit from the collective knowledge of the class.

We encourage you to ask questions when you're struggling to understand a concept&mdash; you can even do so anonymously.

Benefits of Piazza:

+ Allows us to easily track which questions are resolved vs. which ones are still pending.
+ Fast&mdash; searching, loading posts, etc. are very quick relative to other discussion software.
+ It operates similarly to other industry Q&A forums (such as Stackoverflow).

__Piazza should not be used for direct or private communication. If you have a question for me or your TA, email us or message us on Slack.__ Because of the sometimes high volume of posts on Piazza, personal messages may get lost in Piazza.

Here's a general flow chart for how questions are addressed in this course:<br>

<img src='http://dwa15.com.s3.amazonaws.com/question-flow-chart@2x.png' style='max-width:720px'>




## Responsibility
Please note that completing your work is your own responsibility and the primary purpose of Piazza is to create a space where classmates can help each other out.

While we will make our best effort to help everyone out, not getting your individual issue resolved by a TA is not an acceptable excuse for a non-working project submission.



## Getting help effectively
<img src='http://dwa15.com.s3.amazonaws.com/anatomy-of-a-good-piazza-question@2x.png' class='' style='min-width:700px; width:100%' alt=''>

One of the skills you'll be working on in this class is how to articulate technical problems; this is an essential skill for any programmer. The more information you can provide, the quicker your peers will be able to help you.

The following is a quick summary of guidelines to help you build good questions.

* Use Piazza's **plain text editor** and wrap any code snippets in `<pre></pre>` tags.
* Use informative question titles.
* Describe what behavior you are expecting.
* Describe what behavior are you actually receiving.
* Include relevant errors and exceptions.
* Include relevant code snippets.
* Include Github URL.
* Include a URL where we can see the issue.
* Include relevant environment details (live server, local server, Windows, Mac, etc.).

### Search first for quicker resolutions
Google, [StackOverflow](http://stackoverflow.com) and the [Laravel Forum](http://laravel.io/forum) are invaluable resources and can often solve your problem quicker than waiting for a response on Piazza.

If you can't find your answer there, then search Piazza to see if anyone else is having a similar issue which has already been solved.

If you can't find your solution, then post a new question in Piazza.

### Give us environment information
* If it's a local problem, let us know what OS and server software you're running.
* If the problem is occurring on a live host, share any applicable links.
* If it's a client-side (HTML, CSS, JavaScript) problem, let us know what browser you're seeing the problem in.

### Provide visuals
Creating screenshots and/or screencasts are simple with [Jing](http://www.techsmith.com/jing.html).

### Provide code
Always include a link to the relevant GitHub repository when posting a link.

Also, always make sure your repository is up to date before posting. It's frustrating to try and help someone to debug a problem only to find out you're not looking at the same code they are.

### Use informative question titles
Bad: *Code won't work! Help!*
Good: *How could I update multiple rows at once?*
Good: *Receiving error "unable to open input stream"*

### Make your question easy to parse
When applicable: Break down paragraphs. Be concise. Use bullet points.

If you're troubleshooting, be clear about what you expect to happen and how that differs from what is actually happening.


### Read more...
[Writing the Perfect Question](http://codeblog.jonskeet.uk/2010/08/29/writing-the-perfect-question/)


<!--
I want to display a View from a simple route.
However, when I hit the route in by browser, it's throwing a "MethodNotAllowedHttpException" error.

Here's the Route code:
<pre>Route::post('foobar', function() {
    View::make('foobar');
});
</pre>
Here's the View code:
<pre>@extends('_master')

@section('title','Women\'s Coding Collective')

@section('content')

	Hello World

@stop
</pre>
Any ideas?
You can see my full code at http://github.com/jdoe/p1
Screenshot of the error: http://note.io/1rpjI8L
Live example of the error: http://jdoe.com/p1/foobar
-->
