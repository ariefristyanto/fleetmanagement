var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Less
 | file for our application, as well as publishing vendor resources.
 |
 */

// TODO: Include all other CSS and JS files: JQuery, Bootstrap, Select2, etc...
elixir(function(mix) {
    // Compile our SASS file to CSS (http://sass-lang.com/)
    mix.sass('app.scss');
    // Combine the various CSS into one.
    mix.styles([
        //'vendor.css',
        'app.css',
    ], null, 'public/css');

    // Compile our COFFEE file to JS (http://coffeescript.org/)
    mix.coffee('app.coffee');
    // Combine the various JS into one.
    mix.scripts([
       //'vendor.js',
        'close-modal.js',
        'app.js',
    ], null, 'public/js');

    // Enable cache busting versions.
    mix.version(['public/css/all.css', 'public/js/all.js']);

});
