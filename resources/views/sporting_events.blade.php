@extends('layout.layout')
@section('title', 'Events')

@section('content')
<div class="container">
    <ul class="nav nav-tabs mt-3">
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/sporting">Sproting</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/academic">Academic</a>
        </li>
    </ul>
    <h4 class="mt-3"><b>Sporting</b></h4>
    @foreach ($events as $event)
    @if ($event->Event_type	== "sporting")
    <div class="row mt-3 card-1 card p-3">
        <div class="col-3">
            <img src="{{$event->img_URL}}" class="event-img">
        </div>
        <div class="col-9">
            <div class="row card-1-content">
                <div class="col-6">
                    <h5><b>{{$event->Event_name}}</b></h5>
                    <p class="text-primary">{{$event->Format}}</p>
                </div>
                <div class="col-6 d-flex justify-content-end">
                    <a href="/event/{{$event->Event_ID}}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-arrow-right-circle" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8m15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0M4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5z"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
    @endif
    @endforeach
</div>
@endsection
