<a class="brand-link d-flex justify-content-center align-items-center" href="{{ url('/') }}">
    <img src="{{ asset('img/logo-homefinder.jpg') }}"
        alt="Logo HomeFinder"
        style="height: 120px; object-fit: contain;
         @role('admin')
             box-shadow: 0 0 15px white;
             filter: drop-shadow(0 0 8px white);
         @endrole">
</a>

<div class="sidebar">
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-white d-flex align-items-center" href="#" id="perfilDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="nav-icon fas fa-user fa-lg text-white me-2"></i>
                    @role('admin') CEO - {{ auth()->user()->nombre }}
                    @else My Perfil: {{ auth()->user()->nombre }}
                    @endrole
                </a>
                <ul class="dropdown-menu bg-white shadow rounded" aria-labelledby="perfilDropdown">
                    <li>
                        <a class="dropdown-item" href="{{ route('perfil.password.edit') }}" style="color: #3B67EC; text-shadow: 0 0 4px #ffffff">
                            <i class="fas fa-key me-2" style="color: #3B67EC; text-shadow: 0 0 3px #ffffff;"></i> Cambiar contraseña
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="{{ route('admin.perfil.edit', auth()->user()->id) }}"
                            style="color: #3B67EC; text-shadow: 0 0 4px #ffffff;">
                            <i class="fas fa-user-edit me-2" style="color: #3B67EC; text-shadow: 0 0 3px #ffffff;"></i>
                            Cambiar nombre/email
                        </a>
                    </li>
                    <li>
                        <form action="{{ route('admin.usuarios.destroy', auth()->user()->id) }}" method="POST" onsubmit="return confirm('¿Estás seguro de que quieres eliminar tu cuenta?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="dropdown-item text-danger">
                                <i class="fas fa-user-times me-2"></i> Borrar cuenta
                            </button>
                        </form>
                    </li>
                </ul>
            </li>


            @role('admin')
            <li class="nav-item">
                <a href="{{ route('admin.usuarios.index') }}" class="nav-link text-white">
                    <i class="nav-icon fas fa-users text-white"></i>
                    <p>Usuarios</p>
                </a>
            </li>
            @endrole

            <li class="nav-item">
                <a href="{{ route('admin.reservas.index') }}" class="nav-link text-white">
                    <i class="nav-icon fas fa-calendar-alt text-white"></i>
                    <p>Reservas</p>
                </a>
            </li>

            <!--
            <li class="nav-item text-white">
                <a href="{{ route('admin.cups.index') }}" class="nav-link">
                    <i class="nav-icon fas fa-archive" style="color: white;"></i>
                    <p class="text-white">
                        CUPS
                    </p>
                </a>
            </li>
            <li class="nav-item text-white">
                <a href="{{ route('admin.servicios.index') }}" class="nav-link">
                    <i class="nav-icon fas fa-project-diagram" style="color: white;"></i>
                    <p class="text-white">
                        Servicios
                    </p>
                </a>
            </li>
            <li class="nav-item text-white">
                <a href="{{ route('admin.cups_servicios.index') }}" class="nav-link">
                    <i class="nav-icon fas fa-briefcase" style="color: white;"></i>
                    <p class="text-white">
                        Contrataciones
                    </p>
                </a>
            </li>
            <li class="nav-item text-white">
                <a href="{{ route('admin.facturas.index') }}" class="nav-link">
                    <i class="nav-icon fas fa-file-invoice" style="color: white;"></i>
                    <p class="text-white">
                        Facturacion
                    </p>
                </a>
            </li>
        -->

            <li class="nav-item mt-3">
                <form id="logoutform" action="{{ url('/logout') }}" method="POST" class="d-none">@csrf</form>
                <button class="btn btn-outline-light d-flex align-items-center gap-2 px-3 py-2 rounded-pill ms-3"
                    onclick="event.preventDefault(); document.getElementById('logoutform').submit();"
                    style="transition: background-color 0.3s, box-shadow 0.3s;">
                    <i class="fas fa-sign-out-alt"></i>
                    <span class="fw-semibold">Cerrar sesión</span>
                </button>
            </li>
        </ul>
    </nav>
</div>