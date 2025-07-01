<!-- Botón toggle solo visible en móviles -->
<button class="btn btn-light d-md-none m-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#mobileSidebar">
    <i class="fas fa-bars"></i>
</button>

<!-- Sidebar en escritorio -->
@role('admin')
<aside class="main-sidebar sidebar-danger bg-gradient-secondary elevation-4 d-none d-md-block">
@else
<aside class="main-sidebar sidebar-danger elevation-4 d-none d-md-block" style="background-color: #3B67EC;">
@endrole
    {{-- Contenido del sidebar para escritorio --}}
    @include('layouts.partials.sidebar-content')
    </aside>

<!-- Sidebar tipo offcanvas para móviles -->
<div class="offcanvas offcanvas-start d-md-none" tabindex="-1" id="mobileSidebar">
    <div class="offcanvas-header" style="background-color: #3B67EC;">
        <h5 class="text-white">Menú</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body p-0" style="background-color: #3B67EC;">
    @include('layouts.partials.sidebar-content')
    </div>
</div>
