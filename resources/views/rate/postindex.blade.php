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

    <section>
        <h2>Shipment Details</h2>
        <h3>From Zipcode:</h3>
        {{ $data['from_zipcode'] }}<br>

        <h3>To Zipcode:</h3>
        {{ $data['to_zipcode'] }}<br>

        <h3>Dimensions:</h3>
        {{ $data['length'] }} x {{ $data['width'] }} x {{ $data['height'] }} inches<br>

        <h3>Weight:</h3>
        {{ $data['weight'] }}<br>
    </section>

    <section>
        <h1>Rates</h1>
        @if(count($rates) > 0)
            @foreach($rates as $rate)
                <h3>{{ $rate->getName() }}</h3>
                ${{ $rate->getCost()/100 }}<br>
            @endforeach
        @else
                No Rates
        @endif
    </section>

@stop


{{--
This `body` section will be yielded right before the closing </body> tag.
Use it to add specific things that *this* View needs at the end of the body,
such as a page specific JavaScript files.
--}}
@section('body')

@stop
