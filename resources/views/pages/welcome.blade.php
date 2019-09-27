<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Alegreya+Sans+SC|Sacramento&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Alegreya Sans SC', sans-serif;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 85px;
            }

            a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 15px;
                letter-spacing: .1rem;
                text-decoration: none;
            }

        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">

            <div class="top-right links">

                @if(Auth::check())

                    <a href="{{ url('/educate') }}">My Portal</a>
                    <a href="{{ url('/about') }}">About</a>
                    <a href="{{ url('/contact') }}">Contact Us</a>
                    <a href="{{ route('logout') }}">Log out</a>

                @else
                    <a href="{{ url('/') }}">Home</a>
                    <a href="{{ url('/about') }}">About</a>
                    <a href="{{ url('/contact') }}">Contact Us</a>
                    <a href="{{ route('login') }}">Login</a>
                    <a href="{{ route('register') }}">Register</a>

                @endif
            </div>

            <div class="content">
                <div class="title">
                    E-Portal
                </div>
                Here is where we help achieve your African parents' dreams
            </div>
        </div>
    </body>
</html>