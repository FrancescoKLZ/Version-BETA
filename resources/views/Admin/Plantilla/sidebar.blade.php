<ul class="sidebar-menu" data-widget="tree">
   <br>
    <!-- Optionally, you can add icons to the links -->
    <li {{ request()->is('home') ? 'class=active' : ''}}><a href="{{ route('administracion') }}"><i class="fa fa-home"></i> <span>Inicio</span></a></li>
    {{-- <li><a href="#"><i class="fa fa-users"></i> <span>Usuarios</span></a></li> --}}



    @role('administrador')
    <li class="treeview {{ request()->is('home/usuarios') ? 'active' : ''}}"><a href="#"><i class="fa fa-users"></i> <span>Usuarios</span><span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span></a>
        <ul class="treeview-menu">
            <li><a href="{{ route('usuarios.create') }}"><i class="fa fa-user-plus"></i><span>Registrar usuario</span></a></li>
            <li {{ request()->is('home/usuarios/activos') ? 'class=active' : ''}}><a href="{{ route('usuarios.index') }}"><i class="fa fa-address-book"></i><span>Listar registros activos</span></a></li>
            <li><a href="{{ route('usuarios.eliminados') }}"><i class="fa fa-address-book"></i><span>Listar registros inactivos</span></a></li>
        </ul>
    </li>
    @endrole

  </ul>
