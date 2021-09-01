const mix = require('laravel-mix');


mix.js('resources/js/app.js', 'public/assets/js').vue()
.sass('resources/sass/app.scss', 'public/assets/css', {
  sassOptions: {
    quietDeps: true,
  },
})