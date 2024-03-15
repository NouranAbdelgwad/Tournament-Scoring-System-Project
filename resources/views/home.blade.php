@extends('layout.layout')

@section('title', 'Home')
@section('content')
    <div class="container mt-3">
        <div class="home">
            <h1 class="text-light"><b>Welcome to the Ultimate College Tournament Experience!</b></h1>
            <p class="text-light">Are you ready to showcase your skills and compete for glory? Look no further!</p>
            <section><button>I'm a competitor!</button></section>
        </div>
        <div class="container">
            <h2 class="mt-3"><b>Highlight our innovation tournaments!</b></h2>
            <br>
            @foreach ($tournaments as $tournament)
            <div class="card" style="width: 18rem;">
                <img src="../assets/images/home.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h4 class="card-title">🏆{{$tournament->Tournament_name}}🌟</h4>
                    <p class="card-text text-center"><a href="/tournament/{{$tournament->Tournament_ID}}">know more
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-arrow-right-circle" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8m15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0M4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5z"/>
                        </svg>
                    </p></a>
                </div>
            </div>
            @endforeach
            <br>
            <h4><b>🏅 Ready to Compete?</b></h4>
            <h6>Don't miss your chance to be part of this thrilling tournament. Stay tuned for updates and get ready to unleash your competitive spirit like never before!
            </h6>
        </div>
    @endsection
