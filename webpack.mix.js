const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js')
   .sass('resources/sass/app.scss', 'public/css');

// FONTAWESOME
mix.copy('node_modules/@fortawesome/fontawesome-free/css/all.css', 'public/css/fontawesome.css');
mix.copy('node_modules/@fortawesome/fontawesome-free/js/all.js', 'public/js/fontawesome.js');

// DATATABLES.NET
mix.copy('node_modules/datatables.net-bs4/css/datatables.bootstrap4.min.css', 'public/css/datatables.bootstrap4.min.css');

mix.copy('node_modules/datatables.net/js/jquery.dataTables.min.js', 'public/js/dataTables.min.js')
   .copy('node_modules/datatables.net-bs4/js/dataTables.bootstrap4.min.js', 'public/js/dataTables.bootstrap4.min.js');

//SWEET ALERT
mix.copy('node_modules/sweetalert2/dist/sweetalert2.min.css','public/css/sweetalert2.min.css');
mix.copy('node_modules/sweetalert2/dist/sweetalert2.all.js','public/js/sweetalert2.all.js');

//Pooper
mix.copy('node_modules/popper.js/dist/popper.min.js','public/js/popper.min.js');

//Tipografia
mix.copy('resources/css/tipografia.css','public/css/tipografia.css');

//Funciones personalizadas
mix.copy('resources/css/estilos.css','public/css/estilos.css');