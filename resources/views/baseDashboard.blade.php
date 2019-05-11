<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('titulo') </title>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fontello.css') }}">
    <link rel="stylesheet" href="{{ mix('css/tipografia.css') }}">
    <link rel="stylesheet" href="{{ mix('css/estilos.css') }}">
    <link rel="stylesheet" href="{{ mix('css/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ mix('css/datatables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ mix('css/sweetalert2.min.css') }}">
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="barra-lateral col-md-2 col-sm-auto">
                <!-- Contenedor para el logo del dashboard -->
                <div class="container containerLogo">
                <img src="img/fondo.jpg" class="fondoImg">
                <div class="logo"> 
                <img src="img/users.gif" class="rounded-circle userImg" >      
                </div>
                </div>
                <!-- Contenido del dashboard -->
                <nav class="menu d-flex d-sm-block justify-content-center flex-wrap">
                <a data-toggle="collapse" href="#collapseExample"  aria-expanded="false" aria-controls="collapseExample" id="a_registros">
                        <i class="fas fa-users"></i> Registros </a>
                     <div class="collapse" id="collapseExample">
                        <div class="drop-items">
                          <a href="{{ route('trabajador') }}" id="a_trabajador"><i class="fas fa-user-edit"></i> Registrar trabajador</a>
                          <a href="" id="a_area"><i class="fas fa-id-card-alt"></i> Registrar área</a>
                        </div>
                     </div>
                <a href="" id="a_notificaciones"><i class="far fa-bell"></i><span> Notificaciones </span></a>
                <a href="" id="a_permisos"><i class="fas fa-running"></i><span> Permisos</span></a>
                <a href="" id="a_horas"><i class="far fa-clock"></i><span class="intento"> Consulta de Horas</span></a>
                <a href="salir.html" id="a_cerrar"><i class="fas fa-sign-out-alt"></i><span> Cerrar sesión</span></a>
                </nav>
            </div>

            <!-- Parte que sera diferente al dashboard -->
            <div class="container col-md-8 col-sm-auto">
                <!-- Aqui iran los registros usando los datatables  -->
                @yield('tablas')
                <footer class="footer">
                    <p class="text-muted"> Software desarrollado por: itscoDevelopersTeam </p>
                </footer>
            </div>
        </div>
    </div>
    <!-- Aqui se pondran las ventanas modales dependiendo de la tabla  -->
    @yield('modales')


    <script src="{{ mix('js/app.js') }}"></script>
    <script src="{{ mix('js/dataTables.min.js') }}"></script>
    <script src="{{ mix('js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ mix('js/fontawesome.js') }}"></script>
    <script src="{{ mix('js/sweetalert2.all.js') }}"></script>
    <script src="{{ mix('js/popper.min.js') }}"></script>
</body>
</html>

<!-- Aqui se escribira el codigo javascript dependiendo la tabla  -->
@yield('codigoJs')