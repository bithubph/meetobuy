<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Starter Kit - Login</title>
    <link rel="stylesheet" type="text/css" href="lib/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="lib/themify-icons/themify-icons.css">
    <link rel="stylesheet" type="text/css" href="lib/owl/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="lib/owl/dist/assets/owl.theme.default.min.css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,900|Source+Sans+Pro:300,400&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="src/index.css">

    <style>
    
    </style>
</head>
<body>
<div id="modal_mobile_nav" class="modal_nav_overlay">
    <span class="closebtn">
        <i class="ti-close"></i>
    </span>
    <div class="overlay_content">
        <div class="flexRow">
            <div class="flexColumn">
                <a href="#">
                    <div class="link_img">
                        <span class="ti-home"></span>
                    </div>
                    <div class="mt-2 link_text">
                        <p>Home</p>
                    </div>
                </a>
            </div>
            <div class="flexColumn">
                <a href="#">
                    <div class="link_img">
                        <span class="ti-zoom-in"></span>
                    </div>
                    <div class="mt-2 link_text">
                        <p>Browse Nearby Services</p>
                    </div>
                </a>
            </div>
            <div class="flexColumn">
                <a href="#">
                    <div class="link_img">
                        <span class="ti-bookmark-alt"></span>
                    </div>
                    <div class="mt-2 link_text">
                        <p>Our Company</p>
                    </div>
                </a>
            </div>
        </div>
        <div class="flexRow">
            <div class="flexColumn">
                <a href="#">
                    <div class="link_img">
                        <span class="ti-heart"></span>
                    </div>
                    <div class="mt-2 link_text">
                        <p>Get Started</p>
                    </div>
                </a>
            </div>
            <div class="flexColumn">
                <a href="#">
                    <div class="link_img">
                        <span class="ti-lock"></span>
                    </div>
                    <div class="mt-2 link_text">
                        <p>Login</p>
                    </div>
                </a>
            </div>
        </div>
        <div class="nav_search container">
            <form>
                <div class="search_box">
                    <input type="" name="" placeholder="Search Category">
                    <button>Search</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!--End -->
<div class="top_nav">
    <div class="brand">
        <a href="#">
            <h3>MeetToBuy</h3>
        </a>
    </div>
    <div class="links">
        <a href="#">Home</a>
        <a href="#">Browse Services</a>
        <a href="#">Get Started</a>
        <a href="#">Sign in</a>
    </div>
    <div class="nav_toggle">
        <span class="ti-layout-grid3-alt nav_toggle_icon"></span>
    </div>
</div>

<main>
    @yield('app')
</main>
<script type="text/javascript" src="lib/jquery/jquery.min.js"></script>
    <script type="text/javascript" src="lib/owl/dist/owl.carousel.js"></script>
    <script type="text/javascript" src="lib/bootstrap/js/popper.min.js"></script>
    <script type="text/javascript" src="lib/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="src/index.js"></script>
    
</body>

</html>