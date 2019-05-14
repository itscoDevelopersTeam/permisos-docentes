<div class="modal" tabindex="-1" role="dialog" id="ventana1">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Trabajadores</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<i class="fas fa-window-close"></i>
				</button>
			</div>
			<div class="modal-body">
				<form id="frmEstudiante">
					@csrf
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<strong>Codigo: </strong>
								<input type="text" name="matricula" class="form-control" placeholder="añade matricula">
								<small id="emailHelp" class="form-text text-muted">No se compartira tu informacion.</small>
							</div>
							<div class="form-row">
								<div class="col">
									<input type="text" class="form-control" placeholder="Nombre">
								</div>
								<div class="col">
									<input type="text" class="form-control" placeholder="Apellidos">
								</div>
							</div>
							<div class="form-group">
								<strong>Email: </strong>
								<input type="text" name="apellidos" class="form-control" placeholder="añade apellidos">
							</div>
							<div class="form-group">
								<strong>Password: </strong>
								<input type="text" name="apellidos" class="form-control" placeholder="añade apellidos">
							</div>
							<div class="form-group">
								<strong>Telefono: </strong>
								<input type="text" name="apellidos" class="form-control" placeholder="añade apellidos">
							</div>
							<div class="form-group">
								<strong>Rol: </strong>
								<input type="text" name="apellidos" class="form-control" placeholder="añade apellidos">
							</div>
						</div>
					</div>
				</form>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btnadd btn-success btn-block" id="btnAgregarNuevo"><i class="fas fa-save"></i> Guardar</button>
			</div>
		</div>
	</div>
</div>
<script>
	
</script>