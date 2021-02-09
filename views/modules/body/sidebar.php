<!-- Main Sidebar Container - Contenedor de la barra lateral izquierda-->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo - Logotipo-->
    <a href="../../index3.html" class="brand-link">
    <img src="views/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">AdmiLibreria</span>
    </a>

    <!-- Sidebar - Barra lateral-->
    <div class="sidebar ">
        <!-- Sidebar user (optional)- Usuario de la barra lateral (opcional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="views/dist/img/user.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Kilmar García</a>
            </div>
        </div>

        <!-- SidebarSearch Form - Barra lateral, Formulario de búsqueda -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
            <input class="form-control form-control-sidebar" type="search" placeholder="Buscar" aria-label="Search">
            <div class="input-group-append">
                <button class="btn btn-sidebar">
                <i class="fas fa-search fa-fw"></i>
                </button>
            </div>
            </div>
        </div>

        <!-- Sidebar Menu - Barra lateral, Menú-->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                
                <!-- Add icons to the links using the .nav-icon class
                    with font-awesome or any other icon font library -->

                <!-- Agregue iconos a los enlaces usando la clase .nav-icon
                    con font-awesome o cualquier otra biblioteca de fuentes de iconos -->
                    

                <li class="nav-item">
                    <a href="home" class="nav-link">
                    <i class="nav-icon fas fa-home"></i>
                    <p>
                        Inicio
                    </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="users" class="nav-link">
                    <i class="nav-icon fas fa-user"></i>
                    <p>
                        Usuarios
                    </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="categories" class="nav-link">
                    <i class="nav-icon fas fa-th"></i>
                    <p>
                        Categorias
                    </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="products" class="nav-link">
                    <i class="nav-icon fas fa-box"></i>
                    <p>Productos</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-table"></i>
                    <p>
                        Ventas
                        <i class="right fas fa-angle-left"></i>
                    </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="manage-sales" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Administrar ventas</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="create-sales" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Crear ventas</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="sales-report" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Reporte de ventas</p>
                            </a>
                        </li>
                    </ul>
                </li>

            </ul>
        </nav>
        <!-- /.sidebar-menu - Fin barra lateral, Menú-->
    </div>
    <!-- /.sidebar - Fin de barra lateral-->
</aside>