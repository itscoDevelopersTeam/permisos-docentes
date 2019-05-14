<nav class="menu d-flex d-sm-block justify-content-center flex-wrap">
	<a href="{{ route('admin.notificaciones', 'user') }}" id="a_notificaciones"><i class="far fa-bell"></i><span> Notificaciones </span></a>
	<a href="{{ route('admin.permisos', 'user') }}" id="a_permisos"><i class="fas fa-running"></i><span> Permisos</span></a>
	<a href="{{ route('admin.horas', 'user') }}" id="a_horas"><i class="far fa-clock"></i><span class="intento"> Consulta de Horas</span></a>
	<a href="{{ route('admin.logout', 'user') }}" id="a_cerrar"><i class="fas fa-sign-out-alt"></i><span> Cerrar sesión</span></a>
</nav>