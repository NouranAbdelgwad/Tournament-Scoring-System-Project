@extends('layout.layout')

@section('title', 'Home')
@section('content')
    <div class="container mt-3">
        <div class="VersaQuest p-md-5 p-5">
            <h1 class="text-light"><b>know more about VersaQuest</b></h1>
            <p class="text-light"> Are you ready to showcase your skills and compete for glory? Look no further! Our cutting-edge scoring system is here to revolutionize the way you participate in tournaments. </p>

        </div>
        <div class="container">
            <h2 class="mt-3"><b>🎯 Tournament Details:</b></h2>
            <ul>
                <li>Participants can enter as individuals or form teams.</li>
                <li>Get ready for intense competition with 4 teams of 5 members each and 20 spaces for individual competitors</li>
                <li>Each team or individual will face off in 5 thrilling events, ranging from sports to academic challenges.</li>
                <li>Earn points based on your performance in each event to climb the leaderboard and claim victory.</li>
            </ul>
            <br>
            <h2 class="mt-3"><b>Take a look at the VersaQuest's events!</b></h2>
            <br>
            <div class="cards">
            <div class="card" style="width: 18rem; margin-right: 20px">
                <img src="https://images.pexels.com/photos/1157557/pexels-photo-1157557.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="card-img-top" alt="...">
                <div class="card-body">
                    <h4 class="card-title">🏆Sporting events</h4>
                    <p class="card-text" >Individual and teams sproting events will compete in tennis, basketball, volyball and more..</p>
                    <p class="card-text text-center"><a href="/sporting">know more
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-arrow-right-circle" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8m15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0M4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5z"/>
                        </svg>
                    </p></a>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <img src="https://media.istockphoto.com/id/688883104/photo/nerdy-girl-and-business-scheme.jpg?s=612x612&w=0&k=20&c=iYdyHun3CHrmREwlLWyqvOMofh5mHGacB7pUX_CleTw=" class="card-img-top" alt="...">
                <div class="card-body">
                    <h4 class="card-title">🌟 Academic events</h4>
                    <p>individual & teams academic events will discuss topics like reading, problem solving, education and more..</p>
                    <p class="card-text text-center"><a href="/academic">know more
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-arrow-right-circle" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8m15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0M4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5z"/>
                        </svg>
                    </p></a>
                </div>
            </div>
            </div>
        </div>
    </div>
    @endsection
