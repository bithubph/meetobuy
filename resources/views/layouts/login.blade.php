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
        @import url("src/index.css");

        .has-shadow {
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.19), 0 10px 20px rgba(0, 0, 0, 0.23);
        }

        .login {
            display: flex;
            align-items: center;
            padding: 2em 1rem;
            background-color: #f5f5f5;
            min-height: 85vh;
        }

        .login_card_holder {
            min-height: 45vh;
        }


        .login_form_holder,
        .signup_link_holder {
            min-width: 100%;
            padding: 5rem 1rem;
            position: relative;
        }

        @media screen and (max-width: 744px) {
            .login {
                padding: 1rem 1rem;
                display: block;
            }

        }


        .login_form_content {
            text-align: center;
        }

        .login_form_content h3 {
            font-weight: bold;
            padding-top: 25px;
            padding-bottom: 5px;
            color: #051C40;
        }

        .login_form_content p {
            color: #051C40;
        }

        .login_form_holder p {
            color: #051C40;
            margin-top: 20px;
        }

        .form {
            margin-top: 30px;
        }

        .form_element {
            border: 2px solid#051C40;
            margin: 20px;
            border-radius: 4px;
            display: flex;
        }

        .form_element input {
            background: transparent;
            border: 0;
            width: 80%;
            color: #051C40;
        }

        .form_element input::placeholder {
            color: #051C40;
        }

        .form_element span {
            color: #051C40;
            margin-left: 15px;
            margin-top: 17px;
        }


        .forgot_password a {
            color: #051C40;
            font-size: 16px;
            float: right;
            text-decoration: none;

        }

        .login_btn_holder {
            position: relative;
            top: 30px;
            padding: 10px;
            display: flex;
            justify-content: center;
            width: 100%;

        }


        .login_form_holder p {
            font-size: 26px;
        }

        .login_form_holder input {
            outline: none;
            width: 100%;
            padding: 0.7em;
            background: transparent;
            color: #d3d3d3;
        }

        .default_btn {
            padding: 0.6em 2em;
            background: #051C40;
            color: #fff;
            outline: none;
            border: none;
            box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.3);
            border-radius: 8px;
            font-size: 18px;
        }

        .default_btn_alt {
            padding: 0.6em 2em;
            background: #fff;
            color: #051C40;
            outline: none;
            border: none;
            box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.3);
            border-radius: 8px;
            font-size: 18px;
        }

        .login_signup_holder {
            background-color: #051C40;
            min-height: 100%;
            color: #fff;
            text-align: center;
            display: flex;
            align-items: center;
        }

        @media screen and (max-width:950px) {
            .section_padding {
                padding-left: 1em;
                padding-right: 1em;
            }
        }
    </style>
</head>
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
<script type="text/javascript" src="{{asset('lib/jquery/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('lib/owl/dist/owl.carousel.js')}}"></script>
    <script type="text/javascript" src="{{asset('lib/bootstrap/js/popper.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('lib/bootstrap/js/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('src/index.js')}}"></script>
    
</body>

</html>