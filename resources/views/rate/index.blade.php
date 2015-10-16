@extends('layouts.master')


@section('title')
    Calculate shipping rates
@stop


@section('head')

@stop


@section('content')
    <h1>Calculate shipping rates</h1>

    <form method='POST' action='/rates'>

        <input type='hidden' name='_token' value='{{ csrf_token() }}'>

        <fieldset>
            <h2>Location Info</h2>
            <label>From Zipcode:</label>
            <input type='text' name='from_zipcode' value='{{ old('from_zipcode') }}'>

            <label>To Zipcode:</label>
            <input type='text' name='to_zipcode' value='{{ old('to_zipcode') }}'>
        </fieldset>

        <fieldset>
            <h2>Package Info</h2>
            <label>Length</label>
            <input type='text' name='length' value='{{ old('length') }}'> inches

            <label>Width</label>
            <input type='text' name='width' value='{{ old('width') }}'> inches

            <label>Height</label>
            <input type='text' name='height' value='{{ old('height') }}'> inches

            <label>Weight</label>
            <input type='text' name='weight' value='{{ old('weight') }}'> lbs.

            @if(count($errors) > 0)
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            @endif
        </fieldset>


        <input class='btn btn-primary' type='submit' value='Calculate rates'>

    </form>

@stop


@section('body')

@stop
