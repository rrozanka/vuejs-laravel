@extends('layouts.app')

@section('content')
    <div id="guestbook" class="container">
        <form method="POST" @submit.prevent="onSubmitForm">
            <div class="form-group">
                <label for="name">
                    {{ trans('messages.guestbook.name') }}

                    <span class="error" v-show="!newMessage.name">*</span>
                </label>

                <input id="name" class="form-control" name="name" type="text" v-model="newMessage.name">
            </div>

            <div class="form-group">
                <label for="message">
                    {{ trans('messages.guestbook.message') }}

                    <span class="error" v-show="!newMessage.message">*</span>
                </label>

                <textarea id="message" class="form-control" name="message" v-model="newMessage.message"></textarea>
            </div>

            <div class="form-group" v-show="!submitted">
                <button class="btn btn-primary" type="submit" v-show="!errors">
                    <i class="fa fa-check"></i>

                    {{ trans('messages.guestbook.sign-guestbook') }}
                </button>
            </div>

            <div class="alert alert-success" v-show="submitted">
                {{ trans('messages.guestbook.thanks') }}
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
            <i class="fa fa-info-circle"></i>

            {{ trans('messages.guestbook.no-messages-yet') }}
        </div>
    </div>
@endsection
