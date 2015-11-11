@extends('layouts.master')

@section('title')
    Edit Book
@stop


@section('content')

    <h1>Edit</h1>

    @if(count($errors) > 0)
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
    @endif

    <form method='POST' action='/books/edit'>

        <input type='hidden' value='{{ csrf_token() }}' name='_token'>

        <fieldset>
            <label>* Title:</label>
            <input
                type='text'
                id='title'
                name='title'
                value=''
            >
        </fieldset>

        <fieldset>
            <label for='title'>* Author:</label>
            <input
                type='text'
                id='author'
                name="author"
                value=''
            >
        </fieldset>

        <fieldset>
            <label for='title'>* Cover (URL):</label>
            <input
                type='text'
                id='cover'
                name="cover"
                value=''
                >
        </fieldset>

        <fieldset>
            <label for='Published'>Published (YYYY):</label>
            <input
                type='text'
                id='published'
                name="published"
                value=''
                >
        </fieldset>

        <fieldset>
            <label for='title'>* URL To purchase this book:</label>
            <input
                type='text'
                id='purchase_link'
                name='purchase_link'
                value=''
                >
        </fieldset>

        <br>
        <button type="submit" class="btn btn-primary">Save changes</button>
    </form>

@stop
