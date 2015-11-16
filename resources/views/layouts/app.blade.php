<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta id="token" value="{{ csrf_token() }}">
        <title>Guestbook</title>

        <link rel="stylesheet" href="{{ elixir('css/app.css') }}">
    </head>

    <body>
        <header id="top" class="navbar navbar-static-top navbar-inverse" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button
                            class="navbar-toggle collapsed"
                            type="button"
                            data-toggle="collapse"
                            data-target="#bs-navbar"
                            aria-controls="bs-navbar"
                            aria-expanded="false"
                            >
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <a class="navbar-brand" href="#">
                        Vue.js Guestbook
                    </a>
                </div>
            </div>
        </header>

        @yield('content')

        <script src="{{ elixir('js/app.js') }}"></script>
    </body>
</html>
