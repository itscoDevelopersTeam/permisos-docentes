<nav class="menu d-flex d-sm-block justify-content-center flex-wrap">
	<a data-toggle="collapse" href="#collapseExample"  aria-expanded="false" aria-controls="collapseExample" id="a_registros"> <i class="fas fa-users"></i> Registros </a>
		<div class="collapse" id="collapseExample">
			<div class="drop-items">
				<a href="{{ route('admin.registra.trabajador', 'user') }}" id="a_trabajador"><i class="fas fa-user-edit"></i> Registrar trabajador</a>
				<a href="{{ route('admin.registra.area', 'user') }}" id="a_area"><i class="fas fa-id-card-alt"></i> Registrar área</a>
			</div>
		</div>
	<a href="{{ route('admin.notificaciones', 'user') }}" id="a_notificaciones"><i class="far fa-bell"></i><span> Notificaciones </span></a>
	<a href="{{ route('admin.permisos', 'user') }}" id="a_permisos"><i class="fas fa-running"></i><span> Permisos</span></a>
	<a href="{{ route('admin.horas', 'user') }}" id="a_horas"><i class="far fa-clock"></i><span class="intento"> Consulta de Horas</span></a>
	<a href="{{ route('admin.logout', 'user') }}" id="a_cerrar"><i class="fas fa-sign-out-alt"></i><span> Cerrar sesión</span></a>
</nav>