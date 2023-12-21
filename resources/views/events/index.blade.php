@extends('layouts.app')

@section('jumbotron')
        <div class="jumbotron">
                <div class="container">
                        <h1>Events</h1>
                        <h2>Find an event that interests you!</h2>
                </div>
        </div>
@endsection

@section('content')

        <div class="row">
                <div class="col">

                        <ul>
                                @forelse ($events as $event)
                                        <li>{{ $event->name }}</li>
                                @empty
                                        <li>No events found!</li>
                                @endforelse
                        </ul>

                </div>
        </div>
        {!! $events->links('vendor.pagination.bootstrap-4') !!}
@endsection
