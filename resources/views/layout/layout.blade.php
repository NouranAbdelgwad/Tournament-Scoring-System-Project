<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Home')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Anta&family=Karla:wght@300&family=Oswald:wght@200..700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link rel="icon" type="image/png" href="https://images.emojiterra.com/twitter/v14.0/1024px/1f3c6.png"
        sizes="32x32">
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="http://127.0.0.1:8000/">
                <img src="{{ asset('assets/images/logo.png') }}" class="icon">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <div class="nav-container">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="http://127.0.0.1:8000/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="http://127.0.0.1:8000/events">Events</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/teams_rank">Rank</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/super-admin/show-tournaments">Leaderboard</a>
                        </li>
                    </ul>
                    <div class="profile"><img src="{{ asset('assets/images/Avatar2.png') }}" class="avatar"></div>
                </div>
            </div>
        </div>
    </nav>
    <div>
        @yield('content', 'layout')
    </div>
    <footer class="bg-body-tertiary p-4 mt-3 container-fluid">
        <div class="container">
            <div class="d-flex justify-content-center">
                <img class="footer-img row" src="{{ asset('assets/images/logo.png') }}">
            </div>
            <div class="row mt-3">
                <div class="col-4">
                    <h6><b>Our events</b></h6><br>
                    <ul class="text-secondary list list-unstyled">
                        <li><a href="#">Sporting</a></li>
                        <li><a href="#">Academic</a></li>
                    </ul>
                </div>
                <div class="col-4">
                    <h6><b>Our vision</b></h6><br>
                    <ul class="text-secondary list list-unstyled">
                        <li>Empowering Individuals and Teams to Showcase Their Skills and Spirit of Competition</li>
                    </ul>
                </div>
                <div class="col-4">
                    <h6><b>Important dates</b></h6><br>
                    <ul class="text-secondary list list-unstyled">
                        <li><a href="#">date1</a></li>
                        <li><a href="#">date2</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>
