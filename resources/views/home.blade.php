@extends('layout.main')

@section('content')
    <h1>TRAVEL_PACKAGE</h1>

    @foreach ($packages as $package)
        <div>
            <p><strong>Airline company</strong>: {{ $package->airline_company }} </p>
            <p><strong>State</strong>: {{ $package->state }} </p>
            <p><strong>Days</strong>: {{ $package->days }} gg</p>
            <p><strong>Price</strong>: {{ $package->price }} €</p>
        </div>
        @if (!$loop->last)
            <hr>
        @endif
    @endforeach
@endsection
