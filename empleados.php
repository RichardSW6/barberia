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
                  <input type="text" id="buscarEmpleado" class="form-control" placeholder="Buscar por nombre, correo, teléfono...">
                </div>
              </div>
              <div class="col-md-3">
                <select id="filtroPuesto" class="form-select">
                  <option value="">Todos los puestos</option>
                  <option>Barbero</option>
                  <option>Barbero Senior</option>
                  <option>Estilista</option>
                  <option>Recepcionista</option>
                </select>
              </div>
              <div class="col-md-3 text-end">
                <span id="contadorEmpleados" class="text-muted small"></span>
              </div>
            </div>
          </div>
        </div>

        <!-- Tabla de empleados -->
        <div class="card">
          <div class="card-body p-0">
            <div class="table-responsive">
              <table class="table table-hover align-middle mb-0" id="tablaEmpleados">
                <thead class="table-light">
                  <tr>
                    <th class="ps-4">Empleado</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Teléfono</th>
                    <th>Correo</th>
                    <th>Puesto</th>
                    <th>Horario</th>
                    <th class="text-center">Acciones</th>
                  </tr>
                </thead>
                <tbody>
                  <?php

                  $empleados = mysqli_query($conexion, "SELECT id_empleado, nombre, apellido, telefono, email, puesto, fecha_contratacion, activo, turno FROM empleados WHERE activo = 1");
                  while ($e = mysqli_fetch_assoc($empleados)): ?>
                    <tr>
                      <td class="ps-4">
                        <div class="d-flex align-items-center gap-3">
                          <img src="assets/images/profile/user-1.jpg" class="rounded-circle" width="42" height="42"
                            alt="<?= htmlspecialchars($e['nombre']) ?>">
                        </div>
                      </td>
                      <td><?= htmlspecialchars($e['nombre']) ?></td>
                      <td><?= htmlspecialchars($e['apellido']) ?></td>
                      <td><?= htmlspecialchars($e['telefono']) ?></td>
                      <td><?= htmlspecialchars($e['email']) ?></td>
                      <td><?= htmlspecialchars($e['puesto']) ?></td>
                      <td>
                        <?php
                        $turno = $e['turno'];
                        if ($turno == 1) {
                          echo "Lunes a Viernes 10hrs a 18hrs";
                        } else if ($turno == 2) {
                          echo "Lunes a Viernes 14hrs a 22hrs";
                        } else if ($turno == 3) {
                          echo "Miercoles a Domingo 10hrs a 18hrs";
                        } else if ($turno == 4) {
                          echo "Miercoles a Domingo 14hrs a 22hrs";
                        } else {
                          echo "No asignado";
                        }
                        ?>
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
            var buscar   = document.getElementById('buscarEmpleado');
            var filtro   = document.getElementById('filtroPuesto');
            var contador = document.getElementById('contadorEmpleados');
            var tabla    = document.querySelector('#tablaEmpleados tbody');

            function filtrar() {
              var q      = buscar.value.toLowerCase();
              var puesto = filtro.value.toLowerCase();
              var filas  = tabla.querySelectorAll('tr');
              var visibles = 0;
              filas.forEach(function (fila) {
                var texto       = fila.textContent.toLowerCase();
                var celdaPuesto = fila.cells[5] ? fila.cells[5].textContent.toLowerCase() : '';
                var ok = texto.includes(q) && (puesto === '' || celdaPuesto.includes(puesto));
                fila.style.display = ok ? '' : 'none';
                if (ok) visibles++;
              });
              contador.textContent = visibles + ' empleado(s)';
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

  <!-- Modal: Agregar Empleado -->
  <div class="modal fade" id="modalAgregarEmpleado" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title fw-semibold" id="modalLabel"><i class="ti ti-user-plus me-2"></i>Agregar Empleado</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
        </div>
        <div class="modal-body">
          <form>
            <div class="row g-3">
              <div class="col-md-6">
                <label class="form-label fw-semibold">Nombre completo</label>
                <input type="text" class="form-control" placeholder="Ej. Carlos Pérez">
              </div>
              <div class="col-md-6">
                <label class="form-label fw-semibold">Correo electrónico</label>
                <input type="email" class="form-control" placeholder="correo@barberia.com">
              </div>
              <div class="col-md-6">
                <label class="form-label fw-semibold">Teléfono</label>
                <input type="tel" class="form-control" placeholder="664-000-0000">
              </div>
              <div class="col-md-6">
                <label class="form-label fw-semibold">Puesto</label>
                <select class="form-select">
                  <option value="">-- Seleccionar --</option>
                  <option>Barbero Senior</option>
                  <option>Barbero</option>
                  <option>Estilista</option>
                  <option>Recepcionista</option>
                </select>
              </div>
              <div class="col-md-4">
                <label class="form-label fw-semibold">Hora entrada</label>
                <input type="time" class="form-control" value="09:00">
              </div>
              <div class="col-md-4">
                <label class="form-label fw-semibold">Hora salida</label>
                <input type="time" class="form-control" value="18:00">
              </div>
              <div class="col-md-4">
                <label class="form-label fw-semibold">Estado</label>
                <select class="form-select">
                  <option value="activo">Activo</option>
                  <option value="vacaciones">Vacaciones</option>
                  <option value="inactivo">Inactivo</option>
                </select>
              </div>
              <div class="col-12">
                <label class="form-label fw-semibold">Días de descanso</label>
                <div class="d-flex flex-wrap gap-2">
                  <?php
                  $dias = ['Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado', 'Domingo'];
                  foreach ($dias as $dia):
                    ?>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" name="descanso[]" value="<?= strtolower($dia) ?>"
                        id="dia_<?= strtolower($dia) ?>">
                      <label class="form-check-label" for="dia_<?= strtolower($dia) ?>"><?= $dia ?></label>
                    </div>
                  <?php endforeach; ?>
                </div>
              </div>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancelar</button>
          <button type="button" class="btn btn-primary"><i class="ti ti-device-floppy me-1"></i> Guardar</button>
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