<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.9.0/css/all.css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>@yield('title')</title>

</head>

<header>
    <div class="blue_row">
        <div class="container">
            <span>dc power&#8480; visa&#174;</span>
            <span>additional dc sites <i class="fas fa-caret-down"></i></span>
        </div>
    </div>

    <div class="main_nav">
        <div class="container">
            <img src="{{ asset('images/dc-logo.png') }}" alt="Logo DC Comics">
            <ul>
                <li class="border_b_dec">
                    <a href="#">Character</a>
                </li>
                <li class="border_b_dec">
                    <a href="#">Comics</a>
                </li>
                <li class="border_b_dec">
                    <a href="#">Movies</a>
                </li>
                <li class="border_b_dec">
                    <a href="#">Tv</a>
                </li>
                <li class="border_b_dec">
                    <a href="#">Games</a>
                </li>
                <li class="border_b_dec">
                    <a href="#">Collectibles</a>
                </li>
                <li class="border_b_dec">
                    <a href="#">Videos</a>
                </li>
                <li class="border_b_dec">
                    <a href="#">Fans</a>
                </li>
                <li class="border_b_dec">
                    <a href="#">News</a>
                </li>
                <li class="border_b_dec">
                    <a href="#">Shop</a>
                    <i class="fas fa-caret-down"></i>
                </li>
            </ul>
            <div class="search_box">
                <input type="text" placeholder="Search">
                <i class="fas fa-search"></i>
            </div>
        </div>
    </div>

    <div class="jumbo">
        <div class="container">

        </div>
    </div>
</header>

<body>
    <section>
        @yield('test')
    </section>
</body>

</html>
