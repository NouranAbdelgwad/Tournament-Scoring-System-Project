@extends('layout.layout')
@section('title', 'Add tournament')

@section('content')
    <div class="container">
        <ul class="nav nav-tabs mt-3">
            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="/super-admin/show-tournaments">Tournaments</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="/super-admin/show-events">Events</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/super-admin/show-admins">Admins</a>
            </li>
        </ul>
        <h1 class="text-center mt-3">Events</h1>
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Format</th>
                        <th>Location</th>
                        <th>Duration</th>
                        <th>Rules</th>
                        <th>Scoring</th>
                        <th>Excitement</th>
                        <th>Start date</th>
                        <th>End date</th>
                        <th>participation type</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($events as $event)
                        <tr>
                            <td>{{ $event->Event_name }}</td>
                            <td>{{ $event->Format }}</td>
                            <td>{{ $event->location }}</td>
                            <td>{{ $event->Duration }}</td>
                            <td>{{ $event->Rules }}</td>
                            <td>{{ $event->Scoring }}</td>
                            <td>{{ $event->Excitement }}</td>
                            <td>{{ $event->Start_date }}</td>
                            <td>{{ $event->End_date }}</td>
                            <td>{{ $event->Participation_type }}</td>
                            <td>
                                <div class="d-flex"> <button class="btn btn-primary m-1">Edit</button>
                                    <button class="btn btn-danger m-1">Delete</button>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <button class="submit">Add New event</button>
    </div>
@endsection
