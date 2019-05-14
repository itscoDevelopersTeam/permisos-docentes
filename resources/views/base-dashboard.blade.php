<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin usuario</title>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    @include('scripts.dashboard-upper-script')
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="barra-lateral col-md-2 col-sm-auto">
                <!-- Contenedor para el logo del dashboard -->
                <div class="container containerLogo">
                    <img src="/img/fondo.jpg" class="fondoImg">
                    <div class="logo"> 
                        <img src="/img/users.gif" class="rounded-circle userImg" >      
                    </div>
                </div>
                <!-- Contenido del dashboard -->
                @yield('dashboard-menu')
            </div>
                
            <!-- Parte que sera diferente al dashboard -->
            <div class="container col-md-8 col-sm-auto">
                <!-- Aqui iran los registros usando los datatables  -->
                @yield('dashboard-content-title')
                @yield('dashboard-content')
                <footer class="footer">
                    <p class="text-muted"> Software desarrollado por: itscoDevelopersTeam </p>
                </footer>
            </div>
        </div>
    </div>
        <!-- Aqui se pondran las ventanas modales dependiendo de la tabla  -->
        @yield('modales')
        
        @include('scripts.dashboard-bottom-scripts')
</body>
</html>
    
<!-- Aqui se escribira el codigo javascript dependiendo la tabla  -->
@yield('codigoJs')