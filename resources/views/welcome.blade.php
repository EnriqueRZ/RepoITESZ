<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>REPOSITORIO ITESZ</title>
        <link rel="shortcut icon" href="{{ asset('images/logo.icon') }}" />

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #FFFF;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 80;
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
                color: #FFFF;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
                color: #E69FD5;
            }

            .content {
                text-align: center;
                color: #4F2B23;
            }

            .title {
                font-size: 100px;
            }

            .links > a {
                color: #000000;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
                background-color: #FFFA;
            }

            .m-b-md {
                margin-bottom: 90px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">REPOSITORIO</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Repositorio <br> Didáctico
                    <img src="{{ asset('images/LOGO ITESZ.png') }}" width="200" height="200" align="left">
                </div>

                <br><br><br><br>
                <div class="links">
                    <a href="{{ route('acercade') }}">ACERCA DE</a>
                </div>
            </div>
        </div>
    </body>
</html>
