@extends('layout.layout')

@section('title', 'Profile')

@section('content')
<div class="container page">
<div class="bg-light p-3 m-3 sign">
    <h2 class="mt-3"><b>sign in</b></h2>
    <div class="row">
        <form action="" class="form sign-up-form col-6" method="POST">
            <label class="form-label">Email</label>
            <input type="email" placeholder="Enter your email" name="email" class="form-control">
            <label class="form-label">ID</label>
            <input type="number" name="last_name" class="form-control" placeholder="college id">
            <div class="">
            <input type="submit" class="form-control sign-in" value="Sign in">
            <p class="text-center text-secondary">You don't have an account?<a href="http://127.0.0.1:8000/signup">Sign up</a></p>
            </div>
        </form>
        <div class="col-6">
            <img src="https://images.pexels.com/photos/1325681/pexels-photo-1325681.jpeg" class="home" alt="">
        </div>
    </div>
</div>
</div>
@endsection
