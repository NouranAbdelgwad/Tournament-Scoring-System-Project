@extends('layout.layout')

@section('title', 'Profile')

@section('content')
    <div class="container team_individual">
    <form action="" class="form m-5" id="form" method="GET">
        <p><b>Role</b> / <span class="text-secondary">Information</span> </p>
        <h2 class="mt-3"><b>Sign up for the college tournament</b></h2>
        <p class="text-secondary mb-3">You can sign up as a team or as an individual</p>
        <div class="form-check mt-3">
            <input class="form-check-input" type="radio" name="team_individual" value="team">
            <label class="form-check-label">
                Sign up as a team
            </label>
        </div>
        <div class="form-check mt-2 mb-3">
            <input class="form-check-input" type="radio" name="team_individual" value="individual">
            <label class="form-check-label">
                Sign up as an individual
            </label>
        </div>
        <p class="text-danger" id="unvalid"></p>
        <div class="d-flex justify-content-end">
        <input type="submit" class="form-control submit" value="Next">
        </div>
    </form>
</div>
<script src="{{asset('assets/js/app.js')}}" ></script>
@endsection
