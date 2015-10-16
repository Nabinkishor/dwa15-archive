@extends('layouts.master')


@section('title')
    Calculate rates for a shipment
@stop


{{--
This `head` section will be yielded right before the closing </head> tag.
Use it to add specific things that *this* View needs in the head,
such as a page specific styesheets.
--}}
@section('head')

@stop


@section('content')
    <h1>Calculate rates for a shipment</h1>

    <form method='POST' action='/rates'>

        <input type='hidden' name='_token' value='{{ csrf_token() }}'>

        From Zipcode: <input type='text' name='from_zipcode' value='{{ old('from_zipcode') }}'><br>
        To Zipcode: <input type='text' name='to_zipcode' value='{{ old('to_zipcode') }}'><br>

        <br><br>

        Length: <input type='text' name='length' value='{{ old('length') }}'><br>
        Width: <input type='text' name='width' value='{{ old('width') }}'><br>
        Height: <input type='text' name='height' value='{{ old('height') }}'><br>
        Weight: <input type='text' name='weight' value='{{ old('weight') }}'><br>

        @if(count($errors) > 0)
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif


        <input type='submit' value='Calculate rates'>

    </form>

@stop


{{--
This `body` section will be yielded right before the closing </body> tag.
Use it to add specific things that *this* View needs at the end of the body,
such as a page specific JavaScript files.
--}}
@section('body')

@stop
