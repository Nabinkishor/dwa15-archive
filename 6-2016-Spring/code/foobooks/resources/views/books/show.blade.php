@extends('layouts.master')

@section('title')
    {{ $book->title }}
@stop

@section('head')
    <link href='/css/book.css' rel='stylesheet'>
@stop

@section('content')

    <h1 class='truncate'>{{ $book->title }}</h1>

    <h2 class='truncate'>{{ $book->author->first_name }} {{ $book->author->last_name }}</h2>

    <img class='cover' src='{{ $book->cover }}' alt='Cover for {{$book->title}}'>

    <div class='tags'>
        @foreach($book->tags as $tag)
            <div class='tag'>{{ $tag->name }}</div>
        @endforeach
    </div>

    <a href='/book/edit/{{$book->id}}'><i class='fa fa-pencil'></i> Edit</a><br>
    <a href='/book/confirm-delete/{{$book->id}}'><i class='fa fa-trash'></i> Delete</a><br>

    <h3>Other books by {{ $book->author->first_name }} {{ $book->author->last_name }}</h3>
    @foreach($otherBooksByThisAuthor as $otherBook)
        <a href='{{$otherBook['volumeInfo']['infoLink']}}'>{{ $otherBook['volumeInfo']['title'] }}</a><br>
    @endforeach

@stop


@section('body')
    <script src="/js/book/show.js"></script>
@stop
