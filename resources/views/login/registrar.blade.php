@extends('welcome')

@section('form')
<div class="container">
    <div class="row my-2 justify-content-center">
        <div class="col-6">
            <div class="card">
                <div class="card-header">
                    <ul class="nav nav-tabs card-header-tabs">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('inicio') }}">Iniciar sesión</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="{{ route('registro') }}">Registrarse</a>
                        </li>
                    </ul>
                </div>
                <div class="card-body">
                    <form>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="itsco-docente@gmail.com">
                            <small id="emailHelp" class="form-text text-muted">No compartimos tu información con nadie.</small>
                        </div>
                        <div class="form-group">
                            <label for="nombre">Nombre</label>
                            <input type="password" class="form-control" id="nombre" placeholder="Nombre:">
                        </div>
                        <div class="form-group">
                            <label for="apellidos">Apellidos</label>
                            <input type="password" class="form-control" id="apellidos" placeholder="Apellidos:">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Contraseña</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Contraseña">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword2">Confirmar contraseña</label>
                            <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Contraseña">
                        </div>
                        <div class="form-group">
                            <label for="telefono">Teléfono</label>
                            <input type="password" class="form-control" id="telefono" placeholder="Teléfono">
                        </div>
                        <button type="submit" class="btn btn-primary">registrarme</button>
                    </form>                        
                </div>
            </div>                
        </div>
    </div>
</div>
@endsection