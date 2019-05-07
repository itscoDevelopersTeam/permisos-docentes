<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>permisos-docentes</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" href="{{ mix('css/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ mix('css/datatables.bootstrap4.min.css') }}">
    <script src="{{ mix('js/fontawesome.js') }}"></script>
</head>
<body>
    @yield('form')
    
    <script src="{{ mix('js/app.js') }}"></script>
    <script src="{{ mix('js/dataTables.min.js') }}"></script>
    <script src="{{ mix('js/dataTables.bootstrap4.min.js') }}"></script>
</body>
</html>