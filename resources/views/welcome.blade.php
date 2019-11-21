<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Web-Dev Quiz App</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="{{asset("./css/app.css")}}">

        <script type="text/javascript" src="{{asset("./js/app.js")}}" defer>

        </script>

        <!-- Styles -->
        <style>
        /* Styles are in the app.scss file */
        </style>

    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="content">

                <div class="logo">
                    <img src="images/quiz-app-logo.png" alt="multiple choice quiz logo">
                </div>

                <div class="title m-b-md">
                    Web-Dev Quiz App
                </div>

                @if (Route::has('login'))
                    <div class="links wlinks">
                        @auth
                            <a href="{{ url('/home') }}">Home</a>
                        @else
                            <a href="{{ route('login') }}" class="hvr-bounce-in">Login to start a new game</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="hvr-bounce-in">Register</a>
                            @endif
                        @endauth
                    </div>
                @endif

                <div id="app">
                    <giphy-results></giphy-results>
                </div>

                <div class="links">
                    <a href="https://github.com/mpbon/quiz-app" class="hvr-icon-bounce"><i class="fab fa-github hvr-icon"></i> See the code at my GitHub account</a>
                </div>

            </div>
        </div>
    </body>
</html>
