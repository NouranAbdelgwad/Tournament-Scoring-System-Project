@extends('layout.layout')
@section('title', 'show admins')

@section('content')
    <div class="container">
        <ul class="nav nav-tabs mt-3">
            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="/super-admin/show-tournaments">Tournaments</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/super-admin/show-events">Events</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="/super-admin/show-admins">Admins</a>
            </li>
        </ul>
        <h1 class="text-center mt-3">Admins</h1>
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Password</th>
                        <th>College_ID</th>
                        <th>Event</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($admins as $admin)
                        <tr>
                            <td>{{ $admin->Admin_name }}</td>
                            <td>{{ $admin->Admin_email }}</td>
                            <td>{{ $admin->Admin_password }}</td>
                            <td>{{ $admin->College_ID }}</td>
                            <td>{{ $admin->Event_ID }}</td>
                            <td>
                                <div class="d-flex">
                                    <button class="btn btn-primary m-1">Edit</button>
                                    <button class="btn btn-danger m-1">Delete</button>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <button class="submit">Add New Admin</button>
    </div>
@endsection
