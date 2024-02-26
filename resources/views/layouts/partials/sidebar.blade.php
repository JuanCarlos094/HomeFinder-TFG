<aside class="main-sidebar sidebar-danger bg-gradient-danger elevation-4">
    <a href="#" class="brand-link">
        <span class="brand-text font-weight-light text-white"">PROYECTO ZATACA</span>
    </a>

    <div class="sidebar">
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item text-white">
                    <a href="{{ 'home' }}" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt" style="color: white;"></i>
                        <p class="text-white">
                            Dashboarda
                        </p>
                    </a>
                </li>
                <li class="nav-item text-white">
                    <a href="{{ route('admin.usuarios.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-users" style="color: white;"></i>
                        <p class="text-white">
                            Usuarios
                        </p>
                    </a>
                </li>
                <li class="nav-item text-white">
                    <a href="{{ route('admin.clientes.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-user-tie" style="color: white;"></i>
                        <p class="text-white">
                            Clientes
                        </p>
                    </a>
                </li>
                <li class="nav-item text-white">
                    <a href="{{ route('admin.cups.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-user-tie" style="color: white;"></i>
                        <p class="text-white">
                            CUPS
                        </p>
                    </a>
                </li>
                <li class="nav-item text-white">
                    <a href="{{ route('admin.servicios.index') }}"class="nav-link">
                        <i class="nav-icon fas fa-project-diagram" style="color: white;"></i>
                        <p class="text-white">
                            Servicios
                        </p>
                    </a>
                </li>
                <li class="nav-item text-white">
                    <a href="{{ route('admin.cups_servicios.index') }}"class="nav-link">
                        <i class="nav-icon fas fa-project-diagram" style="color: white;"></i>
                        <p class="text-white">
                            Contrataciones
                        </p>
                    </a>
                </li>
                <li class="nav-item text-white">
                    <form id="logoutform" action="{{ url('/logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                
                    <button class="nav-link" onclick="event.preventDefault(); document.getElementById('logoutform').submit();">
                        <p>
                            <i class="fas fa-fw fa-sign-out-alt nav-icon" style="color: white;"></i>
                            Cerrar sesión
                        </p>
                    </button>
                </li>
                
            </ul>
        </nav>
    </div>
</aside>