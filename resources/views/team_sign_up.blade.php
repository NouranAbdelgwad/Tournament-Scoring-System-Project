@extends('layout.layout')

@section('title', 'Profile')

@section('content')
<div class="container team_individual">
    <form action="" class="form m-5" method="POST">
        <p><b>Role</b> / <b>Information</b> </p>
        <h2 class="mt-3"><b>Sign up for the college tournament</b></h2>
        <p class="text-secondary mb-3">Welcome at the team's sign up!</p>
        <div class="row mt-2">
            <div class="first col-6">
                <label class="form-label">Team name</label>
                <input type="text" name="team_name" class="form-control">
            </div>
            <div class="second col-6">
                <label class="form-label">Team password</label>
                <input type="password" name="password" class="form-control">
            </div>
        </div>
        <div class="row mt-2">
            <div class="first col-6">
                <label class="form-label">Team leader name</label>
                <input type="text" name="team_leader_name" class="form-control">
            </div>
            <div class="second col-6">
                <label class="form-label">Team leader E-mail</label>
                <input type="email" name="email" class="form-control">
            </div>
        </div>
        <div class="row mt-2">
            <div class="first col-6">
                <label class="form-label">Name - 1</label>
                <input type="text" placeholder="team member-1 name" name="member1_name" class="form-control">
            </div>
            <div class="second col-6">
                <label class="form-label">E-mail - 1</label>
                <input type="email" placeholder="team member-1 email" name="memeber1_email" class="form-control">
            </div>
        </div>
        <div class="row mt-2">
            <div class="first col-6">
                <label class="form-label">Name - 2</label>
                <input type="text" placeholder="team member-2 name" name="member2_name" class="form-control">
            </div>
            <div class="second col-6">
                <label class="form-label">E-mail - 2</label>
                <input type="email" placeholder="team member-2 email" name="memeber1_email" class="form-control">
            </div>
        </div>
        <div class="row mt-2">
            <div class="first col-6">
                <label class="form-label">Name - 3</label>
                <input type="text" placeholder="team member-3 name" name="member3_name" class="form-control">
            </div>
            <div class="second col-6">
                <label class="form-label">E-mail - 3</label>
                <input type="email" placeholder="team member-3 email" name="memeber3_email" class="form-control">
            </div>
        </div>
        <div class="row mt-2">
            <div class="first col-6">
                <label class="form-label">Name - 4</label>
                <input type="text" placeholder="team member-4 name" name="member4_name" class="form-control">
            </div>
            <div class="second col-6">
                <label class="form-label">E-mail - 4</label>
                <input type="email" placeholder="team member-4 email" name="memeber4_email" class="form-control">
            </div>
        </div>
        <div class="d-flex justify-content-end">
        <input type="submit" class="form-control submit">
        </div>
    </form>
</div>
@endsection
