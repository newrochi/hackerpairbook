@extends('layouts.app')

@section('jumbotron')
    <div class="jumbotron">
        <div class="container">
            <h1>Launch Sequence Aborted</h1>
            <h2>We seem to have encountered an error</h2>
        </div>
    </div>
@endsection

@section('content')

    <div class="row">
        <div class="col">

            <p>
                We were unable to locate the information you requested. Perhaps you can find what
                you're looking for by navigating to one of the following resources:
            </p>

            <ul>
                
                <li><a href="{{route('events.index')}}">Events</a></li>
                
                <li><a href="{{route('locations.index')}}">Events Locations</a></li>
            </ul>

            <p>
                Still can't find what you're looking for? <a href="#">send us a message</a>
            </p>

        </div>
    </div>

@endsection

