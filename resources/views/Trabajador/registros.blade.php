@extends('baseDashboard')
@section('titulo') Trabajadores @endsection
@section('tablas')
      <hr class="hr">
    <h5 class="text-muted text-center"> <i class="fas fa-user-circle"></i> Registro de Trabajadores </h5>
      <hr class="hr">
        <a href="#ventana1" data-toggle="modal" class="btn btn-add"><i class="fas fa-user-plus"></i><strong>
            Agregar</strong> </a>
      <hr class="hr">
      <table class="table table-hover cell-border table-fluid" id="tableStudents">
          <thead>
            <tr class="h6 font-italic">
              <th> Codigo </th>
              <th> Nombre</th>
              <th> Apellidos</th>
              <th> Email </th>
              <th> Contraseña </th>
              <th> Telefono </th>
              <th> Rol </th>
              <th> </th>
            </tr>
          </thead>
          <tbody>
            <tr class="text-muted">
              <td><i class="fas fa-key"></i> 155q0277 </td>
              <td> Cristhian Enrique </td>
              <td> Olivares Lara </td>
              <td> cristhyan_2011@hotmail.com </td>
              <td> 12345 </td>
              <td> 2881138673 </td>
              <td> Profesor </td>
              <td style="text-align: center;">
                <span class="btn btn-sm" data-toggle="modal" data-target="#ventana2">
                  <i class="fas fa-pen-square"></i>
                </span>
              <button  class="btn btneliminar btn-sm" onclick="eliminarRegistro()"><i class="fas fa-trash-alt"></i>  </button> 
            </td>
            </tr>
            <tr class="text-muted">
                <td><i class="fas fa-key"></i> 155q0277 </td>
                <td> Cristhian Enrique </td>
                <td> Olivares Lara </td>
                <td> cristhyan_2011@hotmail.com </td>
                <td> 12345 </td>
                <td> 2881138673 </td>
                <td> Profesor </td>
                <td style="text-align: center;">
                  <span class="btn btn-sm" data-toggle="modal" data-target="#ventana2">
                    <i class="fas fa-pen-square"></i>
                  </span>
                <button  class="btn btneliminar btn-sm" onclick="eliminarRegistro()"><i class="fas fa-trash-alt"></i>  </button> 
              </td>
              </tr>
          </tbody>
      </table>
@endsection

@section('modales')
      @include('Trabajador.modals.modalAgregar')
@endsection

@section('codigoJs')
    <script>
      //FUNCION QUE CARGA EL DATATABLE A LA TABLA TRABAJADORES
        $('#tableStudents').DataTable({"language": {
              "decimal": "",
        "emptyTable": "No hay información",
        "info": "Mostrando _START_ a _END_ de _TOTAL_ Registros",
        "infoEmpty": "Mostrando 0 to 0 of 0 Registros",
        "infoFiltered": "(Filtrado de _MAX_ total entradas)",
        "lengthMenu": "Mostrar _MENU_ Registros",
        "search": "Buscar:",
        "zeroRecords": "No se encontraron registros",
        "paginate": {
          "first": "Primero",
          "last": "Ultimo",
          "next": "Siguiente",
          "previous": "Anterior"
      }
            }});
      //FUNCION PARA CUANDO SE AGREGA UN TRABAJADOR
      $('#btnAgregarNuevo').click(function(){
        Swal.fire({
                          position: 'top-center',
                          type: 'success',
                          title: '¡Añadido con Exito!',
                          showConfirmButton: false,
                          timer: 2000
                        })
      });
      //FUNCION PARA CUANDO SE ELIMINA UN TRABAJADOR
      function eliminarRegistro(){
        Swal.fire({
               title: 'Estas seguro de eliminar el registro?',
                text: "No podras recuperarlo",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#134E6F',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Si, Eliminalo!',
                cancelButtonText: 'Cancelar'
                }).then((result) => {
        Swal.fire({
              position: 'top-center',
              type: 'success',
              title: '¡Eliminado!',
              showConfirmButton: false,
              timer: 1500
                  })
            })
      }
    </script>
@endsection