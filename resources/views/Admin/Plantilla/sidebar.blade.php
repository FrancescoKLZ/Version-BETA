  <ul class="nav nav-pills nav-sidebar flex-column nav-flat nav-legacy text-sm nav-compact" data-widget="treeview" role="menu" data-accordion="false">
    <li class="nav-item">
        <a href="{{ route('administracion') }}" class="nav-link {{ request()->is('home') ? 'class=active' : ''}}">
            <i class="nav-icon fa fa-home"></i>
            <p>Inicio</p>
        </a>
    </li>
    @role('Administrador')
      <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
              <i class="nav-icon fa fa-users"></i>
              <p> Socios <i class="right fas fa-angle-left"></i> </p>
          </a>

          <ul class="nav nav-treeview">

              <li class="nav-item">
                  <a href="{{ route('usuarios.create') }}" class="nav-link">
                      <i class="fa fa-user nav-icon"></i>
                      <p>Registrar socio</p>
                  </a>
              </li>

              <li class="nav-item">
                  <a href="{{ route('usuarios.index') }}" class="nav-link">
                      <i class="fa fa-address-book nav-icon" style="regular"></i>
                      <p>Socios activos</p>
                  </a>
              </li>

              <li class="nav-item">
                  <a href="{{ route('usuarios.eliminados') }}" class="nav-link">
                      <i class="fa fa-book-dead nav-icon"></i>
                      <p>Socios inactivos</p>
                  </a>
              </li>
          </ul>
      </li>

      <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
              <i class="nav-icon fa fa-car"></i>
              <p> Vehiculos <i class="right fas fa-angle-left"></i> </p>
          </a>

          <ul class="nav nav-treeview">

              <li class="nav-item">
                  <a href="{{ route('vehiculos.create') }}" class="nav-link">
                      <i class="fa fa-taxi nav-icon"></i>
                      <p>Registrar vehiculo</p>
                  </a>
              </li>

              <li class="nav-item">
                  <a href="{{ route('vehiculos.index') }}" class="nav-link">
                      <i class="fa fa-list-alt nav-icon"></i>
                      <p>Vehiculos activos</p>
                  </a>
              </li>

              <li class="nav-item">
                  <a href="#" class="nav-link">
                      <i class="fa fa-book-dead nav-icon"></i>
                      <p>Vehiculos inactivos</p>
                  </a>
              </li>

          </ul>
      </li>

      <li class="nav-item has-treeview">
        <a href="#" class="nav-link">
            <i class="nav-icon  fa fa-id-card-alt"></i>
            <p>Choferes<i class="right fas fa-angle-left"></i></p>
        </a>
        <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="{{ route('choferes.create') }}" class="nav-link">
                  <i class="fas fa-drum-steelpan nav-icon"></i>
                    <p>Registrar Chofer</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('choferes.index') }}" class="nav-link">
                  <i class="fas fa-drum-steelpan nav-icon"></i>
                    <p>Choferes registrados</p>
                </a>
            </li>

        </ul>
      </li>

      <li class="nav-item has-treeview">


          <a href="#" class="nav-link">
              <i class="nav-icon fa fa-money-bill-alt"></i>
              <p> Cuotas de socios <i class="right fas fa-angle-left"></i> </p>
          </a>

          <ul class="nav nav-treeview">

              <li class="nav-item">
                  <a href="{{ route('cuotas.index') }}" class="nav-link">
                      <i class="fas fa-dollar-sign nav-icon"></i>
                      <p>Control de cuotas</p>
                  </a>
              </li>

          </ul>
      </li>

      <li class="nav-item has-treeview">
        <a href="#" class="nav-link">
            <i class="nav-icon  fa fa-info-circle"></i>
            <p>Pagina principal<i class="right fas fa-angle-left"></i></p>
        </a>
        <ul class="nav nav-treeview">

            <li class="nav-item">
                <a href="{{ route('Paginaprincipal.crud.edit') }}" class="nav-link">
                    <i class="fa fa-info nav-icon" aria-hidden="true"></i>
                    <p>Administrar información</p>
                </a>
            </li>
        </ul>
    </li>
      @endrole

      @role('Socio')
      <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
              <i class="nav-icon  fa fa-user-circle"></i>
              <p>Mi perfil<i class="right fas fa-angle-left"></i></p>
          </a>
          <ul class="nav nav-treeview">

              <li class="nav-item">
                  <a href="{{ route('perfil.info') }}" class="nav-link">
                      <i class="fa fa-infinity nav-icon"></i>
                      <p>Información de mi cuenta</p>
                  </a>
              </li>
              <li class="nav-item">
                  <a href="{{ route('perfil.cambio') }}" class="nav-link">
                      <i class="fa fa-fingerprint nav-icon"></i>
                      <p>Cambiar contraseña</p>
                  </a>
              </li>
          </ul>
      </li>
      <li class="nav-item has-treeview">
        <a href="#" class="nav-link">
            <i class="nav-icon  fa fa-calendar-alt"></i>
            <p>Administración de cuotas<i class="right fas fa-angle-left"></i></p>
        </a>
        <ul class="nav nav-treeview">

            <li class="nav-item">
                <a href="{{ route('perfil.cuota.socio') }}" class="nav-link">
                    <i class="fa fa-dollar-sign nav-icon"></i>
                    <p>Consulta de mis cuotas</p>
                </a>
             </li>
        </ul>
    </li>
      @endrole


      {{-- <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
              <i class="nav-icon  fa fa-calculator"></i>
              <p>Ingresos y egresos<i class="right fas fa-angle-left"></i></p>
          </a>
          <ul class="nav nav-treeview">

              <li class="nav-item">
                  <a href="{{ route('ingresos.index') }}" class="nav-link">
                      <i class="fa fa-caret-square-down nav-icon" aria-hidden="true"></i>
                      <p>Ingresos</p>
                  </a>
              </li>

              <li class="nav-item">
                  <a href="{{ route('egresos.index') }}" class="nav-link">
                      <i class="fa fa-caret-square-up nav-icon" aria-hidden="true"></i>
                      <p>Egresos</p>
                  </a>
              </li>
          </ul>
      </li> --}}
  </ul>
