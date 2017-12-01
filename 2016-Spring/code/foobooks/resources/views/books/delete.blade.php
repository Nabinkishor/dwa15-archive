@extends('layouts.master')

@section('title')
    Delete Book
@stop

@section('content')
    <h1>Delete Book</h1>
    <p>Are you sure you want to delete <em>{{$book->title}}</em>?</p>
    <p><strong><a href='/books/delete/{{$book->id}}'>Yes, delete it.</a></strong></p>
    <p><a href='/book/show/{{$book->id}}'>No, I changed my mind.</a></p>
@stop
