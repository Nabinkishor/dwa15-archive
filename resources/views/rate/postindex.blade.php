@extends('layouts.master')


@section('title')
    Your rate estimates
@stop


{{--
This `head` section will be yielded right before the closing </head> tag.
Use it to add specific things that *this* View needs in the head,
such as a page specific styesheets.
--}}
@section('head')

@stop


@section('content')
    <h1>Your rate estimates</h1>

    From Zipcode : {{ $data['from_zipcode'] }}<br>
    To Zipcode : {{ $data['to_zipcode'] }}<br>

    <br>

    @foreach($rates as $rate)

        {{ $rate->getName() }}: {{ $rate->getCost() }}<br>

    @endforeach

@stop


{{--
This `body` section will be yielded right before the closing </body> tag.
Use it to add specific things that *this* View needs at the end of the body,
such as a page specific JavaScript files.
--}}
@section('body')

@stop
