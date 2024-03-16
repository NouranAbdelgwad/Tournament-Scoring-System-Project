@extends('layout.layout')
@section('title', 'Add tournament')

@section('content')
    <div class="container">
        <ul class="nav nav-tabs mt-3">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/super-admin/show-tournaments">Tournaments</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/super-admin/show-events">Events</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/super-admin/show-admins">Admins</a>
            </li>
        </ul>
        <h1 class="text-center mt-3">Tournaments</h1>
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Rules and regulations</th>
                        <th>Starting date</th>
                        <th>End date</th>
                        <th>Max no. of teams</th>
                        <th>Max no. of individuals</th>
                        <th>Prizes</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tournaments as $tournament)
                        <tr>
                            <td>{{ $tournament->Tournament_name }}</td>
                            <td>{{ $tournament->Description }}</td>
                            <td>{{ $tournament->Rules_and_regulations }}</td>
                            <td>{{ $tournament->Start_date }}</td>
                            <td>{{ $tournament->End_date }}</td>
                            <td>{{ $tournament->Max_number_of_teams }}</td>
                            <td>{{ $tournament->Max_number_of_individuals }}</td>
                            <td>{{ $tournament->Status }}</td>
                            <td>{{ $tournament->Prizes }}</td>
                            <td>
                                <button class="btn btn-primary">Edit</button><br>
                                <button class="btn btn-danger">Delete</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <button class="submit">Add New Tournament</button>
    </div>
@endsection
