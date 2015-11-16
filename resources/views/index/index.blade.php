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

        <div id="guestbook" class="container">
            <form method="POST" @submit.prevent="onSubmitForm">
                <div class="form-group">
                    <label for="name">
                        Name:

                        <span class="error" v-show="!newMessage.name">*</span>
                    </label>

                    <input id="name" class="form-control" name="name" type="text" v-model="newMessage.name">
                </div>

                <div class="form-group">
                    <label for="message">
                        Message:

                        <span class="error" v-show="!newMessage.message">*</span>
                    </label>

                    <textarea id="message" class="form-control" name="message" v-model="newMessage.message"></textarea>
                </div>

                <div class="form-group" v-show="!submitted">
                    <button class="btn btn-primary" type="submit" v-show="!errors">
                        Sign Guestbook
                    </button>
                </div>

                <div class="alert alert-success" v-show="submitted">
                    Thanks!
                </div>
            </form>

            <hr>

            <article v-for="message in messages">
                <h3>
                    @{{ message.name }}
                </h3>

                <div class="body">
                    @{{ message.message }}
                </div>
            </article>

            <div class="alert alert-info" v-if="!messages.length">
                <i class="fa fa-info-circle"></i> No messages yet :-(
            </div>
        </div>

        <script src="{{ elixir('js/app.js') }}"></script>
    </body>
</html>
