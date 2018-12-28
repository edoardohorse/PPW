<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Insegnanti</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
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
                font-size: 84px;
            }

            .links  a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            .group {
                border: 1px solid black;
                border-radius: 7px;
                padding: 1.2em;
                display: inline-block;
                position: relative;
            }

            .group:before {
                content: attr(data-name);
                display: inline-block;
                position: absolute;
                top: -.7em;
                z-index: 111;
                background-color: white;
                padding-left: .5em;
                padding-right: .5em;
                font-size: 15px;
                font-weight: 800;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
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
                    Insegnanti
                </div>

                <div class="links">
                    <a href="/login">Login</a>
                    <a href="/home">Home</a>
                    <div class="group" data-name="Amministrazione">
                        <div class="group" data-name="Personale">
                            <a href="/amministrazione/personale/collab-interni">Collaboratori interni</a>
                            <a href="/amministrazione/personale/collab-esterni">Collaboratori esterni</a>
                            <a href="/amministrazione/personale/stagisti">Stagisti</a>
                            <a href="/amministrazione/personale/insegnanti">Insegnanti</a>
                        </div>

                        <div class="group" data-name="Pagamenti">
                            <a href="/amministrazione/pagamenti/effettuati">Effettuati</a>
                            <a href="/amministrazione/pagamenti/ricevuti">Ricevuti</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>