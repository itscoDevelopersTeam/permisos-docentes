<div class="row d-flex justify-content-center">
    <div class="col-md-12 contenedor-form">
        <hr>
        <h4 class="text-center"> <i class="fas fa-clipboard"></i> Solicitud de permiso </h4>
        <hr>
        <!-- Inicio de los controles del formulario -->
<form action="#" method="">
    <small id="passwordHelpBlock" class="form-text text-muted text-center">
            A continuacion debera ingresar los datos corrrespondientes a la solicitud del permiso
    </small>   
    <hr>
    <div class="form-group">
            <label for="motivos" class="label text-muted">Ingresa el motivo de ausencia: </label>
            <input type="text" class="form-control" id="motivos" placeholder="motivo de ausencia">
    </div>
    <div class="form-group">
        <label for="fecha" class="text-muted"> Seleccione el dia de la ausencia: </label>
        <input type="date" class="form-control" id="fecha" placeholder="seleccione la fecha">
    </div>
    <div class="form-row">
        <div class="col">
            <label for="hora_inicio" class="text-muted"> Hora de inicio </label>
            <input type="time" class="form-control" id="hora_inicio">
        </div>
        <div class="col">
            <label for="hora_final" class="text-muted"> Hora de fin </label>
            <input type="time" class="form-control" id="hora_final">
        </div>
    </div>
    <hr>
        <button type="submit" class="btn btn-solicitar btn-success form-control" id="btnSolicitar"> <i class="far fa-share-square"></i> Solicitar </button>
    <!-- Fin de los controles del formulario -->
</form>
<hr>
<small id="informacion" class="form-text text-muted text-center">
El instituto le concedera a los trabajadores sindicalizados diez dias economicos con goce de sueldo
por año. Comprendiendo de Enero a Diciembre, otorgandose hasta 4 dias maximos por mes.
</small>
</div>
</div>