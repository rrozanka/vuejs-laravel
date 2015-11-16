var elixir = require('laravel-elixir');

elixir.config.sourcemaps = false;

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {

    mix.sass('app.scss', 'resources/assets/css/app.css')
        .coffee('guestbook.coffee', 'resources/assets/js/guestbook.js')
        .styles([
            'vendor/bootstrap.css',
            'vendor/font-awesome.css',
            'app.css'
        ], 'public/css/app.css')
        .scripts([
            'vendor/jquery-2.1.4.js',
            'vendor/bootstrap.js',
            'vendor/vue.js',
            'vendor/vue-resource.js',
            'app.js',
            'guestbook.js'
        ], 'public/js/app.js')
        .copy('resources/assets/fonts/vendor', 'public/fonts')
        .version([
            'public/css/app.css',
            'public/js/app.js'
        ]);

});
