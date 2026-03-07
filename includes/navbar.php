<?php
// Detectar la página actual para marcar el link activo
$paginaActual = basename($_SERVER['PHP_SELF']);
?>

<!-- ========== Sidebar Start ========== -->
<aside class="left-sidebar">
    <div>
        <div class="brand-logo d-flex align-items-center justify-content-between">
            <a href="./index.php" class="text-nowrap logo-img">
                <img src="assets/images/logos/logo.svg" alt="Logo Barbería" />
            </a>
            <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
                <i class="ti ti-x fs-6"></i>
            </div>
        </div>

        <!-- Sidebar navigation -->
        <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
            <ul id="sidebarnav">

                <!-- HOME -->
                <li class="nav-small-cap">
                    <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                    <span class="hide-menu">Inicio</span>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link <?= ($paginaActual == 'index.php') ? 'active' : '' ?>" href="./index.php"
                        aria-expanded="false">
                        <i class="ti ti-atom"></i>
                        <span class="hide-menu">Dashboard</span>
                    </a>
                </li>

                <li><span class="sidebar-divider lg"></span></li>

                <!-- RESERVAS -->
                <li class="nav-small-cap">
                    <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                    <span class="hide-menu">Gestión</span>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link <?= ($paginaActual == 'reservas.php') ? 'active' : '' ?>"
                        href="./reservas.php" aria-expanded="false">
                        <i class="ti ti-calendar"></i>
                        <span class="hide-menu">Reservas</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link <?= ($paginaActual == 'empleados.php') ? 'active' : '' ?>"
                        href="./empleados.php" aria-expanded="false">
                        <i class="ti ti-user"></i>
                        <span class="hide-menu">Empleados</span>
                    </a>
                </li>

                <li><span class="sidebar-divider lg"></span></li>

                <!-- UI -->
                <li class="nav-small-cap">
                    <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                    <span class="hide-menu">UI</span>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link <?= ($paginaActual == 'ui-buttons.php') ? 'active' : '' ?>"
                        href="./ui-buttons.php" aria-expanded="false">
                        <i class="ti ti-layers-subtract"></i>
                        <span class="hide-menu">Buttons</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link <?= ($paginaActual == 'ui-alerts.php') ? 'active' : '' ?>"
                        href="./ui-alerts.php" aria-expanded="false">
                        <i class="ti ti-alert-circle"></i>
                        <span class="hide-menu">Alerts</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link <?= ($paginaActual == 'ui-card.php') ? 'active' : '' ?>" href="./ui-card.php"
                        aria-expanded="false">
                        <i class="ti ti-cards"></i>
                        <span class="hide-menu">Card</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link <?= ($paginaActual == 'ui-forms.php') ? 'active' : '' ?>"
                        href="./ui-forms.php" aria-expanded="false">
                        <i class="ti ti-file-text"></i>
                        <span class="hide-menu">Forms</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link <?= ($paginaActual == 'ui-typography.php') ? 'active' : '' ?>"
                        href="./ui-typography.php" aria-expanded="false">
                        <i class="ti ti-typography"></i>
                        <span class="hide-menu">Typography</span>
                    </a>
                </li>

                <li><span class="sidebar-divider lg"></span></li>

                <!-- AUTH -->
                <li class="nav-small-cap">
                    <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                    <span class="hide-menu">Auth</span>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link <?= ($paginaActual == 'authentication-login.php') ? 'active' : '' ?>"
                        href="./authentication-login.php" aria-expanded="false">
                        <i class="ti ti-login"></i>
                        <span class="hide-menu">Login</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link <?= ($paginaActual == 'authentication-register.php') ? 'active' : '' ?>"
                        href="./authentication-register.php" aria-expanded="false">
                        <i class="ti ti-user-plus"></i>
                        <span class="hide-menu">Register</span>
                    </a>
                </li>

                <li><span class="sidebar-divider lg"></span></li>

                <!-- EXTRA -->
                <li class="nav-small-cap">
                    <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                    <span class="hide-menu">Extra</span>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link <?= ($paginaActual == 'icon-tabler.php') ? 'active' : '' ?>"
                        href="./icon-tabler.php" aria-expanded="false">
                        <i class="ti ti-archive"></i>
                        <span class="hide-menu">Tabler Icon</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link <?= ($paginaActual == 'sample-page.php') ? 'active' : '' ?>"
                        href="./sample-page.php" aria-expanded="false">
                        <i class="ti ti-file"></i>
                        <span class="hide-menu">Sample Page</span>
                    </a>
                </li>

            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
</aside>
<!-- ========== Sidebar End ========== -->

<!-- ========== Header Start ========== -->
<header class="app-header">
    <nav class="navbar navbar-expand-lg navbar-light">
        <ul class="navbar-nav">
            <li class="nav-item d-block d-xl-none">
                <a class="nav-link sidebartoggler" id="headerCollapse" href="javascript:void(0)">
                    <i class="ti ti-menu-2"></i>
                </a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link" href="javascript:void(0)" id="drop1" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    <i class="ti ti-bell"></i>
                    <div class="notification bg-primary rounded-circle"></div>
                </a>
                <div class="dropdown-menu dropdown-menu-animate-up" aria-labelledby="drop1">
                    <div class="message-body">
                        <a href="javascript:void(0)" class="dropdown-item">Sin notificaciones</a>
                    </div>
                </div>
            </li>
        </ul>
        <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
            <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">
                <li class="nav-item dropdown">
                    <a class="nav-link" href="javascript:void(0)" id="drop2" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <img src="assets/images/profile/user-1.jpg" alt="Usuario" width="35" height="35"
                            class="rounded-circle">
                    </a>
                    <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop2">
                        <div class="message-body">
                            <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                                <i class="ti ti-user fs-6"></i>
                                <p class="mb-0 fs-3">Mi Perfil</p>
                            </a>
                            <a href="./authentication-login.php"
                                class="btn btn-outline-primary mx-3 mt-2 d-block">Cerrar sesión</a>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
</header>
<!-- ========== Header End ========== -->