@extends('layout.layout')

@section('title', 'Profile')

@section('content')
<div class="container team_individual">
    <form action="" class="form sign-up-form m-5" method="POST">
        <p><b>Role</b> / <b>Information</b> </p>
        <h2 class="mt-3"><b>Sign up for the college tournament</b></h2>
        <p class="text-secondary mb-3">Welcome at the indvidual sign up!</p>
        <div class="row mt-2">
            <div class="first col-6">
                <label class="form-label">Full name</label>
                <input type="text" name="first_name" class="form-control">
            </div>
            <div class="second col-6">
                <label class="form-label">college ID</label>
                <input type="number" name="last_name" class="form-control">
            </div>
        </div>
        <div class="first">
            <label class="form-label">Email</label>
            <input type="email" name="email" class="form-control">
        </div>
        <div class="second">
            <label class="form-label">password</label>
            <input type="password" name="password" class="form-control">
        </div>
        {{-- <div class="row mt-2">
            <div class="first col-6">
                <label class="form-label">city</label>
                <input type="text" name="city" class="form-control">
            </div>
            <div class="second col-6">
                <label class="form-label">state</label>
                <input type="text" name="state" class="form-control">
            </div>
        </div>
        <div class="row mt-2">
            <div class="first col-12">
                <label class="form-label">Country</label>
                <input type="text" name="country" class="form-control">
            </div>
        </div> --}}
        <div class="d-flex justify-content-end">
        <input type="submit" class="form-control submit">
        </div>
    </form>
</div>
@endsection
