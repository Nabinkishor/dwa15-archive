@extends('layouts.master')

@section('title')
    Create Book
@stop


{{--
This `head` section will be yielded right before the closing </head> tag.
Use it to add specific things that *this* View needs in the head,
such as a page specific styesheets.
--}}
@section('head')
    {{-- <link href="/css/books/create.css" type='text/css' rel='stylesheet'> --}}
@stop



@section('content')

    <h1>Add a new book</h1>

    <form method="POST" action="/books/create">

        <fieldset>
            <label for='title'>Title:</label>
            <input type="text" id='title' name="title">
        </fieldset>

        <br>

        <input type="submit" value='Add book'>
    </form>
@stop


{{--
This `body` section will be yielded right before the closing </body> tag.
Use it to add specific things that *this* View needs at the end of the body,
such as a page specific JavaScript files.
--}}
@section('body')
    {{-- <script src="/js/books/create.js"></script> --}}
@stop
