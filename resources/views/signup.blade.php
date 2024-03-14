@extends('layout.layout')

@section('title', 'Profile')

@section('content')
<div class="container">
    <h2 class="mt-3"><b>Sign up for the college tournament</b></h2>
    <p class="text-secondary mb-3">You can sign up as a team or as an individual</p>
    <form action="" class="form sign-up-form" method="POST">
        <div class="form-check mt-3">
            <input class="form-check-input" type="radio" name="team_individual">
            <label class="form-check-label">
                Sign up as a team
            </label>
        </div>
        <div class="form-check mt-2 mb-3">
            <input class="form-check-input" type="radio" name="team_individual">
            <label class="form-check-label">
                Sign up as an individual
            </label>
        </div>
        <div class="row mt-2">
            <div class="first col-6">
                <label class="form-label">Full name</label>
                <input type="text" name="first_name" class="form-control">
            </div>
            <div class="second col-6">
                <label class="form-label">ID</label>
                <input type="number" name="last_name" class="form-control">
            </div>
        </div>
        <div class="row mt-2">
            <div class="first col-6">
                <label class="form-label">Email</label>
                <input type="email" name="email" class="form-control">
            </div>
            <div class="second col-6">
                <label class="form-label">Phone number</label>
                <input type="number" name="phone" class="form-control">
            </div>
        </div>
        <div class="row mt-2">
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
        </div>
        <div class="d-flex justify-content-end">
        <input type="submit" class="form-control submit">
        </div>
    </form>
</div>
@endsection
