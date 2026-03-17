<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Empleados - Barbería</title>
  <link rel="shortcut icon" type="image/png" href="assets/images/logos/favicon.png" />
  <link rel="stylesheet" href="assets/css/styles.min.css" />
  <link rel="stylesheet" href="assets/css/custom-overrides.css" />
  <!-- Anti-FOUC: aplicar tema antes del render -->
  <script>
    (function () { var s = localStorage.getItem('barberaTheme'); var mq = window.matchMedia('(prefers-color-scheme: dark)'); document.documentElement.setAttribute('data-theme', s === 'dark' ? 'dark' : s === 'light' ? 'light' : mq.matches ? 'dark' : 'light'); })();
  </script>
  <?php require_once 'sql/conexion.php'; ?>
</head>

<body>
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <?php require_once 'includes/navbar.php'; ?>

    <div class="body-wrapper-inner">
      <div class="container-fluid">

        <!-- Encabezado -->
        <div class="d-flex align-items-center justify-content-between mb-4">
          <div>
            <h4 class="fw-semibold mb-1">Empleados</h4>
            <p class="text-muted mb-0">Información del equipo de trabajo</p>
          </div>
          <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalAgregarEmpleado">
            <i class="ti ti-user-plus me-1"></i> Agregar Empleado
          </button>
        </div>

        <!-- Barra de búsqueda y filtros -->
        <div class="card mb-3">
          <div class="card-body py-2">
            <div class="row g-2 align-items-center">
              <div class="col-md-6">
                <div class="input-group">
                  <span class="input-group-text"><i class="ti ti-search"></i></span>
                  <input type="text" id="buscarUsuario" class="form-control" placeholder="Buscar por nombre, usuario...">
                </div>
              </div>
              <div class="col-md-3">
                <select id="filtroRol" class="form-select">
                  <option value="">Todos los roles</option>
                  <option>admin</option>
                  <option>recepcionista</option>
                  <option>barbero</option>
                </select>
              </div>
              <div class="col-md-3 text-end">
                <span id="contadorUsuarios" class="text-muted small"></span>
              </div>
            </div>
          </div>
        </div>

        <!-- Tabla de usuarios -->
        <div class="card">
          <div class="card-body p-0">
            <div class="table-responsive">
              <table class="table table-hover align-middle mb-0" id="tablaUsuarios">
                <thead class="table-light">
                  <tr>
                    <th class="ps-4">Empleado</th>
                    <th>Usuario</th>
                    <th>Rol</th>
                    <th class="text-center">Acciones</th>
                  </tr>
                </thead>
                <tbody>
                  <?php

                  $empleados = mysqli_query($conexion, "SELECT u.id_empleado, u.username, u.rol, u.activo, e.id_empleado, e.nombre, e.apellido
                                                        FROM usuarios u 
                                                        inner join empleados e 
                                                        on u.id_empleado = e.id_empleado
                                                        where u.activo = 1;");
                  while ($e = mysqli_fetch_assoc($empleados)): ?>
                    <tr>
                      <td>
                        <?= htmlspecialchars($e['nombre'] . ' ' . $e['apellido']) ?>
                      </td>
                      <td>
                        <?= htmlspecialchars($e['username']) ?>
                      </td>
                      <td>
                        <?= htmlspecialchars($e['rol']) ?>
                      </td>
                      <td class="text-center">
                        <button class="btn btn-sm btn-outline-primary me-1" title="Editar"><i
                            class="ti ti-pencil"></i></button>
                        <button class="btn btn-sm btn-outline-danger" title="Eliminar"><i
                            class="ti ti-trash"></i></button>
                      </td>
                    </tr>
                  <?php endwhile; ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>

        <script>
          (function () {
            var buscar   = document.getElementById('buscarUsuario');
            var filtro   = document.getElementById('filtroRol');
            var contador = document.getElementById('contadorUsuarios');
            var tabla    = document.querySelector('#tablaUsuarios tbody');

            function filtrar() {
              var q    = buscar.value.toLowerCase();
              var rol  = filtro.value.toLowerCase();
              var filas = tabla.querySelectorAll('tr');
              var visibles = 0;
              filas.forEach(function (fila) {
                var texto    = fila.textContent.toLowerCase();
                var celdaRol = fila.cells[2] ? fila.cells[2].textContent.toLowerCase() : '';
                var ok = texto.includes(q) && (rol === '' || celdaRol.includes(rol));
                fila.style.display = ok ? '' : 'none';
                if (ok) visibles++;
              });
              contador.textContent = visibles + ' usuario(s)';
            }

            buscar.addEventListener('input', filtrar);
            filtro.addEventListener('change', filtrar);
            filtrar();
          })();
        </script>

      </div>
    </div>
  </div>
  </div>



  <script src="assets/libs/jquery/dist/jquery.min.js"></script>
  <script src="assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/sidebarmenu.js"></script>
  <script src="assets/js/app.min.js"></script>
  <script src="assets/libs/simplebar/dist/simplebar.js"></script>
</body>

</html>