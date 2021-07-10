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

{{-- ##### HEADER PAGE ##### --}}
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
{{-- ##### END HEADER ##### --}}

<body>
    <section>
        @yield('test')
    </section>
</body>

{{-- ##### FOOTER PAGE ##### --}}
<footer>
    <div class="link_container">
        <div class="container">
            <div>
                <div class="lists">
                    <div class="left">
                        <ul>
                            <li class="list_title">Dc Comics</li>
                            <li>Characters</li>
                            <li>Comics</li>
                            <li>Movies</li>
                            <li>TV</li>
                            <li>Games</li>
                            <li>Videos</li>
                            <li>News</li>
                        </ul>

                        <ul>
                            <li class="list_title">Shop</li>
                            <li>Shop DC</li>
                            <li>Shop DC Collectibles</li>
                        </ul>
                    </div>
                    <div class="right">
                        <ul>
                            <li class="list_title">Dc</li>
                            <li>Terms Of Use</li>
                            <li>Privacy policy (New)</li>
                            <li>Ad Choise</li>
                            <li>Advertising</li>
                            <li>Jobs</li>
                            <li>Subscriptions</li>
                            <li>Talent Workshops</li>
                            <li>CPSC Certification</li>
                            <li>Ratings</li>
                            <li>Shop Help</li>
                            <li>Contact Us</li>
                        </ul>

                        <ul>
                            <li class="list_title">Sites</li>
                            <li>DC</li>
                            <li>MAD Magazine</li>
                            <li>DC Kids</li>
                            <li>DC Universe</li>
                            <li>DC Power Visa</li>
                        </ul>
                    </div>
                </div>
                <div class="copyright">
                    <span>
                        All Site Content TM and &reg; 2020 DC Entertainment unless otherwise <a href="#">noted here</a>.
                        All rights reserver.
                    </span>
                    <br>
                    <a href="#">Cookies Settings</a>
                </div>
            </div>
        </div>
    </div>

    <div class="end_footer">
        <div class="container">
            <div class="buttons">
                <button>Sign-up now!</button>
            </div>

            <div class="socials">
                <h5>Follow us</h5>
                <span><i class="fab fa-facebook-f"></i></span>
                <span><i class="fab fa-twitter"></i></span>
                <span><i class="fab fa-youtube"></i></span>
                <span><i class="fab fa-pinterest-p"></i></span>
                <span><i class="fab fa-periscope"></i></span>
            </div>
        </div>
    </div>
</footer>
{{-- ##### END FOOTER ##### --}}

</html>
