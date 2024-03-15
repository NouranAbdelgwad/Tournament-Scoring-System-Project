@extends("layout.layout")

@section("content")
<div class="container">
    <div class="row mt-3">
    <img src="{{$event->img_URL}}" alt="event" class="event_img col-6">
    <div class="col-6 mt-3">
        <h3><b>{{$event->Event_name}}</b></h3>
        <p class="text">{{$event->Format}}</p>
        <br><br>
        <p><b>Start date: </b> {{$event->Start_date}} <br> <b>End date: </b> {{$event->End_date}}</p>
        <p>
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt text" viewBox="0 0 16 16">
            <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A32 32 0 0 1 8 14.58a32 32 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10"/>
            <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4m0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6"/>
        </svg>
        {{$event->location}}
    </p>
    <p><b>Duration: </b>{{$event->Duration}}</p>
    <button class="submit">Join now!</button>
    </div>
    <div class="row mt-3">
        <h5><b>Rules</b></h5>
        <p>{{$event->Rules}}</p>
        <h5><b>Scoring</b></h5>
        <p>{{$event->Scoring}}</p>
        <h5><b>Excitement</b></h5>
        <p>{{$event->Excitement}}</p>
    </div>
    </div>
</div>
@endsection
